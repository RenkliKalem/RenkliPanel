<?php
class AraController extends AppController {
	var $name = "Ara";
	var $uses = "Post";
	function index() {
		if(!empty($this->data)){
			$search=$this->data;
			
		if(isset($search['Productgroup']['name'])){
			$name = $search['Productgroup']['name'];

			$sonuc = $this->Productgroup->find('all',Array('conditions' => Array('Productgroup.name_tr like' => '%'.$name.'%')));
			$this->set('sonuc', $sonuc);
		}

		}else{
			$this->redirect('/');
		}
		
	}
}
?>