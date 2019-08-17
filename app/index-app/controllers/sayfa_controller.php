<?php
App::import('Helper', 'Genel');
class SayfaController extends AppController {
	var $name = 'Sayfa';
	var $uses = '';
	function index() {
		$this->loadModel('Staticpage');
		$staticpage = Array();
		if (isset($this->params['slug'])) {
			$link = $this->params['slug'];
			$staticpage = $this->Staticpage->find('all',Array('conditions' => Array('Staticpage.link' => $link)));
		}
		$staticpage = $this->Staticpage->Image->getImages($sources = $staticpage,'Staticpage');
		$this->set('selectedStaticpage',$staticpage);
        $this->set("title_for_layout", $staticpage[0]['Staticpage']['name_tr']);

	}
}
?>