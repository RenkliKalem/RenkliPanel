<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Renkli Panel V3.1</title>
	<?=$this->Html->css(Array('style','jquery.wysiwyg.css','facebox.css','visualize.css','date_input.css'));?>
    <?=$this->Html->css('jquery-ui.css');?>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=7" /><![endif]-->
	<!--[if lt IE 8]><?=$this->Html->css('ie');?><![endif]-->
	<!--[if IE]><?=$this->Html->script('excanvas');?><![endif]-->
	<?=$this->Html->script(Array('jquery','jquery.img.preload','jquery.filestyle.mini','jquery.wysiwyg','jquery.date_input.pack','jquery.visualize','jquery.visualize.tooltip','jquery.tablesorter.min','jquery.select_skin','ajaxupload','jquery.pngfix','custom','facebox'));?>
	</head>
<body>

	<div id="hld">
	
		<div class="wrapper">		
	
			
			<div id="header">
				<div class="hdrl"></div>

				<div class="hdrr"></div>
				
				<ul id="nav">
				
                <?php foreach ($menu as $page) { ?>
                	<?php if(isset($page['Page']['name'])){ ?>
                	<li style='cursor:pointer;'><?=$page['Page']['name']?>
                    	<ul>
                        	<?php foreach ($page['Page']['PageLink'] as $pageLink) { ?>
                            	<li><?=$this->Html->link($pageLink['name'],$pageLink['link'])?></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
				<?php } ?>
                <?php if ($this->Session->read('User.admin') == 1) {?>
					<li style='cursor:pointer;'>Ayarlar
                    	<ul>
							<li><?=$this->Html->link('Panel Sayfa Ayarları',Array('controller' => 'menu','action' => 'index'))?></li>
							<li><?=$this->Html->link('Modül Ayarları',Array('controller' => 'modules','action' => 'index'))?></li>
                            <li><?=$this->Html->link('Genel Ayarlar',Array('controller' => 'settings','action' => 'index'))?></li>
                            <li><?=$this->Html->link('Resim Tipleri',Array('controller' => 'image_types','action' => 'index'))?></li>
                            <li><?=$this->Html->link('Resim Boyutları',Array('controller' => 'image_sizes','action' => 'index'))?></li>
                            <li><?=$this->Html->link('Kullanıcı Türleri',Array('controller' => 'user_types','action' => 'index'))?></li>
                            <li><?=$this->Html->link('Yeni Kullanıcı Türü',Array('controller' => 'user_types','action' => 'add'))?></li>
                            <li><?=$this->Html->link('Sayfa İzin Ayarları',Array('controller' => 'user_permits','action' => 'index'))?></li>
                            <li><?=$this->Html->link('Resim Dosya Bakımı',Array('controller' => 'modules','action' => 'file_maintenance'))?></li>
						</ul>
                    </li>
                   <?php } ?>
                   <li><a href="http://www.google.com/analytics" target="_blank">Sayaç</a></li>
				</ul>
			
				<p class="user">Hoşgeldiniz, <?=$this->Session->read('User.name')?> | <?=$this->Html->link('Çıkış',Array('controller' => 'users','action'=>'logout','title' => 'Çıkış'))?></p>

			</div>
			<?php echo $content_for_layout; ?>
			<div id="footer">

				<p class="right">coded by <a href="http://www.renklikalem.com" title="Renkli Kalem">RenkliKalem.com</a> v3.1</p>
				
			</div>
		
		
		</div>						
		
	</div>		
	
</body>
</html>