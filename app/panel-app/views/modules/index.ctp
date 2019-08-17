<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>MODÜL AYARLARI</h2>
					
					<ul class="tabs">
<?php $a=1; ?>
<?php foreach ($modules as $controllerName => $moduleName) { ?>
						<li><a href="#tab<?=$a?>"><?=$controllerName?></a></li>
<?php $a++; ?>
<?php } ?>
					</ul>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
<?php $b=1; ?>					
<?php foreach ($modules as $controllerName => $moduleName) { ?>					
					<div class="tab_content" id="tab<?=$b?>">
					
						<div class="block_head">
							<div class="bheadl"></div>
							<div class="bheadr"></div>
							<h2>Modül : <?=$controllerName?></h2>
						</div>						
						
	<?=$this->Form->create($moduleName,Array('encoding' => Null,'url' => Array('controller' => 'modules','action' => 'index')));?>
    	<?php foreach ($field_names[$controllerName] as $no => $columnName) { ?>
        <p>
        	<?=$this->Form->input($columnName,Array('class' => 'text','label' => __($columnName,true) . ' :','between' => '<br>','div' => False));?>
            </p>
		<?php } ?> 
        <p>
	    <?=$this->Form->submit('Kaydet',Array('class' => 'submit'));?>
        </p>
    <?=$this->Form->end();?>						
					</div>
<?php $b++; ?>
<?php } ?>					
				</div>				
</div>
