<?php
App::import('Helper', 'Genel');
class UsersController extends AppController {

	var $name = 'Users';
			var $paginate = array( 
	    	'limit' => 25,
	        'order'    => array( 
	            'User.id'    => 'desc') 
	); 
	function login() {
		$this->layout = 'login';
		$error = false;
		$user = Array();
		if(!empty($this->data)) {    
			if(($user = $this->User->kontrolLogin($this->data['User'])) == true) { 
				if ($user['User']['ban'] == 1) {
					$this->set('errorMsg','Üyeliğiniz site yöneticisi tarafından durdurulmuş');
				} else if ($user['User']['confirm'] == 0) {
					$this->set('errorMsg','Üyeliğiniz henüz onaylanmamış');
				} else {
					$this->Session->write('User', $user['User']); 
					$this->redirect('/'); 
					exit();
				}
            } else {
				$checkAdmin = $this->User->find('all',Array('conditions' => Array('User.admin' => 1)));
				if (empty($checkAdmin) AND $this->data['User']['username'] == 'renklikalem' AND $this->data['User']['password'] == 'ilkgiris') {
					$this->Session->write('ilkGiris',True);
					$this->redirect('/'); 
				}
				$error = true;
            } 
        } 
		$this->set('error',$error);
		$this->data['User']['password'] = "";
	}
	function logout() {
		$this->Session->destroy();
        $this->redirect('/'); 
	}
	function ilkgiris() {
		$this->layout = 'login';
		if ($this->Session->read('ilkGiris') == True) {
			if (empty($this->data)) {
				$this->data['User']['username'] = 'admin';
				$this->data['User']['mail'] = 'admin@';
			} else {
				$this->User->create();
				$this->User->set($this->data);
				if ($this->User->validates()) {
					$this->data['User']['admin'] = 1;
					$this->data['User']['confirm'] = 1;
					$this->data['User']['ban'] = 0;
					$this->data['User']['password'] = md5($this->data['User']['password']);
					$this->User->save($this->data, array('validate' => false));
					$this->redirect(array('action'=>'logout'));
				}
			}
			unset($this->data['User']['password']);
			$userTypeCheck = $this->User->UserType->find('all',Array('conditions' => Array('UserType.admin' => 1)));
			if (empty($userTypeCheck)) {
				$veri['UserType']['name'] = 'Site Yöneticisi';
				$veri['UserType']['admin'] = 1;
				$veri['UserType']['panel_giris'] = 1;
				$this->User->UserType->save($veri);
				$this->data['User']['user_type_id'] = $this->User->UserType->id;
			} else {
				$this->data['User']['user_type_id'] = $userTypeCheck[0]['UserType']['id'];
			}
		} else {
			$this->redirect('/');
		}
	}
	function index() {
		$this->User->recursive = 1;
		$temp = $this->paginate('User',Array('User.admin' => 0));
		$this->set('users', $temp);
		if (count($temp) == 0) {$this->Session->setFlash(__('<p>Kayıtlı kullanıcı yok!</p>', true),'default',array('class' => 'message info'));}
	}
	function add() {
		$Genel = new GenelHelper;
		if (!empty($this->data)) {
			$this->data['User']['username'] = $Genel->strtolower_tr($this->data['User']['username']);
			$this->data['User']['name'] = $Genel->ilk_harf($this->data['User']['name']);
			$this->data['User']['surname'] = $Genel->ilk_harf($this->data['User']['surname']);
			$this->data['User']['mail'] = $Genel->strtolower_tr($this->data['User']['mail']);
			$this->User->create();
			$this->User->set($this->data);
			if ($this->User->validates()) {
				$this->data['User']['confirm'] = 1;
				$this->data['User']['password'] = md5($this->data['User']['password']);
				$this->User->save($this->data, array('validate' => false));
				$this->Session->setFlash(__('<p>Kullanıcı kaydedildi</p>', true),'default',array('class' => 'message info'));
				$page = $this->{$this->modelClass}->getPageNumber($this->{$this->modelClass}->id, $this->paginate['limit'],$this->paginate['order']);
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			} else {
				$this->Session->setFlash(__('<p>Kullanıcı kaydedilemedi lütfen tekrar deneyin</p>', true),'default',array('class' => 'message info'));
			}
		}
		$this->set('userTypes',$this->User->UserType->find('list',Array('conditions' => Array('UserType.admin' => 0))));
	}
	function edit($id = null) {
		$Genel = new GenelHelper;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('<p>Yanlış Kullanıcı</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action' => 'index'));
		}
		$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
		if (!empty($this->data)) {
			$this->data['User']['username'] = $Genel->strtolower_tr($this->data['User']['username']);
			$this->data['User']['name'] = $Genel->ilk_harf($this->data['User']['name']);
			$this->data['User']['surname'] = $Genel->ilk_harf($this->data['User']['surname']);
			$this->data['User']['mail'] = $Genel->strtolower_tr($this->data['User']['mail']);
			if ($this->data['User']['password'] == '') {unset($this->data['User']['password']);}
			$this->User->set($this->data);
			if ($this->User->validates()) {
				if (isset($this->data['User']['password'])) {$this->data['User']['password'] = md5($this->data['User']['password']);}
				$this->User->save($this->data, array('validate' => false));
				$this->Session->setFlash(__('<p>Kullanıcı kaydedildi</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			} else {
				$this->Session->setFlash(__('<p>Kullanıcı kaydedilemedi lütfen tekrar deneyin</p>', true),'default',array('class' => 'message info'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
			unset($this->data['User']['password']);
		}
			$this->set('page',$page);
			$this->set('userTypes',$this->User->UserType->find('list',Array('conditions' => Array('UserType.admin' => 0))));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Kullanıcı</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$hata = 0;
		$kontrol = $this->User->findById($id);
		if (count($kontrol['Post']) > 0) {$hata = 1;}
		if ($hata == 0) {
			$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
			if ($this->User->delete($id)) {
				$this->Session->setFlash(__('<p>Kullanıcı silindi</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			}
		} else {
				$this->Session->setFlash(__('<p>Bağlı kayıtlar olduğundan silinemedi</p>', true),'default',array('class' => 'message info'));
				$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Kullanıcı silinemedi', true));
		$this->redirect(array('action' => 'index'));
	}
	function set_confirm($id = null,$value = 1) {
		if (!$id) {
			$this->Session->setFlash(__('<p>Yanlış Kullanıcı</p>', true),'default',array('class' => 'message info'));
			$this->redirect(array('action'=>'index'));
		}
		$data['User']['id'] = $id;
		$data['User']['confirm'] = $value;
			$page = $this->{$this->modelClass}->getPageNumber($id, $this->paginate['limit'] , $this->paginate['order']);
			if ($this->User->save($data)) {
				$this->Session->setFlash(__('<p>Kullanıcı ayarlandı</p>', true),'default',array('class' => 'message info'));
				$this->redirect("/" . $this->params['controller'] . "/index/page:{$page}");
			}
		
		$this->Session->setFlash(__('Kullanıcı ayarlanamadı', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>