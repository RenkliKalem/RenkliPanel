<div class="detayTop">
	<h3>Uygulamalar</h3>
</div>
<div class="content">
<?php foreach ($images as $image) { ?>
<div class="uygulamalar">
    	<?php if (isset($image['Image'])) { ?>
			<?php $a=1; foreach ($image['Image']['Named'] as $key=>$image2) { ?>
				<div class="imaj <?php if($a%5){ ?>right20<?php } ?>">
        			<a class="renkliBox" href="<?=$image2['buyuk']?>" title="<?=$key?>"><?=$this->Html->image($image2['ufak'],Array('alt' => 'led aydınlatma'))?><br><?=$key?></a>
        		</div>
        	<?php $a++; ?>
        	<?php } ?>
      	  
        <?php } ?>  
</div>
<? } ?>


</div>


