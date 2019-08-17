<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class SlidersController extends AppController {

	var $name = 'Sliders';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	            'Slider.id'    => 'desc') 
	); 
	function beforeFilter() {
		$module = new ModulesController;
		$modules = $module->modules;
		if (!isset($modules['Posts'])) {$this->redirect(array('controller'=>'hata','action' => 'modul_yok','haber'));}
		$this->set('modules',$modules);
	}
	function index() {
		$this->set('sliders', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['Slider']['name'] = $Genel->ilk_harf($this->data['Slider']['name']);
			$this->data['Slider']['user_id'] = $this->Session->read('User.id');
			$this->Slider->create();
			if ($this->Slider->save($this->data)) {
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
			$this->data['Slider']['name'] = $Genel->ilk_harf($this->data['Slider']['name']);
			if ($this->Slider->save($this->data)) {
				$this->Session->setFlash(__('<p>Resim Galerisi kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Resim Galerisi kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Slider->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Yanlış Resim Galerisi', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Slider->delete($id)) {
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
			if ($this->Slider->save($data)) {
				$this->Session->setFlash(__('<p>Resim Galerisi ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			}
		
		$this->Session->setFlash(__('Resim Galerisi ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>