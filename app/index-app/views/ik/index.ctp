<div class="detayTop">
	<h3>İletişim</h3>
</div>
<div class="content">

<div class="Ik_formu">
	<h3>İletişim Formu</h3>
<?php 
    echo $form->create('IkFormu',Array('encoding' => Null,'url' => Array('controller'=>'Ik','action'=>'index'),'inputDefaults' => Array('div' => false,'format' => array('before', 'label', 'error', 'between', 'input', 'after'))));
    echo $form->inputs(array('legend' => false,'fieldset' => false));
    echo $form->end('Gönder');
?>
</div>

<div class="clear"></div>


</div>



