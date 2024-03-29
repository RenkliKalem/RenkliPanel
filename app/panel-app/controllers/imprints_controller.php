<?php
App::import('Controller', 'Modules');
App::import('Helper', 'Genel');
class ImprintsController extends AppController {

	var $name = 'Imprints';
        var $uses = 'Imprintgroup';
	var $paginate = array(
	    	'limit' => 50,
	        'order'    => array(
	            'Imprintgroup.id'    => 'desc')
	);
	function index() {
		$this->set('imprintgroups', $this->paginate());
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			if (!isset($this->data['Secenekler'])) {
				$this->Session->setFlash(__('<p>En Az Bir Adet Bayi Olmalı</p>', true),'default',array('class' => 'message info'));
			} else {
					$this->data['Imprintgroup']['name'];
					$this->Imprintgroup->create();
					if ($this->Imprintgroup->save($this->data)) {
						$ImprintgroupId = $this->Imprintgroup->id;
						foreach ($this->data['Secenekler'] as $key => $secenek) {
                                                        $a = explode("_",$key);
                                                        $a = $a[1];
							$data = Array();
							$data['Imprint']['name'] = $this->data['Names']['name_' . $a];
							$data['Imprint']['imprintgroup_id'] = $ImprintgroupId;
							$data['Imprint']['value'] = $this->data['Values']['value_' . $a];
							$data['Imprint']['order'] = $this->data['Orders']['order_' . $a];
							$this->Imprintgroup->Imprint->create();
							$this->Imprintgroup->Imprint->save($data);
						}
						$this->Session->setFlash(__('<p>Bayi kaydedildi</p>', true),'default',array('class' => 'message info'));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('<p>Bayi kaydedilemedi</p>', true),'default',array('class' => 'message info'));
					}
				
			}
		}
	}

	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
					$this->data['Imprintgroup']['name'];
					if ($this->Imprintgroup->save($this->data)) {
						$this->Imprintgroup->Imprint->deleteAll(Array('Imprint.imprintgroup_id' => $id));
						if (isset($this->data['Secenekler'])) {
							foreach ($this->data['Secenekler'] as $key => $secenek) {
                                                        $a = explode("_",$key);
                                                        $a = $a[1];
								$data = Array();
								$data['Imprint']['name'] = $this->data['Names']['name_' . $a];
								$data['Imprint']['imprintgroup_id'] = $id;
								$data['Imprint']['value'] = $this->data['Values']['value_' . $a];
								$data['Imprint']['order'] = $this->data['Orders']['order_' . $a];
								$this->Imprintgroup->Imprint->create();
								$this->Imprintgroup->Imprint->save($data);
							}
						}
						$this->Session->setFlash(__('<p>Bayi kaydedildi</p>', true),'default',array('class' => 'message info'));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('<p>Bayi kaydedilemedi</p>', true),'default',array('class' => 'message info'));
					}
		}
		if (empty($this->data)) {
			$this->data = $this->Imprintgroup->read(null, $id);
			$imprintValues = $this->Imprintgroup->Imprint->Find('all',Array('conditions' => Array('Imprint.imprintgroup_id' => $id),'order' => 'Imprint.order ASC'));
			$a = 1;
			foreach ($imprintValues as $imprintValue) {
				$this->data['Secenekler']['secenek_' . $a] = 1;
				$this->data['Names']['name_' . $a] = $imprintValue['Imprint']['name'];
				$this->data['Values']['value_' . $a] = $imprintValue['Imprint']['value'];
				$this->data['Orders']['order_' . $a] = $imprintValue['Imprint']['order'];
				$a++;
			}
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for image size', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Imprintgroup->delete($id)) {
			$this->Imprintgroup->Imprint->deleteAll(Array('Imprint.imprintgroup_id' => $id));
			$this->Session->setFlash(__('<p>Bayi silindi</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image size was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Anket</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['Imprintgroup']['id'] = $id;
		$data['Imprintgroup']['has_confirm'] = $value;
			$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
			if ($this->Imprintgroup->save($data)) {
				$this->Session->setFlash(__('<p>Bayi ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			}

		$this->Session->setFlash(__('Bayi ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>