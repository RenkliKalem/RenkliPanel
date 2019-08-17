<div class="detayTop">
	<h3>Bayilerimiz</h3>
</div>
<div class="content">

<div class="bayilerimiz">
<div class="bayiNavigator">
<?=$this->Html->link("Yurtiçi",Array("action" => "index",1));?>
 / 
<?=$this->Html->link("Yurtdışı",Array("action" => "index",2));?>
<?php echo $this->Session->flash(); ?>
<?php foreach ($iller as $key => $il) {?>
	<?php if ($key != 0) {?>
	 / <?=$this->Html->link($il,Array("action" => "index",$secilenbolge,$key));?>
	<?php } ?> 
<?php } ?> 
</div>
<div id='load'>

<?php $a=1; foreach ($kunyeBilgileri as $kunyeBilgisi) { ?>
	<div class="bayi" <?php if($a%2){ ?>style="margin-right: 30px;"<?php } ?>>
    <h4><?=$kunyeBilgisi['Imprintgroup']['name']?></h4>
       <?php foreach ($kunyeBilgisi['Imprint'] as $kunyeAyrintisi) { ?>
            <div class="adi"><?=$kunyeAyrintisi['name']?> :</div>
            <div class="ayrinti"><?=$kunyeAyrintisi['value']?></div>
       <?php } ?>
   </div>
<?php $a++; ?>
<?php } ?>
</div>
</div>

</div>
<div class="clear"></div>
<script type="text/javascript">
$(document).ready(function(){

	if ($('#city').val() == null){$('#city').val(0);}


});
function ilsec(){
		$('#load').html("Yükleniyor...");
		$('form').submit();

}

</script>




