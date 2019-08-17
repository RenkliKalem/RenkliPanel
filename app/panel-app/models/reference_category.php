<?php
class ReferenceCategory extends AppModel {
	var $name = 'ReferenceCategory';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
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
			'foreignKey' => 'reference_category_id',
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
		'Reference' => array(
			'className' => 'Reference',
			'foreignKey' => 'reference_category_id',
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

}
?>