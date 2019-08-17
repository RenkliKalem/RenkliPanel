			<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>					
					<h2>YENİ SAYFA</h2>					
					<ul class="tabs">
						<li><a href="#tab1">Türkçe</a></li>
						<li><a href="#tab2">İngilizce</a></li>
					</ul>
				</div>
				
				<div class="block_content">
				<?php echo $this->Form->create('Staticpage',Array('encoding' => Null,'inputDefaults' => Array('div' => false,'format' => array('before', 'label', 'error', 'between', 'input', 'after'))));?>
				
					<div class="tab_content" id="tab1">					
						<p><?php echo $this->Form->input('name_tr',Array('label'=>Array('text' =>'Sayfa Başlık / Türkçe :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
						<p><?php echo $this->Form->input('value_tr',Array('label'=>Array('text' =>'Sayfa Detayı / Türkçe :','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					</div>
					
					<div class="tab_content" id="tab2">					
						<p><?php echo $this->Form->input('name_en',Array('label'=>Array('text' =>'Sayfa Başlık / İngilizce :','class' => 'req'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
						<p><?php echo $this->Form->input('value_en',Array('label'=>Array('text' =>'Sayfa Detayı / İngilizce :','class' => 'req'),'class' => 'wysiwyg','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					</div>
					<p><?php echo $this->Form->input('youtube_video',Array('label'=>Array('text' =>'Youtube Video Id (Yoksa boş bırakınız):'),'class' => 'text medium big','autocomplete' => 'off','between' => '<br/>','error' => array('wrap' => 'span','class' => 'note error')));?></p>
					<p><?php echo $this->Form->submit('Kaydet',Array('class' => 'submit','div'=>false));?></p>
					<?php echo $this->Form->end();?>
    			</div>
				
				<div class="bendl"></div>
				<div class="bendr"></div>
					
			</div>