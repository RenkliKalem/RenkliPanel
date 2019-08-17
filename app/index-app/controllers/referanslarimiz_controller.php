<?php
App::import('Helper', 'Genel');
class ReferanslarimizController extends AppController {
    var $name = 'Referanslarimiz';
    var $uses = 'Reference';
    function index(){

    $this->paginate = array(
	    	'limit' => 15,
	        'order'    => array(
	            			'Reference.id'    => 'DESC'
	            		)
		);
		
		$referanslar = $this->paginate();
		$referanslar = $this->Reference->Image->getImages($sources = $referanslar,'Reference');
		$this->set('referanslar', $referanslar);
		$this->set("title_for_layout", "Referanslarımız");		
    }
    function view($id = Null) {
		$reference = $this->Reference->findById($id);
		$references[0] = $reference;
		$reference = $this->Reference->Image->getImages($references,'Reference');
        $this->set('reference',$reference[0]);
		$this->set("title_for_layout", $reference[0]['Reference']['name_tr']);
            
    }
    function urun($id = Null) {
		$reference = $this->Reference->find("all",Array("conditions" => Array("Reference.productgroup_id" => $id)));
		$reference = $this->Reference->Image->getImages($sources = $reference,'Reference');
		$this->set("reference",$reference);
        $this->set("title_for_layout","Referanslarımız");
            
    }
}

?>
