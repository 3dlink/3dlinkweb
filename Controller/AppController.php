<?php

	require_once("library/tinify/lib/Tinify/Exception.php");
	require_once("library/tinify/lib/Tinify/ResultMeta.php");
	require_once("library/tinify/lib/Tinify/Result.php");
	require_once("library/tinify/lib/Tinify/Source.php");
	require_once("library/tinify/lib/Tinify/Client.php");
	require_once("library/tinify/lib/Tinify.php");
	

	class AppController extends Controller 
	{
		var $helpers = array('Form', 'Html', 'Session', 'Js', 'Usermgmt.UserAuth');
		public $components = array('Session','RequestHandler', 'Usermgmt.UserAuth');
		function beforeFilter(){
			$this->userAuth();
			$this->response->header('Access-Control-Allow-Origin', '*');
		}
		private function userAuth(){
			$this->UserAuth->beforeFilter($this);

			$this->_setLanguage();

			Configure::write('Config.language', $this->Session->read('Config.language'));
		}

		function _setLanguage() 
		{  
			if (!$this->Session->check('Config.language')) {  
				$this->Session->write('Config.language', 'eng');
			}  
			else if (isset($_GET['language']) && ($_GET['language']  
				!=  $this->Session->read('Config.language'))) {       

				$this->Session->write('Config.language', $_GET['language']);
			}  
		}

		function _compress($file){
			\Tinify\setKey("PTXJLwagfKt6l-r-DTnMNPRycYPVJqrY");

			$source = \Tinify\fromFile("files/".$file);
			$source->toFile("files/".$file);

			return true;
		}
	}
?>