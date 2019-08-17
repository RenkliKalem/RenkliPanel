<?php
class IkController extends AppController {
    var $name = 'Ik';
    var $uses = Array('Contactgroup','IkFormu');
    var $components = array('Email');
    function index(){
        if (!empty($this->data)) {
        $this->IkFormu->set($this->data);
        if ($this->IkFormu->validates()) {
            $this->Email->to = 'info@emtled.com.tr';
            $this->Email->subject = 'Web Sitenizden Mesaj Var! : ' . $this->data['IkFormu']['İsim'];  
            $this->Email->from = $this->data['IkFormu']['Mail'];     
            $this->Email->send($this->data['IkFormu']['Ayrıntı']);
            $this->redirect('gonder');
            }
        }
    }
    function gonder() {
        
    }
}