<?php

	class AppController extends Controller 
	{
		var $helpers = array('Form', 'Html', 'Session', 'Js', 'Usermgmt.UserAuth');
		public $components = array('Session','RequestHandler', 'Usermgmt.UserAuth');
		function beforeFilter(){
			$this->userAuth();

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
	}
?>