<?php
class Image extends AppModel {
	var $name = 'Image';
	var $displayField = 'name';

	var $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'article_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Imagegallery' => array(
			'className' => 'Imagegallery',
			'foreignKey' => 'imagegallery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PostCategory' => array(
			'className' => 'PostCategory',
			'foreignKey' => 'post_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Notification' => array(
			'className' => 'Notification',
			'foreignKey' => 'notification_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Staticpage' => array(
			'className' => 'Staticpage',
			'foreignKey' => 'staticpage_id',
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
		),
		'Service' => array(
				'className' => 'Service',
				'foreignKey' => 'service_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
		),
		'Sector' => array(
				'className' => 'Sector',
				'foreignKey' => 'sector_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
		),
		'Feature' => array(
				'className' => 'Feature',
				'foreignKey' => 'feature_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
		),
		'Reference' => array(
			'className' => 'Reference',
			'foreignKey' => 'reference_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ImageFile' => array(
			'className' => 'ImageFile',
			'foreignKey' => 'image_id',
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