<?php
class Reference extends AppModel {
	var $name = 'Reference';
	var $displayField = 'name_tr';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
			var $validate = array(
						'name_tr' => array(
							'rule-1' => array(
										'rule' => 'notEmpty',
										'message' => 'Boş Bırakılamaz',
										'last' => true				
									)
						)
					);
	var $belongsTo = array(
		'ReferenceCategory' => array(
			'className' => 'ReferenceCategory',
			'foreignKey' => 'reference_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Productgroup' => array(
			'className' => 'Productgroup',
			'foreignKey' => 'productgroup_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'reference_id',
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
	function getPageNumber($id, $rowsPerPage,$order) {
	    $result = $this->find('list',Array('order' => $order)); // id => name
	    $resultIDs = array_keys($result); // position - 1 => id
	    $resultPositions = array_flip($resultIDs); // id => position - 1
	    $position = $resultPositions[$id] + 1; // Find the row number of the record
	    $page = ceil($position / $rowsPerPage); // Find the page of that row number
	    return $page;
  	}
}
?>