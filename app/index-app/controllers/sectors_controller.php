<?php
App::import('Helper', 'Genel');
class SectorsController extends AppController {
	var $name = 'Sectors';
	var $uses = 'Sector';
	function index($id= null) {
		if ($id != Null) {
			$temp = $this->Sector->findById($id);
			$sector[0] = $temp;
			$sector = $this->Sector->Image->getImages($sources = $sector,'Sector');
			$sector = $sector[0];
			$this->set("sector",$sector);
            $this->set("title_for_layout",$sector["Sector"]['name_'.$lang['Short']] ." ");
		} else {
			$sectors = $this->Sector->find("all",Array("conditions" => Array("Sector.has_confirm" => 1)));
			$sectors = $this->Sector->Image->getImages($sources = $sectors,'Sector');
			$this->set("sectors",$sectors);
            $this->set("title_for_layout","Sectors");
		}
		
	}
}
?>
