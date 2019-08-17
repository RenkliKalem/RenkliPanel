<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>MARKA DÜZENLE</h2>
					
					<ul class="tabs">

						<li><a href="#tab1">Türkçe</a></li>
					</ul>
				</div>
				
				
				
				<div class="block_content">
<?php echo $this->Form->create('Brand',Array('encoding' => Null,'inputDefaults' => Array('div' => false,'format' => array('before', 'label', 'error', 'between', 'input', 'after'))));?>
					
					
				<div class="tab_content" id="tab1">					
					<p><?php echo $this->Form->input('name_tr',Array('label'=>Array('text' =>'Marka Başlık / Türkçe :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_tr',Array('label'=>Array('text' =>'Marka Detayı / Türkçe :','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				
				
				<p><?php echo $this->Form->input('order',Array('label'=>Array('text' =>'Sıra Numarası (Küçükten Büyüğe Sırılanır)(Boş:1000):'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				
				<p><?php echo $this->Form->input('has_confirm',Array('label'=>Array('text' =>' Aktif'),'class' => 'checkbox','format' => array('before', 'input', 'label', 'error', 'between', 'after'),'checked' => false,'error' => array('wrap' => 'span','class' => 'note error')));?></p>
				
				<p><?php echo $this->Form->submit('Kaydet',Array('class' => 'submit','div'=>false));?></p>
				
				<?php echo $this->Form->end();?>
    			</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				<div class="bendr"></div>
					
			</div>		<!-- .block ends -->