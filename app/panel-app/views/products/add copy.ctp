<style>
	.ui-state-highlight { height: 156px; margin-left:-5px;margin-bottom: 5px; }
</style>
<script type="text/javascript">var wbtrt = '<?=$this->webroot?>';var html;</script>
<?=$this->Html->script(Array('orderinputs','ui/jquery.ui.core.min','ui/jquery.ui.widget.min','ui/jquery.ui.mouse.min','ui/jquery.ui.sortable.min','ui/jquery.ui.dialog.min','ui/jquery.ui.position.min'));?>

<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>YENİ ÜRÜN EKLE</h2>
					
					<ul class="tabs">

						<li><a href="#tab1">Tab 1</a></li>
						<li><a href="#tab2">Tab 2</a></li>
					</ul>
				</div>
				
<?php echo $this->Form->create('Product',Array('encoding' => Null,'inputDefaults' => Array('div' => false,'format' => array('before', 'label', 'error', 'between', 'input', 'after'))));?>				
				<div class="block_content">

<p>
	<?php echo $this->Form->input('productgroup_id',Array('label'=>Array('text' =>'Bağlı Grup :'),'empty' => '','class' => 'styled','autocomplete' => 'off','between' => '<br/>','options' => $groups,'escape' => false,'error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('name_tr',Array('label'=>Array('text' =>'Ürün Adı (Tr):','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('name_en',Array('label'=>Array('text' =>'Ürün Adı (En):','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('name_fr',Array('label'=>Array('text' =>'Ürün Adı (Fr):','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('name_ru',Array('label'=>Array('text' =>'Ürün Adı (Ru):','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('name_ar',Array('label'=>Array('text' =>'Ürün Adı (Ar):','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>




<p>
	<?php echo $this->Form->input('value_tr',Array('label'=>Array('text' =>'Ürün Detayı (Tr):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('value_en',Array('label'=>Array('text' =>'Ürün Detayı (En):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('value_fr',Array('label'=>Array('text' =>'Ürün Detayı (Fr):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('value_ru',Array('label'=>Array('text' =>'Ürün Detayı (Ru):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('value_ar',Array('label'=>Array('text' =>'Ürün Detayı (Ar):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>




<p>
	<?php echo $this->Form->input('technical_tr',Array('label'=>Array('text' =>'Teknik Detay (Tt):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('technical_en',Array('label'=>Array('text' =>'Teknik Detay (En):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('technical_fr',Array('label'=>Array('text' =>'Teknik Detay (Fr):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('technical_ru',Array('label'=>Array('text' =>'Teknik Detay (Ru):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('technical_ar',Array('label'=>Array('text' =>'Teknik Detay (Ar):','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>


<p>
	<?php echo $this->Form->input('youtube_video',Array('label'=>Array('text' =>'Youtube Video Id (Yoksa boş bırakınız):'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('has_confirm',Array('label'=>Array('text' =>' Aktif'),'class' => 'checkbox','format' => array('before', 'input', 'label', 'error', 'between', 'after'),'checked' => false,'error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<div id="datas">
<?php if (isset($this->data['Secenekler'])) {?>

	<?php $c=1;foreach ($this->data['Secenekler'] as $key => $secenek) {
		$a = explode("-",$key);
		$a = $a[1];
	?>
	
		<p id="sec-<?=$a?>" style="background-color:#f5f5f5;border: 1px solid #dadada;padding-left:5px;margin-left:-5px;margin-bottom:5px;">
                    <label for="name_tr-<?=$a?>" class="req" style="cursor:move;">Adı :</label><br/>
                    <input name="data[Names][name_tr-<?=$a?>]" type="text" value="<?=$this->data['Names']['name_tr-' . $a]?>" class="text small" autocomplete="off" id="name_tr-<?=$a?>" />
                    <label for="name_en-<?=$a?>" class="req" style="cursor:move;">Adı :</label><br/>
                    <input name="data[Names][name_en-<?=$a?>]" type="text" value="<?=$this->data['Names']['name_en-' . $a]?>" class="text small" autocomplete="off" id="name_en-<?=$a?>" />
                    
                        <br/>
                    <label for="value_tr-<?=$a?>" class="req">Bilgisi :</label><br/>
                    <textarea rows="3" cols="20" name="data[Values][value_tr-<?=$a?>]" autocomplete="off" id="value_tr-<?=$a?>" /><?=$this->data['Values']['value_tr-' . $a]?></textarea>
                    <label for="value_en-<?=$a?>" class="req">Bilgisi :</label><br/>
                    <textarea rows="3" cols="20" name="data[Values][value_en-<?=$a?>]" autocomplete="off" id="value_en-<?=$a?>" /><?=$this->data['Values']['value_en-' . $a]?></textarea>

                    <input type="hidden" name="data[Secenekler][secenek-<?=$a?>]" value="1">
                    <input type="hidden" id="order-<?=$a?>" name="data[Orders][order-<?=$a?>]" value="<?=$c?>">
                    
                    <a href="#" onclick="secenekSil(<?=$a?>)" style="margin-left:5px;font-weight:bold;">KALDIR</a>
                </p>
	<?php $c++;} ?>
<?php $count = count($this->data['Secenekler']);} else {$count = 0;} ?>
<span id='target'></span>
</div>
<p>
	<?=$this->Html->link('+ Seçenek Ekle',Array('#'),Array('class' => 'table_button tiny','onclick' => 'secenekOlustur();return false;'))?>
</p>

    				</div>		<!-- .block_content ends -->
<p>
	<?php echo $this->Form->submit('Kaydet',Array('class' => 'submit','div'=>false));?>
</p>
<?php echo $this->Form->end();?>
				
				<div class="bendl"></div>
				<div class="bendr"></div>
					
			</div>		<!-- .block ends -->
<script language="javascript">
var a=<?=$count?>;
</script>