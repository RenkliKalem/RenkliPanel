<?php
class AppController extends Controller {
	var $helpers = array('Html', 'Javascript','Form','Genel','Session');
	var $components = array('Cookie','Session');

	function beforeFilter() {
		$lang = $this->Session->read('lang');

		setlocale(LC_ALL, 'tur');
		$this->set("title_for_layout","");

        $this->loadModel("Post");
		$blog = $this->Post->find("all",Array('conditions' => Array("Post.has_confirm" => 1),'order' => 'Post.id DESC','limit' => 5));
		$blog = $this->Post->Image->getImages($blog,'Post');
		$this->set("blog",$blog);

		$this->loadModel('Productgroup');
		$uGruplari = $this->Productgroup->find('all',Array('conditions' => Array('and' => Array('Productgroup.has_confirm' => 1 , 'Productgroup.parent_id' => NULL)),'order' => 'Productgroup.order ASC'));
		$uGruplari = $this->Productgroup->Image->getImages($sources = $uGruplari,'Productgroup');
		$this->set('urungruplari',$uGruplari);

		$this->loadModel("Staticpage");
		$hak = $this->Staticpage->findById("1");
		$this->set("hak", $hak);

		$sayfalar = $this->Staticpage->find("all");
		$this->set("sayfalar", $sayfalar);

		$this->loadModel('Product');
        $random = $this->Product->find('all',Array('limit'=>8, 'order'=>'rand()'));
		$random = $this->Product->Image->getImages($sources = $random,'Product');
		$this->set('randomUrunler',$random);

		$this->loadModel('Feature');
        $ozellik = $this->Feature->find('all',Array('order' => 'Feature.order ASC'));
		$ozellik = $this->Feature->Image->getImages($sources = $ozellik,'Feature');
		$this->set('ozellik',$ozellik);

		$this->loadModel('Sector');
        $sektor = $this->Sector->find('all');
		$sektor = $this->Sector->Image->getImages($sources = $sektor,'Sector');
		$this->set('sektor',$sektor);
		$this->set('hizmetalani',$sektor);

		$this->loadModel('Service');
		$hizmetler = $this->Service->find('all',Array('conditions' => Array('and' => Array('Service.has_confirm' => 1)),'order' => 'Service.id ASC'));
		$hizmetler = $this->Service->Image->getImages($sources = $hizmetler,'Service');
		$this->set('hizmetler',$hizmetler);

		$this->loadModel('Slider');
		$slider = $this->Slider->find('all');
		$slider = $this->Slider->Image->getImages($slider,'Slider');
		$this->set('slider', $slider);


		$this->_saveLanguage($this->_setLanguage());
		$lang = $this->Session->read('lang');
		setlocale(LC_ALL, $lang['Mid']);
		$this->set('lang',$lang);


	}
		function _setLanguage() {
            if (isset($this->params['language'])) {
                $this->Cookie->write('lang', $this->params['language'], false, '20 days');
                return $this->params['language'];
            } else if ($this->Cookie->read('lang')) {
                return $this->Cookie->read('lang');
            } else {
                return 'tr';
            }
        }
        function _saveLanguage($lang) {
            if ($lang == "tr") {
               $temp['Short'] = 'tr';
               $temp['Mid'] = 'tur';
               $temp['Long'] = 'Türkiye';
               $this->Session->write('Config.language', $temp['Mid']);
               Configure::write('Config.language', $temp['Mid']);
               $this->Session->write('lang', $temp);
            } else if ($lang == "en") {
               $temp['Short'] = 'en';
               $temp['Mid'] = 'eng';
               $temp['Long'] = 'Global English';
               $this->Session->write('Config.language', $temp['Mid']);
               Configure::write('Config.language', $temp['Mid']);
               $this->Session->write('lang', $temp);
            } else if ($lang == "bg") {
               $temp['Short'] = 'bg';
               $temp['Mid'] = 'bul';
               $temp['Long'] = 'Bulgarian';
               $this->Session->write('Config.language', $temp['Mid']);
               Configure::write('Config.language', $temp['Mid']);
               $this->Session->write('lang', $temp);
            }
        }
}
?>
