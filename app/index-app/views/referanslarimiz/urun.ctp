			<div class="parallax sayfa">
            	<div class="container">
                	<div class="main-title">
                    	<h1><?=__('Referanslarımız');?></h1>
                        <div class="breadcrumb">
                            <a href="/" title="metantech"><?=__('Ana Sayfa');?></a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current"><?=__('Referanslarımız');?></span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="dt-sc-margin100"></div>
			
			<div class="container">
<?php foreach($reference as $referans){?>
			<div class="references">
				<a href="/references/<?=$referans['Reference']['id']?>/<?=$this->Genel->seo_tr($referans['Reference']['name_' . $lang['Short']])?>.html" title="<?=$referans['Reference']['name_' . $lang['Short']]?>">
					<?=$this->Html->image($referans['Image']['Main']['referans'])?>
				</a>
				<h3><?=$referans['Reference']['name_' . $lang['Short']]?></h3>
			</div>
<?php } ?>
	<div class="clear"></div>

				
			</div>
			
			<div class="dt-sc-margin100"></div>			

