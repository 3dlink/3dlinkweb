<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class StartController extends AppController{

	public $components = array('Paginator', 'Session');

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

}