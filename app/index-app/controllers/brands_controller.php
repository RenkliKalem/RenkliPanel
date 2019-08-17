<?php
class BrandsController extends AppController {
	var $name = 'Brands';
	function view($id = Null) {
			
		$this->loadModel('Product');
		$urun = $this->Product->find('all',Array('conditions' => Array('and' => Array('Product.has_confirm' => 1 , 'Product.brand_id' => $id))));
		$urun = $this->Product->Image->getImages($urun,'Product');
        $this->set('urun',$urun);
        
        $marka = $this->Brand->find('all',Array('conditions' => Array('and' => Array('Brand.has_confirm' => 1 , 'Brand.id' => $id))));
		$marka = $this->Brand->Image->getImages($marka,'Brand');
        $this->set('marka',$marka[0]);
           
        }
        function index(){
		$this->paginate = array(
	    	'limit' => 50,
	        'order'    => array(
	            			'Brand.order'    => 'asc'
	            		),
	        'conditions' => Array(
	        		'Brand.has_confirm' => 1,
	        )
		);
		$brands = $this->paginate();
		$brands = $this->Brand->Image->getImages($brands,'Brand');
		$this->set('brands', $brands);
        }
}

?>