<?php

App::uses('Paypal', 'Paypal.Lib');

class PaymentsController extends AppController {

	public function index() {

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
				# code...
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
		$this->Payment->save();

		$this->redirect('http://cake.dev');
	}

}
