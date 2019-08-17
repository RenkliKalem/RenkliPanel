<?php
App::import('Controller', 'Modules');
class HataController extends AppController {

	var $name = 'Hata';
	var $uses = '';
	function modul_yok($modulName) {
		$this->set('modulName',$modulName);
	}


}
?>