<?php
App::import('Helper', 'Genel');
class UrunlerController extends AppController {
    var $name = 'Urunler';
    var $uses = 'Product';
    function index(){
                $link = $this->params['slug'];
                $path = $this->Product->find('all',Array('conditions' => Array('and' => Array('Product.has_confirm' => 1,'Productgroup.link' => $link))));
                $this->set('path',$path);
                $urunler = $this->Product->find('all',Array('conditions' => Array('and' => Array('Product.has_confirm' => 1,'Product.productgroup_id' => $path[0]['Productgroup']['id'])),'order' => 'Product.id ASC'));
                $urunler = $this->Product->Image->getImages($sources = $urunler,'Product');
                $this->set('urunler',$urunler);
                $this->set("title_for_layout",$path[0]["Productgroup"]["name_tr"] ."");
                
                
                
                
                $this->loadModel('Productgroup');
                $grup = $this->Productgroup->find('all',Array('conditions' => Array('and' => Array('Productgroup.has_confirm' => 1,'Productgroup.id' => $id))));
                $grup = $this->Productgroup->Image->getImages($sources = $grup,'Productgroup');
                $this->set('grup',$grup[0]);
    }
}

?>
