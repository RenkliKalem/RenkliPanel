<?php
App::import('Helper', 'Genel');
class HizmetlerimizController extends AppController {
	var $name = 'Hizmetlerimiz';
	var $uses = 'Service';
	function index($id= null) {
		
			$services = $this->Service->find("all",Array("conditions" => Array("Service.has_confirm" => 1)));
			$services = $this->Service->Image->getImages($sources = $services,'Service');
			$this->set("services",$services);
            $this->set("title_for_layout","Faaliyet Alanlarımız");
		
	}
	function view() {
		if(isset($this->params['id'])){
			$this->redirect('/hizmetlerimiz/' . $this->params['slug'] . '.html');
		}
			$service = $this->Service->find('all',Array('conditions' => Array('Service.link' => $this->params['slug'])));
			$service = $this->Service->Image->getImages($sources = $service,'Service');
			$this->set('service',$service[0]);
			$this->set("title_for_layout", $service[0]['Service']['name_tr']. " ");

	}
}
?>
