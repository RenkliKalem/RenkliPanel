<?php
class BayiController extends AppController {
    var $name = 'Bayi';
    var $uses = Array('Imprintgroup');
    function index($secbolge = Null,$secil = Null){
    $options=array();
    $opt=array();
    $iller = array('Hepsini Göster','Adana','Adıyaman','Afyon','Ağrı','Amasya','Ankara','Antalya','Artvin','Aydın','Balıkesir','Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa','Çanakkale','Çankırı','Çorum','Denizli','Diyarbakır','Edirne','Elazığ','Erzincan','Erzurum','Eskişehir','Gaziantep','Giresun','Gümüşhane','Hakkari','Hatay','Isparta','İçel(Mersin)','İstanbul','İzmir','Kars','Kastamonu','Kayseri','Kırklareli','Kırşehir','Kocaeli','Konya','Kütahya','Malatya','Manisa','K.maraş','Mardin','Muğla','Muş','Nevşehir','Niğde','Ordu','Rize','Sakarya','Samsun','Siirt','Sinop','Sivas','Tekirdağ','Tokat','Trabzon','Tunceli','Şanlıurfa','Uşak','Van','Yozgat','Zonguldak','Aksaray','Bayburt','Karaman','Kırıkkale','Ba™an','Şırnak','Bartın','Ardahan','Iğdır','Yalova','Karabük','Kilis','Osmaniye','Düzce');
$bolge = array('Hepsini Göster','Yurtiçi', 'Yurtdışı');
		$secilenbolge = 0;
		$secilenil = 0;
		if ($secbolge) {
    		$secilenbolge=$secbolge;
    	}
    	if ($secil) {
    		$secilenil=$secil;
    	}
    	if($secilenbolge!=0){
			$options['conditions']['Imprintgroup.country']=$secilenbolge;
		}
		if($secilenil!=0){
			$options['conditions']['Imprintgroup.city']=$secilenil;
			$options['conditions']['Imprintgroup.country']=1;
			$secilenbolge=0;
		}
		
		$this->set("secilenbolge",$secilenbolge);
		$this->set("secilenil",$secilenil);
		$this->set('bolge',$bolge);
        $iletisimBilgileri = $this->Imprintgroup->find('all',$options);
        $data = $this->Imprintgroup->find('all',$opt);
        $temp = Array();
        $temp[0] = 'Hepsini Göster';
        $a = Array();
        foreach ($data as $iletisim) {
        	$temp[$iletisim['Imprintgroup']['city']] = $iller[$iletisim['Imprintgroup']['city']];
        	if (!isset($a[$iletisim['Imprintgroup']['city']])) {$a[$iletisim['Imprintgroup']['city']] = 0;}
        	$a[$iletisim['Imprintgroup']['city']] = $a[$iletisim['Imprintgroup']['city']] + 1;
        }
        foreach ($a as $key => $val) {
        	$temp[$key] = $temp[$key] . "(" . $val . ")";
        }
        $temp[0] = 'Hepsini Göster';
        $this->set('iller',$temp);
        $this->set('kunyeBilgileri',$iletisimBilgileri);
    }
    function bayilerimiz() {
        
    }
}