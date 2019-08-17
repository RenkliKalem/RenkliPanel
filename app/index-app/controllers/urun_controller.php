<?php
App::import('Helper', 'Genel');
class UrunController extends AppController {
    var $name = 'Urun';
    var $uses = 'Product';
    function index(){
                $link = $this->params['slug'];
                $urun = $this->Product->find('all',Array('conditions' => Array('and' => Array('Product.has_confirm' => 1 , 'Product.link' => $link))));
                $urun = $this->Product->Image->getImages($sources = $urun,'Product');
				$this->set('urun',$urun[0]);
				
				$diger = $this->Product->find('all',Array('conditions' => Array('and' => Array('Product.has_confirm' => 1 , 'Product.productgroup_id' => $urun[0]['Product']['productgroup_id']))));
				$diger = $this->Product->Image->getImages($sources = $diger,'Product');
				$this->set('diger',$diger);
    }
}

?>
