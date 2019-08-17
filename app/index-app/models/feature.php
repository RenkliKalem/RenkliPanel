<?php
class Feature extends AppModel {
	var $name = 'Feature';
	var $displayField = 'name';
		var $validate = array(
						'name' => array(
							'rule-1' => array(
										'rule' => 'notEmpty',
										'message' => 'Boş Bırakılamaz',
										'last' => true				
									)
						)
					);
				var $hasMany = array(
					'Image' => array(
						'className' => 'Image',
						'foreignKey' => 'feature_id',
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