<?php
App::import('Helper', 'Genel');
class Image extends AppModel {
	var $name = 'Image';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
		'Staticpage' => array(
			'className' => 'Staticpage',
			'foreignKey' => 'staticpage_id',
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
	function getImages($sources = Array(),$model = Null) {
		if ($model != Null) {
			$Genel = new GenelHelper;
			$modelTable = ucfirst($model);
			$output = Array();
			foreach ($sources as $source) {
				if (!is_array($source)) continue;
				$temp = Array();
				$temp = $source;
				unset($temp['Image']);
				foreach ($source['Image'] as $image) {
					$imageFiles = $this->ImageFile->find('all',Array('conditions' => Array('ImageFile.image_id' => $image['id'])));
					foreach ($imageFiles as $imageFile) {
						if (!isset($temp['Image']['Named'])) {$temp['Image']['Named'] = Array();}
						if (!isset($temp['Image']['NonNamed'])) {$temp['Image']['NonNamed'] = Array();}
						if (!isset($temp['Image']['Main'])) {$temp['Image']['Main'] = Array();}
						if (!isset($temp['Image']['NonMain'])) {$temp['Image']['NonMain'] = Array();}
						if (!isset($temp['Image']['All'])) {$temp['Image']['All'] = Array();}
						if ($image['name'] != '') {
							$temp['Image']['Named'][$image['name']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						} else {
							$temp['Image']['NonNamed'][$image['id']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						}
						if ($image['main'] == 1) {
							$temp['Image']['Main'][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						} else {
							$temp['Image']['NonMain'][$image['id']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						}
						$temp['Image']['All'][$image['id']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
					}
				}
				$output[] = $temp;
			}
		} else {
			$Genel = new GenelHelper;
			$output = Array();
			foreach ($sources as $source) {
				$temp = Array();
				$temp = $source;
				unset($temp['Image']);
				foreach ($source['Image'] as $image) {
					$imageFiles = $this->ImageFile->find('all',Array('conditions' => Array('ImageFile.image_id' => $image['id'])));
					foreach ($imageFiles as $imageFile) {
						if (!isset($temp['Image']['Named'])) {$temp['Image']['Named'] = Array();}
						if (!isset($temp['Image']['NonNamed'])) {$temp['Image']['NonNamed'] = Array();}
						if (!isset($temp['Image']['Main'])) {$temp['Image']['Main'] = Array();}
						if (!isset($temp['Image']['NonMain'])) {$temp['Image']['NonMain'] = Array();}
						if (!isset($temp['Image']['All'])) {$temp['Image']['All'] = Array();}
						if ($image['name'] != '') {
							$temp['Image']['Named'][$image['name']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						} else {
							$temp['Image']['NonNamed'][$image['id']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						}
						if ($image['main'] != '') {
							$temp['Image']['Main'][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						} else {
							$temp['Image']['NonMain'][$image['id']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
						}
						$temp['Image']['All'][$image['id']][$imageFile['ImageSize']['filename']] = '../img/resimler/' . $imageFile['ImageFile']['filename'];
					}
				}
				$output[] = $temp;	
			}
		}
		return $output;
	}

}
?>