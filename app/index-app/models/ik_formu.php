<?php
class IkFormu extends AppModel {
    var $useTable = false;
    var $_schema = array(
        'Ad Soyad'			=>array('type'=>'string', 'length'=>100),
        'Doğum Tarihi'		=>array('type'=>'string', 'length'=>100), 
        'Doğum Yeri'		=>array('type'=>'string', 'length'=>100),
        'Tel'				=>array('type'=>'string', 'length'=>100),
        'Adres Bilgisi'	=>array('type'=>'text'),
        'Mail'		=>array('type'=>'string', 'length'=>255), 
        'Ayrıntı'	=>array('type'=>'text')
    );
        var $validate = array(
    'İsim' => array(
        'rule'=>array('minLength', 1), 
        'message'=>'İsim gerekli' ),
    'Mail' => array(
        'rule'=>'email', 
        'message'=>'Geçerli bir mail adresi girin' ),
    'Ayrıntı' => array(
        'rule'=>array('minLength', 1), 
        'message'=>'Ayrıntı gerekli' )
       );
}
?>