<?php
class FotograflarController extends AppController {
	var $name = 'Fotograflar';
	var $uses = Array('ImageFile');
	function index($id) {
		$file = $this->ImageFile->findById($id);
		$file = $file['ImageFile']['filename'];
		$file = 'img/resimler/' . $file;
		$this->set('file',$file);
		$this->layout = 'image';
	    $this->render();
	}
}

?>