<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>Renkli Panel V3.1</title>
	<?=$this->Html->css(Array('style','jquery.wysiwyg.css','facebox.css','visualize.css','date_input.css'));?>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=7" /><![endif]-->
	<!--[if lt IE 8]><?=$this->Html->css('ie');?><![endif]-->
	<!--[if IE]><?=$this->Html->script('excanvas');?><![endif]-->
	<?=$this->Html->script(Array('jquery','jquery.img.preload','jquery.filestyle.mini','jquery.wysiwyg','jquery.date_input.pack','jquery.visualize','jquery.visualize.tooltip','jquery.tablesorter.min','jquery.select_skin','ajaxupload','jquery.pngfix'));?>
    <script type="text/javascript" src="<?php echo $this->Html->url('/js/custom.js.php?webroot=' . $this->webroot, true); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->Html->url('/js/facebox.js.php?webroot=' . $this->webroot, true); ?>"></script>
</head>
<body>
<div id="hld">
	
		<div class="wrapper">		<!-- wrapper begins -->
	
	
			<?php echo $content_for_layout; ?>
		
		
		</div>						<!-- wrapper ends -->
		
	</div>		<!-- #hld ends -->
	
</body>
</html>