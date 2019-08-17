<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class ProductsController extends AppController {

	var $name = 'Products';
	var $paginate = array( 
	    	'limit' => 50,
	        'order'    => array( 
	        'Product.id'    => 'desc') 
	); 
	function beforeFilter() {
		$module = new ModulesController;
		$modules = $module->modules;
		if (!isset($modules['Products'])) {$this->redirect(array('controller'=>'hata','action' => 'modul_yok','ürün'));}
		$this->set('modules',$modules);
	}
	function index() {
		$this->set('products', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['Product']['link'] = $Genel->seo_tr($this->data['Product']['name_tr']);
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$productId = $this->Product->id;	
				$this->Session->setFlash(__('<p>Ürün kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Ürün kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		$this->set('groups', $this->Product->Productgroup->generatetreelist($conditions=null, $keyPath=null, $valuePath=null, $spacer= '+', $recursive=null));
	}

	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Yanlış Ürün', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Product']['link'] = $Genel->seo_tr($this->data['Product']['name_tr']);
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('<p>Ürün kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p>Ürün kaydedilemedi</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}		
		$this->set('groups', $this->Product->Productgroup->generatetreelist($conditions=null, $keyPath=null, $valuePath=null, $spacer= '+', $recursive=null));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for image size', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Product->Productdetail->deleteAll(Array('Productdetail.product_id' => $id));
			$this->Session->setFlash(__('<p>Ürün silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image size was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış ürün</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['Product']['id'] = $id;
		$data['Product']['has_confirm'] = $value;
			$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
			if ($this->Product->save($data)) {
				$this->Session->setFlash(__('<p>Ürün ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			}
		
		$this->Session->setFlash(__('Ürün ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>