<?php
App::import('Helper', 'Genel');
class ReferenceCategoriesController extends AppController {

	var $name = 'ReferenceCategories';

	function index() {
		$this->ReferenceCategory->recursive = 0;
		$this->set('referenceCategories', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['ReferenceCategory']['name'];
			$this->ReferenceCategory->create();
			if ($this->ReferenceCategory->save($this->data)) {
				$this->Session->setFlash(__('<p>Haber kategorisi kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid image type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['ReferenceCategory']['name'];
			if ($this->ReferenceCategory->save($this->data)) {
				$this->Session->setFlash(__('<p>Referans kategorisi kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ReferenceCategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for image type', true));
			$this->redirect(array('action'=>'index'));
		}
		$hata = 0;
		$kontrol = $this->ReferenceCategory->findById($id);
		foreach ($kontrol as $veriler) {
			if ($veriler != $kontrol['ReferenceCategory']) {
				if (count($veriler) > 0) {
					$hata = 1;
				}
			}
		}
		if ($hata != 1) {
			if ($this->ReferenceCategory->delete($id)) {
				$this->Session->setFlash(__('<p>Referans kategorisi silindi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action'=>'index'));
			}
		} else {
				$this->Session->setFlash(__('<p>Bağlı referanslar olduğundan silinemedi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Referans Kategorisi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['ReferenceCategory']['id'] = $id;
		$data['ReferenceCategory']['has_confirm'] = $value;
			if ($this->ReferenceCategory->save($data)) {
				$this->Session->setFlash(__('<p>Referans kategorisi ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index");
			}
		
		$this->Session->setFlash(__('Haber kategorisi ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}
	function set_main($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Referans Kategorisi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['ReferenceCategory']['id'] = $id;
		$data['ReferenceCategory']['has_main'] = $value;
			if ($this->ReferenceCategory->save($data)) {
				$this->Session->setFlash(__('<p>Referans kategorisi ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index");
			}
		
		$this->Session->setFlash(__('Referans kategorisi ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>