<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');


class StartController extends AppController{

	public $components = array('Paginator', 'Session');
	public $uses = array('Egreso','Ingreso','Personal');


	public function sendMail(){
		$this->autoRender = false;

		$from = 'info@3dlinkweb.com';
		$to = array('info@3dlinkweb.com');
		$subject=  "A contact has been requested";

		$mensaje=
		"Has recibido un nuevo mensaje de: \n\n\n"
		."<b>Nombre:</b> ".$_POST['data']['name']."\n"
		."<b>Teléfono:</b> ".$_POST['data']['phone']."\n"
		."<b>Correo:</b> ".$_POST['data']['email']."\n"
		."<b>Contenido:</b> ".$_POST['data']['question']."\n";
		$this->__enviar_correo($from, $to, $subject, $mensaje);
		return json_encode(1);
	}

	function __enviar_correo($from, $to, $subject, $contenido){
		$Email = new CakeEmail();
		$Email->config('_temp')
		->to($to)
		->subject($subject)
		->from($from)
		->template('default')
		->emailFormat('html')
		->send($contenido);
	}



	public function upload($action = 0) {
		$this->autoRender = false;
		if($action!=0){

			if($action == 1){

				$time = strtotime ( "now" );
				$targetFolder = '../webroot/files/'; // Relative to the root
				if (! empty ( $_FILES )) {
					$tempFile = $_FILES ['file'] ['tmp_name'];
					$targetPath = $targetFolder;
					// Validate the file type
					$fileTypes = array (
							'jpg',
							'jpeg',
							'gif',
							'png',
							'JPG',
							'JPEG',
							'GIF',
							'PNG'
					); // File extensions
					$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
					if (in_array ( $fileParts ['extension'], $fileTypes )) {
						$name = "img" . $time . $this->__randomStr ( 3 );
						$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name . "." . $fileParts ['extension'];
						if (move_uploaded_file ( $tempFile, $targetFile )) {
							$namepath = $name . "." . $fileParts ['extension'];
							return json_encode ($namepath );
						} else {
							return json_encode ( array (
									false,
									false 
							) );
						}
					} else {
						echo 'Imagen no valida';
					}
				}

			}

		}else{
			echo 'error';
		}
	}

	function __randomStr($length) {
		$str = '';
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	
		$size = strlen ( $chars );
		for($i = 0; $i < $length; $i ++) {
			$str .= $chars [rand ( 0, $size - 1 )];
		}
	
		return $str;
	}


	public function balance(){
		
		$this->layout="admin";
		//////////////////////////////////////////////EGRESOS
		$search_eg = [];
		$search_in = [];
        if(isset($this->request->query['filtro']) && isset($this->request->query['year-fil'])){

        	$mes_eg = $this->request->query['filtro'];
        	$year_eg = $this->request->query['year-fil'];
        	$mes_next_eg = $mes_eg+1;
        	$mes_next_eg = '0'.$mes_next_eg;
        	$day_eg = '01';

        	$search_acume = $this->Egreso->find('all', array('conditions'=> array('egr_date >=' => $year_eg.'-'.'01'.'-01', 'egr_date <=' => $year_eg.'-'.$mes_eg.'-'.$day_eg )));
        	$total_acume = 0;
        	foreach ($search_acume as $key => $value) {
        		$total_acume += $value['Egreso']['monto'];
        	}
        	if($mes_eg == '01'){
        		$search_acume = '0';
        	}

        	if($mes_eg == '12'){ 
        		$mes_next_eg= $mes_eg;
        		$day_eg = '31';

        	}

        	$search_eg = $this->Egreso->find('all', array('conditions'=> array('egr_date >=' => $year_eg.'-'.$mes_eg.'-01', 'egr_date <=' => $year_eg.'-'.$mes_next_eg.'-'.$day_eg )));
        	$total_eg = 0;
        	foreach ($search_eg as $key => $value) {
        		$total_eg += $value['Egreso']['monto'];
        	}
			$this->set('total_eg', $total_eg);
			$this->set('search_eg', $search_eg);
			$this->set('search_acume', $search_acume);
			$this->set('total_acume', $total_acume);

			/////////////////////////////////////////INGRESOS

			$mes_in = $this->request->query['filtro'];
        	$year_in = $this->request->query['year-fil'];
        	$mes_next_in = $mes_in+1;
        	$mes_next_in = '0'.$mes_next_in;
        	$day_in = '01';

        	$search_acumi = $this->Ingreso->find('all', array('conditions'=> array('ing_date >=' => $year_in.'-'.'01'.'-01', 'ing_date <=' => $year_in.'-'.$mes_in.'-'.$day_in )));
        	$total_acumi = 0;
        	foreach ($search_acumi as $key => $value) {
        		$total_acumi += $value['Ingreso']['monto'];
        	}
        	if($mes_in == '01'){
        		$search_acumi = '0';
        	}

        	if($mes_in == '12'){ 
        		$mes_next_in= $mes_in;
        		$day_in = '31';

        	}
        	$search_in = $this->Ingreso->find('all', array('conditions'=> array('ing_date >=' => $year_in.'-'.$mes_in.'-01', 'ing_date <=' => $year_in.'-'.$mes_next_in.'-'.$day_in )));
        	$total_in = 0;
        	foreach ($search_in as $key => $value) {
        		$total_in += $value['Ingreso']['monto'];
        	}
			$this->set('total_in', $total_in);
			$this->set('search_in', $search_in);
			$this->set('search_acumi', $search_acumi);
			$this->set('total_acumi', $total_acumi);



			/////////////////////////////////////////////SUMATORIA TOTAL
			$result_acum = 0;
			$result_mes = 0;

			$result_acum = $total_acumi - $total_acume;

			$total_in_mes = $total_in;
			$total_eg_mes = $total_eg;
			$result_mes = $total_in_mes - $total_eg_mes;
			
			$total_in = $total_in + $total_acumi;
			$total_eg = $total_eg + $total_acume;
			$result = $total_in - $total_eg;

			$this->set('total_in_mes',$total_in_mes);
			$this->set('total_eg_mes',$total_eg_mes);

			$this->set('result_acum', $result_acum);
			$this->set('result_mes', $result_mes);
			$this->set('result', $result);


        }else{
        	//////////////////////////////////////////////////EGRESOS DEL MES ACTUAL
        	$mes_eg = date("m");
        	$year_eg = '20'.date("y");
        	$mes_next_eg = $mes_eg+1;
        	$mes_next_eg = '0'.$mes_next_eg;
        	$day_eg = '01';

        	$search_acume = $this->Egreso->find('all', array('conditions'=> array('egr_date >=' => $year_eg.'-'.'01'.'-01', 'egr_date <=' => $year_eg.'-'.$mes_eg.'-'.$day_eg )));
        	$total_acume = 0;
        	foreach ($search_acume as $key => $value) {
        		$total_acume += $value['Egreso']['monto'];
        	}
        	if($mes_eg == '01'){
        		$search_acume = '0';
        	}

        	if($mes_eg == '12'){ 
        		$mes_next_eg= $mes_eg;
        		$day_eg = '31';

        	}

        	$search_eg = $this->Egreso->find('all', array('conditions'=> array('egr_date >=' => $year_eg.'-'.$mes_eg.'-01', 'egr_date <=' => $year_eg.'-'.$mes_next_eg.'-'.$day_eg )));
        	$total_eg = 0;
        	foreach ($search_eg as $key => $value) {
        		$total_eg += $value['Egreso']['monto'];
        	}
			$this->set('total_eg', $total_eg);
			$this->set('search_eg', $search_eg);
			$this->set('search_acume', $search_acume);
			$this->set('total_acume', $total_acume);

			//////////////////////////////////////////////////INGRESOS DEL MES ACTUAL

			$mes_in = date("m");
        	$year_in = date("y");
        	$mes_next_in = $mes_in+1;
        	$mes_next_in = '0'.$mes_next_in;
        	$day_in = '01';

        	$search_acumi = $this->Ingreso->find('all', array('conditions'=> array('ing_date >=' => $year_in.'-'.'01'.'-01', 'ing_date <=' => $year_in.'-'.$mes_in.'-'.$day_in )));
        	$total_acumi = 0;
        	foreach ($search_acumi as $key => $value) {
        		$total_acumi += $value['Ingreso']['monto'];
        	}
        	if($mes_in == '01'){
        		$search_acumi = '0';
        	}

        	if($mes_in == '12'){ 
        		$mes_next_in= $mes_in;
        		$day_in = '31';

        	}
        	$search_in = $this->Ingreso->find('all', array('conditions'=> array('ing_date >=' => $year_in.'-'.$mes_in.'-01', 'ing_date <=' => $year_in.'-'.$mes_next_in.'-'.$day_in )));
        	$total_in = 0;
        	foreach ($search_in as $key => $value) {
        		$total_in += $value['Ingreso']['monto'];
        	}
			$this->set('total_in', $total_in);
			$this->set('search_in', $search_in);
			$this->set('search_acumi', $search_acumi);
			$this->set('total_acumi', $total_acumi);

			//////////////////////////////////////////////////////////////////////////////SUMATORIA TOTAL Y ADICIONALES
			$result_acum = 0;
			$result_mes = 0;

			$result_acum = $total_acumi - $total_acume;

			$total_in_mes = $total_in;
			$total_eg_mes = $total_eg;
			$result_mes = $total_in_mes - $total_eg_mes;
			
			$total_in = $total_in + $total_acumi;
			$total_eg = $total_eg + $total_acume;
			$result = $total_in - $total_eg;

			$this->set('total_in_mes',$total_in_mes);
			$this->set('total_eg_mes',$total_eg_mes);

			$this->set('result_acum', $result_acum);
			$this->set('result_mes', $result_mes);
			$this->set('result', $result);
        }


	}

}