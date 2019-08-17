<?php
App::import('Helper', 'Genel');
class UrunlerimizController extends AppController {
	var $name = 'Urunlerimiz';
	var $uses = 'Productgroup';
	function index() {
            if (isset($this->params['slug'])) {
				$link = $this->params['slug'];
                $path = $this->Productgroup->find('all',Array('conditions' => Array('and' => Array('Productgroup.has_confirm' => 1,'Productgroup.link' => $link))));
                $this->set('path',$path);
                
                $urunGruplari = $this->Productgroup->find('all',Array('conditions' => Array('and' => Array('Productgroup.has_confirm' => 1,'Productgroup.parent_id' => $path[0]["Productgroup"]['id'])),'order' => 'Productgroup.order ASC'));
                $urunGruplari = $this->Productgroup->Image->getImages($sources = $urunGruplari,'Productgroup');
                
                $this->set('grup',$urunGruplari);
                $this->set("title_for_layout",$path[0]["Productgroup"]["name_tr"]);
            } else {
                $urunGruplari = $this->Productgroup->find('all',Array('conditions' => Array('and' => Array('Productgroup.has_confirm' => 1,'Productgroup.parent_id' => NULL)),'order' => 'Productgroup.order ASC'));
                $urunGruplari = $this->Productgroup->Image->getImages($sources = $urunGruplari,'Productgroup');
                $this->set('urunGruplari',$urunGruplari);
                $this->set("title_for_layout","Ürünlerimiz");

            }
            
	}
}
?>