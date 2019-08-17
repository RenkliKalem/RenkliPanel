<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class SectorsController extends AppController {

	var $name = 'Sectors';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	            'Sector.id'    => 'desc') 
	); 
	function beforeFilter() {
		$module = new ModulesController;
		$modules = $module->modules;
		if (!isset($modules['Sectors'])) {$this->redirect(array('controller'=>'hata','action' => 'modul_yok','Hizmetlerimiz'));}
		$this->set('modules',$modules);
	}
	function index() {
		$this->set('sectors', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->Sector->create();
			if ($this->Sector->save($this->data)) {
				$this->Session->setFlash(__('<p>Sektör kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Sektör kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
	}
	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Yanlış Sektör', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sector->save($this->data)) {
				$this->Session->setFlash(__('<p>Sektör kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Sektör kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sector->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Yanlış Sektör', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sector->delete($id)) {
			$this->Session->setFlash(__('<p>Sektör silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('<p>Sektör silinemedi</p>', true),'default',array('class' => 'message info'));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Sektör</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['Sector']['id'] = $id;
		$data['Sector']['has_confirm'] = $value;
			if ($this->Sector->save($data)) {
				$this->Session->setFlash(__('<p>Sektör ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			}
		
		$this->Session->setFlash(__('Sektör ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>