<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
class MainController extends AppController {
    var $name = 'Main';
    var $uses = Null;

    function index() {
        $this->loadModel("Staticpage");
		$hakkimizda = $this->Staticpage->findById("12");
		$this->set("hakkimizda", $hakkimizda);
    }
}
