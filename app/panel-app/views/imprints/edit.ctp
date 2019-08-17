<style>
	.ui-state-highlight { height: 156px; margin-left:-5px;margin-bottom: 5px; }
</style>
<script type="text/javascript">var wbtrt = '<?=$this->webroot?>';var html;</script>
<?=$this->Html->script(Array('orderinputs','ui/jquery.ui.core.min','ui/jquery.ui.widget.min','ui/jquery.ui.mouse.min','ui/jquery.ui.sortable.min','ui/jquery.ui.dialog.min','ui/jquery.ui.position.min'));?>
<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>

					<div class="bheadr"></div>
					
					<h2>BAYİ DÜZENLE</h2>

				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create('Imprintgroup',Array('encoding' => Null,'url' => array('controller' => 'imprints', 'action' => 'edit'),'inputDefaults' => Array('div' => false,'format' => array('before', 'label', 'error', 'between', 'input', 'after'))));?>
<?php echo $this->Form->input('id',Array('label'=>Array('text' =>' Aktif'),'type' => 'hidden','class' => 'checkbox','format' => array('before', 'input', 'label', 'error', 'between', 'after'),'error' => array('wrap' => 'span','class' => 'note error')));?>
<p>
	<?php echo $this->Form->input('country',Array('label'=>Array('text' =>'Bölge :','class' => 'req'),'class' => 'styled','autocomplete' => 'off','between' => '<br/>','options'=>array('Bölge Seçin','Yurtiçi', 'Yurtdışı'),'escape' => false,'error' => array('wrap' => 'span','class' => 'note error')));?>
</p>

<p>
	<?php echo $this->Form->input('city',Array('label'=>Array('text' =>'Şehir :','class' => 'req'),'class' => 'styled','autocomplete' => 'off','between' => '<br/>','options'=>array('Şehir Seçin','Adana','Adıyaman','Afyon','Ağrı','Amasya','Ankara','Antalya','Artvin','Aydın','Balıkesir','Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa','Çanakkale','Çankırı','Çorum','Denizli','Diyarbakır','Edirne','Elazığ','Erzincan','Erzurum','Eskişehir','Gaziantep','Giresun','Gümüşhane','Hakkari','Hatay','Isparta','İçel(Mersin)','İstanbul','İzmir','Kars','Kastamonu','Kayseri','Kırklareli','Kırşehir','Kocaeli','Konya','Kütahya','Malatya','Manisa','K.maraş','Mardin','Muğla','Muş','Nevşehir','Niğde','Ordu','Rize','Sakarya','Samsun','Siirt','Sinop','Sivas','Tekirdağ','Tokat','Trabzon','Tunceli','Şanlıurfa','Uşak','Van','Yozgat','Zonguldak','Aksaray','Bayburt','Karaman','Kırıkkale','Batman','Şırnak','Bartın','Ardahan','Iğdır','Yalova','Karabük','Kilis','Osmaniye','Düzce'),'escape' => false,'error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('seller',Array('label'=>Array('text' =>'Bayi Tipi :','class' => 'req'),'class' => 'styled','autocomplete' => 'off','between' => '<br/>','options'=>array('Bayi Tipi Seçin','Ana Bayi', 'Alt Bayi'),'escape' => false,'error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<p>
	<?php echo $this->Form->input('name',Array('label'=>Array('text' =>'Bayi Başlığı :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?>
</p>
<div id="datas">
<?php if (isset($this->data['Secenekler'])) {?>

	<?php $c=1;foreach ($this->data['Secenekler'] as $key => $secenek) {
		$a = explode("_",$key);
		$a = $a[1];
	?>
	
		<p id="sec_<?=$a?>" style="background-color:#f5f5f5;border: 1px solid #dadada;padding-left:5px;margin-left:-5px;margin-bottom:5px;">
                    <label for="name_<?=$a?>" class="req" style="cursor:move;">Adı :</label>
                        <br/>
                    <input name="data[Names][name_<?=$a?>]" type="text" value="<?=$this->data['Names']['name_' . $a]?>" class="text small" autocomplete="off" id="name_<?=$a?>" />
                        <br/>
                    <label for="value_<?=$a?>" class="req">Bilgisi :</label>
                        <br/>
                    <textarea rows="3" cols="20" name="data[Values][value_<?=$a?>]" autocomplete="off" id="value_<?=$a?>" /><?=$this->data['Values']['value_' . $a]?></textarea>

                    <input type="hidden" name="data[Secenekler][secenek_<?=$a?>]" value="1">
                    <input type="hidden" id="order_<?=$a?>" name="data[Orders][order_<?=$a?>]" value="<?=$c?>">
                    
                    <a href="#" onclick="secenekSil(<?=$a?>)" style="margin-left:5px;font-weight:bold;">KALDIR</a>
                </p>
	<?php $c++;} ?>
<?php $count = count($this->data['Secenekler']);} else {$count = 0;} ?>
<span id='target'></span>
</div>
<p>
	<?=$this->Html->link('+ Seçenek Ekle',Array('#'),Array('class' => 'table_button tiny','onclick' => 'secenekOlustur();return false;'))?>
</p>
<p>
	<?php echo $this->Form->submit('Kaydet',Array('class' => 'submit','div'=>false));?>
</p>
<?php echo $this->Form->end();?>
    				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				<div class="bendr"></div>
					
			</div>		<!-- .block ends -->
<script language="javascript">
var a=<?=$count?>;
</script>