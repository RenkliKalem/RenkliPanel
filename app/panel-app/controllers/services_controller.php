<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class ServicesController extends AppController {

	var $name = 'Services';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	            'Service.id'    => 'desc') 
	); 
	function beforeFilter() {
		$module = new ModulesController;
		$modules = $module->modules;
		if (!isset($modules['Services'])) {$this->redirect(array('controller'=>'hata','action' => 'modul_yok','Hizmetlerimiz'));}
		$this->set('modules',$modules);
	}
	function index() {
		$this->set('services', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['Service']['link'] = $Genel->seo_tr($this->data['Service']['name_tr']);
			$this->Service->create();
			if ($this->Service->save($this->data)) {
				$this->Session->setFlash(__('<p>Proje kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Proje kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
	}
	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Yanlış Proje', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Service']['link'] = $Genel->seo_tr($this->data['Service']['name_tr']);
			if ($this->Service->save($this->data)) {
				$this->Session->setFlash(__('<p>Proje kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Proje kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Service->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Yanlış Proje', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Service->delete($id)) {
			$this->Session->setFlash(__('<p>Proje silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('<p>Proje silinemedi</p>', true),'default',array('class' => 'message info'));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Proje</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['Service']['id'] = $id;
		$data['Service']['has_confirm'] = $value;
			if ($this->Service->save($data)) {
				$this->Session->setFlash(__('<p>Proje ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			}
		
		$this->Session->setFlash(__('Proje ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>