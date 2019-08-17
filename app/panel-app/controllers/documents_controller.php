<?php
App::import('Helper', 'Genel');
class DocumentsController extends AppController {

	public $name = 'Documents';
	
	public $uses = Array('Document');

	public $links = array(
		'product' => Array('controller'=>'products','link' => 'products', 'views' => 'Ürün', 'viewp' => 'Ürünlere','model' => 'Product'),
		'instrument' => Array('controller'=>'instruments','link' => 'instruments', 'views' => 'Döküman', 'viewp' => 'Dökümanlara','model' => 'Instrument')
	);

	public function index($model = Null,$id = Null) {
		if (!$model OR !$id) {
			$this->redirect('/');
		}
		
		$saveColumn = $model . '_' . $id;
		$settingModel = $this->links[$model]['model'] . 'Setting';		
		$this->set('id',$id);
		$this->set('model',$model);
		$modelName = $this->links[$model]['model'];
		$this->loadModel($modelName);

		if (!empty($this->data)) {
			$hata = $this->data["Document"]["filename"]["error"];
			if ($hata === 0) {
				move_uploaded_file($this->data['Document']['filename']['tmp_name'], dirname(WWW_ROOT) . DS . 'files' . DS . 'documents' . DS . $model . '_document_' . $this->data['Document']['filename']['name']);
				$this->data['Document']['path'] = DS . "files" . DS . "documents" . DS . $model . '_document_' . $this->data['Document']['filename']['name'];
				$this->Document->save($this->data);
				$this->redirect(array('action'=>'index/'. $model . '/' . $id));
			} else if ($hata != 0 AND isset($this->data['Document']['id'])) {
    			$this->Document->save($this->data);
    			$this->redirect(array('action'=>'index/'. $model . '/' . $id));
    		}
			$this->Session->setFlash(__('<p>Döküman Kaydedildi</p>', true),'default',array('class' => 'message info'));
		}
		App::import('Controller', $this->links[$model]['controller']);
		$slug = $this->links[$model]['controller'] . 'Controller';
		$controller = new $slug;
		$page = $this->$modelName->getPageNumber($id, $controller->paginate['limit'] , $controller->paginate['order']);
		$this->set('page',$page);
		$this->set('documents', $this->Document->find('all',Array('conditions'=>Array('Document.'.$model.'_id' => $id))));
		$this->set('links', $this->links);
	}

	public function delete($model = null,$id = Null,$imageId = Null) {
		if (!$imageId) {
			$this->Session->setFlash(__('<p>Yanlış Döküman</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index/'. $model . '/' . $id));
		}
		$document = $this->Document->findById($imageId);
		if ($document['Document']['path']){
			$file = dirname(WWW_ROOT) . $document['Document']['path'];
			if (file_exists($file)) unlink($file);
		}
		
		if ($this->Document->delete($imageId)) {
			$this->Session->setFlash(__('<p>Döküman Silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index/'. $model . '/' . $id));
		}
		$this->Session->setFlash(__('<p>Döküman Silinemedi</p>', true),'default',array('class' => 'message info'));
		$this->redirect(array('action'=>'index/'. $model . '/' . $id));
	}

}