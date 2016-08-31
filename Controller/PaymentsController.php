<?php
require_once('..\mercadopago.php');

App::uses('Paypal', 'Paypal.Lib', 'CakeEmail', 'Network/Email');

class PaymentsController extends AppController {

	public function index() {
		$this->layout = 'payment';
	}

	public function pay(){

		$this->autoRender = false;
		if ($this->request->is('post')) {

			$this->Payment->set($this->request->data);

			$this->Payment->save($this->request->data);
			$newId = $this->Payment->id;

			$this->Session->write('id', $newId);

			if ($this->request->data['Payment']['metodo_pago'] == 'paypal') {
				$this->with_paypal($this->request->data);
			} elseif ($this->request->data['Payment']['metodo_pago'] == '123pago') {
				# code...
			} elseif ($this->request->data['Payment']['metodo_pago'] == 'mercadopago') {
				$this->with_mercadopago($this->request->data);
			}
		}
	}

	public function with_paypal($data){

		$this->Paypal = new Paypal(array(
			'sandboxMode' => true,
			'nvpUsername' => 'o0serras0o-facilitator-1_api1.gmail.com',
			'nvpPassword' => '58JHRZN4DYXW4K5L',
			'nvpSignature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AhJQTiJevRUrvUBX7a2dhnDckFSl'
			));

		$order = array(
			'description' => $data['Payment']['descripcion'],
			'currency' => 'USD',
			'return' => 'http://cake.dev/payments/confirm_paypal',
			'cancel' => 'http://cake.dev/payments',
			'custom' => '3Dlink',
			'shipping' => '0',
			'items' => array(
				0 => array(
					'name' => 'Proyecto',
					'description' => '',
					'tax' => 0.00,
					'subtotal' => $data['Payment']['monto'],
					'qty' => 1,
					)
				)
			);

		$this->Session->write('paypal', $this->Paypal);

		$this->Session->write('order', $order);

		try {
			$this->redirect($this->Paypal->setExpressCheckout($order));
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function confirm_paypal(){
		$this->autoRender = false;

		$this->Paypal = $this->Session->read('paypal');
		$order = $this->Session->read('order');
		$token = $_GET['token'];
		$payerId = $_GET['PayerID'];

		try {
			$this->Paypal->doExpressCheckoutPayment($order, $token, $payerId);
		} catch (PaypalRedirectException $e) {
			$this->redirect($e->getMessage());
			die();
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}

		$this->Payment->read(null, $this->Session->read('id'));
		$this->Payment->set('token', $token);
		$this->Payment->set('estado', 1);
		$this->Payment->save();
		
		$payed = $this->Payment->findById($this->Session->read('id'));

		$message = $this->__mensaje($this->Session->read('id'));

		$this->__enviar_correo("info@3dlinkweb.com", $payed["Payment"]["correo"],"Pago éxitoso!", $message);

		return $this->redirect('success');
	}

	public function with_mercadopago($data){
		$this->autoRender = false;
		$mp = new MP ("7383633796764492", "arR2X20hLztNs6oH6Tq4qwdkllPE3HA2");

		$mp->sandbox_mode(TRUE);

		$preference_data["items"][0] = array (
			"title" => $data['Payment']['descripcion'],
			"quantity" => 1,
			"currency_id" => "VEF",
			"unit_price" => (double)$data['Payment']['monto']
			);

		$preference_data["back_urls"] = array(
			"success"=> $_SERVER['HTTP_HOST'].$this->webroot.'payments/confirm_mercadopago/1', 
			"pending"=>$_SERVER['HTTP_HOST'].$this->webroot.'payments/confirm_mercadopago/2', 
			"failure"=> $_SERVER['HTTP_HOST'].$this->webroot.'payments/confirm_mercadopago/3'
			);

		$preference_data["notification_url"] = $_SERVER['HTTP_HOST'].$this->webroot.'payments/notification';

		$preference_data["auto_return"]="approved";

		$preference = $mp->create_preference($preference_data);

		return $this->redirect($preference['response']['init_point']);
	}

	public function confirm_mercadopago($estado = null){
		$this->autoRender = false;

		$this->Payment->read(null, $this->Session->read('id'));
		
		if ($estado != null) {
			if ($estado == 1) {
				$this->Payment->set('estado', 1);
				$this->Payment->set('token', $_GET['preference_id']);
				$this->Payment->save();

				$url ="success";
				$subject = "Pago éxitoso!";
			}elseif ($estado == 2) {
				$this->Payment->set('estado', 2);
				$this->Payment->set('token', $_GET['preference_id']);
				$this->Payment->save();

				$url ="pending";
				$subject = "Pago pendiente!";
			} else{
				$this->Payment->set('estado', 3);
				$this->Payment->set('token', $_GET['preference_id']);
				$this->Payment->save();

				$url ="failure";
				$subject = "Pago rechazado!";
			}
		}

		$payed = $this->Payment->findById($this->Session->read('id'));

		$message = $this->__mensaje($this->Session->read('id'));

		$this->__enviar_correo("info@3dlinkweb.com", $payed["Payment"]["correo"], $subject, $message);

		return $this->redirect($url);
	}

	// function notification(){
	// 	$mp = new MP ("7383633796764492", "arR2X20hLztNs6oH6Tq4qwdkllPE3HA2");

	// 	$contenido = "id: ".$_GET['id']."\ntopic: ".$_GET['topic'];

	// 	$Email = new CakeEmail();
	// 	$Email->config('_temp')
	// 	->to('o0serras0o@gmail.com')
	// 	// ->bcc('info@3dlinkweb.com')
	// 	->subject('notification')
	// 	->from('random@algo.com')
	// 	->template('default')
	// 	->emailFormat('html')
	// 	->send($contenido);

	// 	return true;
	// }

	function __mensaje($id){

		$payed = $this->Payment->findById($id);

		$estado = ["Completado", "Pendiente", "Cancelado"];
		$mensaje = ["El pago a 3Dlink ha sido realizado éxitosamente", "Estamos a la espera de que se complete su pago", "Ha ocurrido un error al procesar su pago"];

		return $mensaje[$payed["Payment"]["estado"]-1]."\n\n La información del pago es la siguiente: \n
		<b>Empresa:</b> ".$payed["Payment"]["nombre_empresa"]."\n
		<b>RIF:</b> ".$payed["Payment"]["rif"]."\n
		<b>Descripción:</b> ".$payed["Payment"]["descripcion"]."\n
		<b>Método de pago:</b> ".$payed["Payment"]["metodo_pago"]."\n
		<b>Monto:</b> ".$payed["Payment"]["monto"]."\n
		<b>Número de transacción:</b> ".$payed["Payment"]["token"]."\n
		<b>Responsable:</b> ".$payed["Payment"]["responsable"]."\n
		<b>Teléfono:</b> ".$payed["Payment"]["telefono"]."\n
		<b>Estado:</b> ".$estado[$payed["Payment"]["estado"]-1];
	}

	function __enviar_correo($from, $to, $subject, $contenido){
		$this->autoRender = false;

		$Email = new CakeEmail();
		$Email->config('_temp')
		->to($to) 
		// ->bcc('info@3dlinkweb.com')
		->subject($subject)
		->from($from)
		->template('default')
		->emailFormat('html')
		->send($contenido);

		return true;
	}

	public function success(){
		$this->layout = 'payment';
	}

	public function pending(){
		$this->layout = 'payment';
	}

	public function failure(){
		$this->layout = 'payment';
	}

}



// SELLER
// {

// "id": 226843419

// "nickname": "TT559812"

// "password": "qatest4425"

// "site_status": "active"

// "email": "test_user_6543324@testuser.com"

// }


//BUYER
// "id": 226796438

// "nickname": "TETE8918510"

// "password": "qatest8537"

// "site_status": "active"

// "email": "test_user_63622623@testuser.com"

// }