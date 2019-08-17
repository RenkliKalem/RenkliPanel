<?php
class AppController extends Controller {
	var $helpers = array('Html', 'Javascript','Form','Genel','Session');
	function beforeRender() {
		$hata = False;
		if ($this->params['controller'] != 'dataset') {
			if (file_exists(CONFIGS.'database.php')) {
				if (!class_exists('ConnectionManager')) {
					require LIBS . 'model' . DS . 'connection_manager.php';
				}
				$db = ConnectionManager::getInstance();
				@$connected = $db->getDataSource('default');
				if (!$connected->isConnected()){
					$this->redirect(Array('controller' => 'dataset','action' => 'index'));
					$hata = True;
					exit();
				}
			} else {
				$this->redirect(Array('controller' => 'dataset','action' => 'index'));
				$hata = True;
				exit();
			}
		} else {
			$hata = True;
			if (file_exists(CONFIGS.'database.php')) {
				if (!class_exists('ConnectionManager')) {
					require LIBS . 'model' . DS . 'connection_manager.php';
				}
				$db = ConnectionManager::getInstance();
				@$connected = $db->getDataSource('default');
				if ($connected->isConnected()){
					$this->redirect('/');
				}
			} else {
				if ($this->params['controller'] != 'dataset') {
					$this->redirect(Array('controller' => 'dataset','action' => 'index'));
					
					exit();
				}
			}
		}
		if($this->action != 'ilkgiris' AND $this->action != 'logout' AND $this->params['controller'] != 'dataset') {
			if ($this->Session->read('ilkGiris') == True) {
				$this->redirect('/users/ilkgiris');
			}
		}
		if($this->action != 'login' AND $this->action != 'logout' AND $this->action != 'ilkgiris' AND $this->params['controller'] != 'dataset') 
        { 
            if($this->Session->check('User') == false AND $this->Session->read('User.panel_giris') != 1 AND $this->Session->read('ilkGiris') != True){ 
                $this->redirect('/users/login'); 
            } else if ($this->params['controller'] != 'pages'){
            	$userTypeId = $this->Session->read('User.user_type_id');
        		$link = "/" . $this->params['url']['url'];
        		$this->loadModel('Page');
        		$kontrol = $this->Page->PageLink->find('all',Array('conditions' => Array('PageLink.link' => $link)));
        		if (isset($kontrol[0])) {
	        		$pageId = @$kontrol[0]['Page']['id'];
	            	$this->loadModel('UserPermit');
	            	$kontrol = $this->UserPermit->find('all',Array('conditions' => Array('UserPermit.page_id' => $pageId,'UserPermit.user_type_id' => $userTypeId)));
	            	if (count($kontrol) == 0 AND $this->Session->read('User.admin') != 1) {
	        			$this->redirect('/'); 
	            	}
        		}
            }
            
        } else if ($this->Session->check('User')){
			$this->redirect('/'); 
		}
		if ($hata == False) {
			$this->loadModel('UserPermit');
			$this->UserPermit->recursive = 2;
			if ($this->Session->read('User.admin') == 1) {
				$this->loadModel('Page');
				$menu = $this->Page->find('all',Array('order' => 'Page.order'));	
				foreach ($menu as $key => $val) {
					$menu[$key]['Page']['PageLink'] = $val['PageLink'];
				}
			} else {
				$menu = $this->UserPermit->find('all',Array('conditions'=>Array('UserPermit.user_type_id' =>$this->Session->read('User.user_type_id'))));
			}
			$this->set('menu',$menu);
		}
	}
	function beforeFilter() { 
	}

}?>