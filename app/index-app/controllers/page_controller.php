<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
class PageController extends AppController {
    var $name = 'Page';
    var $uses = 'Staticpage';

    function view($id = Null) {
        if ($id == Null) {
            $this->redirect('/');
        }
        $page = $this->Staticpage->findById($id);
	}
}
