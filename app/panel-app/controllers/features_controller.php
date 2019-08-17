<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class FeaturesController extends AppController {

	var $name = 'Features';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	            'Feature.id'    => 'desc') 
	); 
	function beforeFilter() {
		$module = new ModulesController;
		$modules = $module->modules;
		if (!isset($modules['Features'])) {$this->redirect(array('controller'=>'hata','action' => 'modul_yok','Hizmetlerimiz'));}
		$this->set('modules',$modules);
	}
	function index() {
		$this->set('features', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['Feature']['link'] = $Genel->seo_tr($this->data['Feature']['name_tr']);
			$this->Feature->create();
			if ($this->Feature->save($this->data)) {
				$this->Session->setFlash(__('<p>Özellik kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Özellik kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
	}
	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Yanlış Özellik', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Feature']['link'] = $Genel->seo_tr($this->data['Feature']['name_tr']);
			if ($this->Feature->save($this->data)) {
				$this->Session->setFlash(__('<p>Özellik kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Özellik kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Feature->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Yanlış Özellik', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Feature->delete($id)) {
			$this->Session->setFlash(__('<p>Özellik silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('<p>Özellik silinemedi</p>', true),'default',array('class' => 'message info'));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Özellik</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['Feature']['id'] = $id;
		$data['Feature']['has_confirm'] = $value;
			if ($this->Feature->save($data)) {
				$this->Session->setFlash(__('<p>Özellik ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			}
		
		$this->Session->setFlash(__('Özellik ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>