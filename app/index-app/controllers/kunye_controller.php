<?php
class KunyeController extends AppController {
    var $name = 'Kunye';
    var $uses = Array('Imprintgroup');
    function index(){
        $iletisimBilgileri = $this->Imprintgroup->find('all');
        $this->set('kunyeBilgileri',$iletisimBilgileri);
    }
    function gonder() {
        
    }
}