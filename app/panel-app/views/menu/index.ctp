<script type="text/javascript">var wbtrt = '<?=$this->webroot?>';</script>
<?=$this->Html->script(Array('pageadd','ui/jquery.ui.core.min','ui/jquery.ui.widget.min','ui/jquery.ui.mouse.min','ui/jquery.ui.sortable.min','ui/jquery.ui.dialog.min','ui/jquery.ui.position.min'));?>
<div class="block small left">
			
				<div class="block_head">
					<div class="bheadl"></div>

					<div class="bheadr"></div>
					
					<h2>SAYFA EKLE</h2>	
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
                <h1>Menü Ekleme</h1>
					<?=$this->Form->create('Page',Array('encoding' => Null,'onSubmit' => 'return false;','id'=>'yenisayfa'))?>
                    <p><?=$this->Form->input('name',Array('label' => 'Sayfa Adı : ','div' => false,'between' => '<br/>','class' => 'text'))?></p>
                    <p><?=$this->Form->input('controller',Array('label' => 'Kontrolcüsü : ','div' => false,'between' => '<br/>','class' => 'text'))?></p>
                    <p><?=$this->Form->submit('Ekle &raquo;',Array('div' => false,'onclick' => 'ekle(\'' . $this->webroot . '\');','class' => 'submit','escape' => false,'id' => 'submitButton'))?><span id="submitGif" style="display:none;"><?=$this->Html->image('ajax-loader.gif',array('valign' =>'middle'))?>  Ekleniyor</span></p>
                    <?=$this->Form->end();?>
                    <span id='altsayfa' <?php if(empty($pages)) {echo "style='display:none;'";}?>>
                     <h1>Alt Sayfa Ekleme</h1>
                    <?=$this->Form->create('PageLink',Array('encoding' => Null,'onSubmit' => 'return false;','id'=>'yenisayfalink'))?>
                    <p><?=$this->Form->input('page_id',Array('label' => 'Sayfa : ','div' => false,'between' => '<br/>','class' => 'styled','id' => 'pages'))?></p>
                    <p><?=$this->Form->input('name',Array('label' => 'Alt Sayfa Adı : ','div' => false,'between' => '<br/>','class' => 'text'))?></p>
                    <p><?=$this->Form->input('link',Array('label' => 'Link : ','div' => false,'between' => '<br/>','class' => 'text'))?></p>
                    <p><?=$this->Form->submit('Ekle &raquo;',Array('div' => false,'onclick' => 'ekleSub(\'' . $this->webroot . '\');','class' => 'submit','escape' => false,'id' => 'submitButtonSub'))?><span id="submitGifSub" style="display:none;"><?=$this->Html->image('ajax-loader.gif',array('valign' =>'middle'))?>  Ekleniyor</span></p>
                    <?=$this->Form->end();?>
                    </span>
					
				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>
				<div class="bendr"></div>
				
			</div>		<!-- .block.small.left ends -->
	
			<div class="block small right">
			
				<div class="block_head">
					<div class="bheadl"></div>

					<div class="bheadr"></div>
					
					<h2>SAYFALAR</h2>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
                <?php if (empty($pages)) { ?><div id='msg' class="message info"><p>Henüz eklenmiş bir sayfa yok</p></div><?php } ?>
				<ul id='sayfalar' style="list-style-type:none;">
					<?php foreach ($pagesVal as $page) { ?>	
                            <li style="cursor:pointer;list-style-type:none;" id="pg_<?=$page['Page']['id']?>"><?=$page['Page']['name'] . ' - ' . $page['Page']['controller']?>
                                    <ul class='subpages' id="pgsub-<?=$page['Page']['id']?>">
                                        <?php foreach ($page['PageLink'] as $pageLink) {?>
                                            <li onmousedown="subOrder('kapa');" onmouseup="subOrder('ac');" id="sub_<?=$pageLink['id']?>" style='cursor:pointer;'><?=$pageLink['name'] . ' - ' . $pageLink['link']?></li>
                                        <?php } ?>
                                    </ul>
                            </li>
                    <?php } ?>
				</ul>
				</div>		<!-- .block_content ends -->
				
				<div class="bendl"></div>

				<div class="bendr"></div>
				
			</div>		<!-- .block.small.right ends -->                     
<div id="dialog-message" title="Kaydediliyor">
	<p>
		Kaydediliyor Lütfen Bekleyin
	</p>
</div>
            <div class="clear"></div>
            <div id='sonuc'></div>
            