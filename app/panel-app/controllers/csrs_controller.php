<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class CsrsController extends AppController {

	var $name = 'Csrs';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	        'Csr.id'    => 'desc') 
	); 

	function index() {
		$this->set('Csrs', $this->paginate());
		
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->Csr->create();
			if ($this->Csr->save($this->data)) {
				$this->Session->setFlash(__('<p>Müşteri Temsilcisi kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Müşteri Temsilcisi kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
	}

	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Yanlış Müşteri Temsilcisi', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Csr->save($this->data)) {
				$this->Session->setFlash(__('<p>Müşteri Temsilcisi kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Müşteri Temsilcisi kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Csr->read(null, $id);
		}
	}
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Yanlış Temsilci', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Csr->delete($id)) {
			$this->Session->setFlash(__('<p>Müşteri Temsilcisi silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Müşteri Temsilcisi Temsilcisi Silinemedi', true));
		$this->redirect(array('action' => 'index'));
	}
	


}
?>