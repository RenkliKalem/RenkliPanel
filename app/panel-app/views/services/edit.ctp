<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>HİZMET DÜZENLE</h2>
					
					<ul class="tabs">

						<li><a href="#tab1">Türkçe</a></li>
						<li><a href="#tab2">İngilizce</a></li>
						<li><a href="#tab3">Fransızca</a></li>
						<li><a href="#tab4">Rusça</a></li>
						<li><a href="#tab5">Arapça</a></li>
					</ul>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
					<?php echo $this->Form->create('Service',Array('encoding' => Null,'inputDefaults' => Array('div' => false,'format' => array('before', 'label', 'error', 'between', 'input', 'after'))));?>


				<div class="tab_content" id="tab1">					
					<p><?php echo $this->Form->input('name_tr',Array('label'=>Array('text' =>' Hizmet Adı :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_tr',Array('label'=>Array('text' =>'Hizmet Detayı :','class' => 'req'),'class' => 'wysiwyg tall','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				
				<div class="tab_content" id="tab2">					
					<p><?php echo $this->Form->input('name_en',Array('label'=>Array('text' =>'Kategori Başlık / İngilizce :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_en',Array('label'=>Array('text' =>'Kategori Detayı / İngilizce :','class' => 'req'),'class' => 'wysiwyg tall','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				
				<div class="tab_content" id="tab3">					
					<p><?php echo $this->Form->input('name_fr',Array('label'=>Array('text' =>'Kategori Başlık / Fransızca :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_fr',Array('label'=>Array('text' =>'Kategori Detayı / Fransızca :','class' => 'req'),'class' => 'wysiwyg tall','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				
				<div class="tab_content" id="tab4">					
					<p><?php echo $this->Form->input('name_ru',Array('label'=>Array('text' =>'Kategori Başlık / Rusça :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_ru',Array('label'=>Array('text' =>'Kategori Detayı / Rusça :','class' => 'req'),'class' => 'wysiwyg tall','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				
				<div class="tab_content" id="tab5">					
					<p><?php echo $this->Form->input('name_ar',Array('label'=>Array('text' =>'Kategori Başlık / Arapça :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->input('value_ar',Array('label'=>Array('text' =>'Kategori Detayı / Arapça :','class' => 'req'),'class' => 'wysiwyg tall','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
				</div>
				
				<p><?php echo $this->Form->input('has_confirm',Array('label'=>Array('text' =>' Aktif'),'class' => 'checkbox','format' => array('before', 'input', 'label', 'error', 'between', 'after'),'error' => array('wrap' => 'span','class' => 'note error')));?></p>
				
				<p><?php echo $this->Form->submit('Kaydet',Array('class' => 'submit','div'=>false));?></p>
				<?php echo $this->Form->end();?>
    				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				<div class="bendr"></div>
					
</div>		<!-- .block ends -->