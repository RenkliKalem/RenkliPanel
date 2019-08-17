<?php
App::import('Helper', 'Genel');
class MevzuatController extends AppController {
	var $name = 'Mevzuat';
	var $uses = 'Instrument';
	function index() {

	            $dokuman = $this->Instrument->find('all');               
                $this->set('dokuman',$dokuman);
                $this->set("title_for_layout","Mevzuatlar");

            
	}
}
?>