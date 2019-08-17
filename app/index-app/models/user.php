<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
						'username' => array(
							'rule-1' => array(
										'rule' => 'notEmpty',
										'message' => 'Boş Bırakılamaz',
										'last' => true				
									),
							'rule-2' => array(
										'rule' => array('between', 5, 10),
										'message' => 'Kullanıcı Adı 5 ile 10 Karakter Uzunluğunda Olmalıdır',
										'last' => true				
									),
							'rule-3' => array(
										'rule' => 'isUnique',
										'message' => 'Bu Kullanıcı Adına Sahip Başka Biri Var',
										'last' => true				
									),
							'rule-4' => array(
										'rule' => 'alphaNumeric',
										'message' => 'Sadece Sayı ve Harf Girebilirsiniz',
										'last' => true				
									)
						),
						'password' => array(
							'rule-1' => array(
										'rule' => 'notEmpty',
										'message' => 'Boş Bırakılamaz',
										'last' => true				
									),
							'rule-2' => array(
										'rule' => array('between', 5, 15),
										'message' => 'Şifre 5 ile 15 Karakter Uzunluğunda Olmalıdır',
										'last' => true				
									),
							'rule-4' => array(
										'rule' => 'alphaNumeric',
										'message' => 'Sadece Sayı ve Harf Girebilirsiniz',
										'last' => true				
									)
						),
						'mail' => array(
							'rule-1' => array(
										'rule' => 'notEmpty',
										'message' => 'Boş Bırakılamaz',
										'last' => true				
									),
							'rule-2' => array(
										'rule' => array('email', true),
										'message' => 'Geçerli Mail Adresi Girin',
										'last' => true				
									),
							'rule-3' => array(
										'rule' => 'isUnique',
										'message' => 'Bu Mail Adresi Daha Önce Kullanılmış',
										'last' => true				
									)
						),
						'name' => array(
							'rule-1' => array(
										'rule' => 'notEmpty',
										'message' => 'Boş Bırakılamaz',
										'last' => true				
									)
						),
						'surname' => array(
							'rule-1' => array(
										'rule' => 'notEmpty',
										'message' => 'Boş Bırakılamaz',
										'last' => true				
									)
						)
					);
	var $belongsTo = array(
		'UserType' => array(
			'className' => 'UserType',
			'foreignKey' => 'user_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Imagegallery' => array(
			'className' => 'Imagegallery',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SurveyVoter' => array(
			'className' => 'SurveyVoter',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserProfile' => array(
			'className' => 'UserProfile',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	function kontrolLogin($data) 
    { 
        $user = $this->find(array('username' => $data['username'], 'password' => md5($data['password']),'UserType.panel_giris' => 1));
		$veri = Array();
        if(empty($user) == false) {
            $veri['User'] = $user['User'];
			$veri['User']['panel_giris'] = @$user['UserType']['panel_giris'];
			$veri['User']['user_type'] = @$user['UserType']['name'];
			return $veri; 
		}
        return false; 
    }
    function getPageNumber($id, $rowsPerPage,$order) {
	    $result = $this->find('list',Array('order' => $order)); // id => name
	    $resultIDs = array_keys($result); // position - 1 => id
	    $resultPositions = array_flip($resultIDs); // id => position - 1
	    $position = $resultPositions[$id] + 1; // Find the row number of the record
	    $page = ceil($position / $rowsPerPage); // Find the page of that row number
	    return $page;
  	}
	function getList($cond) {
		$users = $this->find('all',$cond);
		$veri = Array();
		foreach ($users as $user) {
			$veri[$user['User']['id']] = $user['User']['name'] . " " . $user['User']['surname'];
		}
		return $veri;
	}
}
?>