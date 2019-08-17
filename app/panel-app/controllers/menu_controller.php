<?php
class MenuController extends AppController {
	var $name = 'Menu';
	var $uses = 'Page';
	function index(){
		$pages = $this->Page->find('list');
		$pagesVal = $this->Page->find('all',Array('order' => 'Page.order'));
		
		$this->set('pagesVal' , $pagesVal);
		$this->set('pages' , $pages);
	}
	function pages(){
		$this->layout = 'ajax';
		$pages = $this->Page->find('all');
		$this->set('pages' , $pages);
	}
	function add(){
		$this->layout = 'ajax';
		$sonuc='';
		if (isset($this->data['Page'])) {
			$this->Page->save($this->data);
			$id = $this->Page->id;
			$sonuc = $id . '1010101' . $this->data['Page']['name'] . '1010101' . $this->data['Page']['controller'];
		}
		if (isset($this->data['PageLink'])) {
			$this->Page->PageLink->save($this->data);
			$id = $this->Page->PageLink->id;
			$sonuc = $id . '1010101' . $this->data['PageLink']['name'] . '1010101' . $this->data['PageLink']['link']. '1010101' . $this->data['PageLink']['page_id'];
		}
		$this->set('sonuc',$sonuc);
	}
	function order(){
		$this->layout = 'ajax';
		$sonuc='';
		if (isset($this->params['form']['order'])) {
			$pageOrder = 1;
			foreach ($this->params['form']['order'] as $key => $val) {
				$data = explode(':',$val);
				$data = explode('_',$data[0]);
				$pageId = $data[1];
				$page['Page']['id'] = $pageId;
				$page['Page']['order'] = $pageOrder;
				$this->Page->save($page);
				$pageOrder++;
				$data = explode(':',$val);
				if ($data[1] != '') {
					$data = explode(',',$data[1]);
					$subPageOrder = 1;
					foreach ($data as $keya => $vala) {
						$veri = explode('_',$vala);
						$subPageId = $veri[1];
						$subPage['PageLink']['id'] = $subPageId;
						$subPage['PageLink']['order'] = $subPageOrder;
						$this->Page->PageLink->save($subPage);
						$subPageOrder++;
					}
				}
			}
			$sonuc ='OK';
		}
		$this->set('sonuc',$sonuc);
	}
	function del(){
		$this->layout = 'ajax';
		$sonuc='';
		if (isset($this->params['form']['type'])) {
			$table = $this->params['form']['type'];
			if ($table == 'Page') {
				$this->Page->delete($this->params['form']['id'],True);
				$sonuc ='OK';
			} else if ($table == 'PageLink') {
				$this->Page->PageLink->delete($this->params['form']['id']);
				$sonuc ='OK';
			}
		}
		$this->set('sonuc',$sonuc);
	}
}
?>