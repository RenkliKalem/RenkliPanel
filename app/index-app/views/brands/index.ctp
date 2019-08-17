			<div class="parallax sayfa">
            	<div class="container">
                	<div class="main-title">
                    	<h1><?=__('Markalar');?></h1>
                        <div class="breadcrumb">
	                        <a href="/" title="metantech"><?=__('Ana Sayfa');?></a>
                            <span class="fa fa-angle-right"></span>
                            <span><?=__('Markalar');?></span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="dt-sc-margin100"></div>
			
			<div class="container">

<?php $c=1; ?>
<?php foreach ($brands as $brand) { ?>
	<div class="brand <?php if($c%4){?>right4<? } ?>">
		<a href="/brands/<?=$brand['Brand']['id']?>/<?=$this->Genel->seo_tr($brand['Brand']['name_tr'])?>.html" title="<?=$brand['Brand']['name_tr']?>">
			<?=$this->Html->image($brand['Image']['Main']['marka'],Array('alt'=>$brand['Brand']['name_tr']));?>
		</a>
	</div>
<?php $c++; ?>
<?php } ?>
	

				
			</div>
			
			<div class="dt-sc-margin100"></div>	