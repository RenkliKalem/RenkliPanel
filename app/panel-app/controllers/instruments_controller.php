<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class InstrumentsController extends AppController {

	var $name = 'Instruments';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	            'Instrument.id'    => 'desc') 
	); 
	function beforeFilter() {
		$module = new ModulesController;
		$modules = $module->modules;
		if (!isset($modules['Posts'])) {$this->redirect(array('controller'=>'hata','action' => 'modul_yok','haber'));}
		$this->set('modules',$modules);
	}
	function index() {
		$this->set('instruments', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['Instrument']['user_id'] = $this->Session->read('User.id');
			$this->Instrument->create();
			if ($this->Instrument->save($this->data)) {
				$this->Session->setFlash(__('<p>Resim Galerisi kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Resim Galerisi kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
	}

	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Yanlış Resim Galerisi', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Instrument->save($this->data)) {
				$this->Session->setFlash(__('<p>Resim Galerisi kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Resim Galerisi kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Instrument->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Yanlış Resim Galerisi', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Instrument->delete($id)) {
			$this->Session->setFlash(__('<p>Resim Galerisi silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image size was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Haber</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['Post']['id'] = $id;
		$data['Post']['has_confirm'] = $value;
			$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
			if ($this->Instrument->save($data)) {
				$this->Session->setFlash(__('<p>Resim Galerisi ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			}
		
		$this->Session->setFlash(__('Resim Galerisi ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>