<style>
	.ui-state-highlight { height: 156px; margin-left:-5px;margin-bottom: 5px; }
</style>
<script type="text/javascript">var wbtrt = '<?=$this->webroot?>';var html;</script>
<?=$this->Html->script(Array('orderinputs','ui/jquery.ui.core.min','ui/jquery.ui.widget.min','ui/jquery.ui.mouse.min','ui/jquery.ui.sortable.min','ui/jquery.ui.dialog.min','ui/jquery.ui.position.min'));?>

<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>REFERANS DÜZENLE</h2>
					
					<ul class="tabs">

						<li><a href="#tab1">Türkçe</a></li>
						<li><a href="#tab2">İngilizce</a></li>
					</ul>
				</div>
				
				<div class="block_content">
					<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create('Reference',Array('encoding' => Null,'inputDefaults' => Array('div' => false,'format' => array('before', 'label', 'error', 'between', 'input', 'after'))));?>

				<p><?php echo $this->Form->input('productgroup_id',Array('label'=>Array('text' =>'Ürün Grubu :'),'empty' => '','class' => 'styled','autocomplete' => 'off','between' => '<br/>','options' => $urunler,'escape' => false,'error' => array('wrap' => 'span','class' => 'note error')));?></p>	
				
				<div class="tab_content" id="tab1">
					<p><?php echo $this->Form->input('name_tr',Array('label'=>Array('text' =>'Referans Adı / Türkçe :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_tr',Array('label'=>Array('text' =>'Referans Detayı / Türkçe :','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				<div class="tab_content" id="tab2">
					<p><?php echo $this->Form->input('name_en',Array('label'=>Array('text' =>'Referans Adı / İngilizce :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_en',Array('label'=>Array('text' =>'Referans Detayı / İngilizce :','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				


			<p><?php echo $this->Form->submit('Kaydet',Array('class' => 'submit','div'=>false));?></p>
			
<?php echo $this->Form->end();?>
    				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				<div class="bendr"></div>
					
			</div>		<!-- .block ends -->