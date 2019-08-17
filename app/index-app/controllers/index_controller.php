<?php
class IndexController extends AppController {
	var $name='index';
	var $uses = 'Instrument';
	function index() {
		$indexlist = $this->Instrument->find('all');
		$this->set('indexlist',$indexlist);
		
	}
}
?>
