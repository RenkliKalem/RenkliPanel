<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class ReferencesController extends AppController {

	var $name = 'References';
	var $paginate = array( 
	    	'limit' => 25
	); 
	function index() {
		$this->set('references', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['Reference']['name'];
			$this->Reference->create();
			if ($this->Reference->save($this->data)) {
				$this->Session->setFlash(__('<p>Referans kaydedildi</p>', true),'default',array('class' => 'message info'));
				$page = $this->{$this->modelClass}->getPageNumber($this->{$this->modelClass}->id, $this->paginate['limit'],$this->paginate['order']);
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			} else {
				$this->Session->setFlash(__('<p>Referans kaydedilemedi lütfen tekrar deneyin</p>', true),'default',array('class' => 'message info'));
			}
		}
		$this->loadModel('Productgroup');
		$this->set('urunler', $this->Productgroup->find('list'));
		
	}

	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('<p>Yanlış referans</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Reference']['name'];
			if ($this->Reference->save($this->data)) {
				$this->Session->setFlash(__('<p>Referans kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Referans kaydedilemedi lütfen tekrar deneyin</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Reference->read(null, $id);
		}
		$this->loadModel('Productgroup');
		$this->set('urunler', $this->Productgroup->find('list'));
	}

	

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış referans</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
			if ($this->Reference->delete($id)) {
				$this->Session->setFlash(__('<p>Referans silindi</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			}
		$this->Session->setFlash(__('Kullanıcı türü silinemedi', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>