<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class StaticpagesController extends AppController {

	var $name = 'Staticpages';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	            'Staticpage.id'    => 'desc') 
	); 
	function beforeFilter() {
		$module = new ModulesController;
		$modules = $module->modules;
		if (!isset($modules['Staticpages'])) {$this->redirect(array('controller'=>'hata','action' => 'modul_yok','sayfalar'));}
		$this->set('modules',$modules);
	}
	function index() {
		$this->set('staticpages', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['Staticpage']['name_tr'] = $Genel->ilk_harf($this->data['Staticpage']['name_tr']);
                        $this->data['Staticpage']['link'] = $Genel->seo_tr($this->data['Staticpage']['name_tr']);
			$this->Staticpage->create();
			if ($this->Staticpage->save($this->data)) {
				$this->Session->setFlash(__('<p>Sayfa kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Sayfa kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
	}

	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Yanlış Sayfa', true));
			$this->redirect(array('action' => 'index'));
		}
		$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
		if (!empty($this->data)) {
			$this->data['Staticpage']['name_tr'] = $Genel->ilk_harf($this->data['Staticpage']['name_tr']);
			if ($this->Staticpage->save($this->data)) {
				$this->Session->setFlash(__('<p>Sayfa kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			} else {
				$this->Session->setFlash(__('<p>Sayfa kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Staticpage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Yanlış Sayfa', true));
			$this->redirect(array('action'=>'index'));
		}
		$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
		if ($this->Staticpage->delete($id)) {
			$this->Session->setFlash(__('<p>Sayfa silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
		}
		$this->Session->setFlash(__('Sayfa Silinemedi', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>