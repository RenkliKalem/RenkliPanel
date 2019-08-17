<?php if (isset($sector)) {?>
			<div class="parallax sayfa">
            	<div class="container">
                	<div class="main-title">
                    	<h1><?=$sector["Sector"]['name_' . $lang['Short']]?></h1>
                        <div class="breadcrumb">
                            <a href="/" title="metantech"><?=__('Sektör');?></a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current"><?=$sector["Sector"]['name_' . $lang['Short']]?></span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="dt-sc-margin100"></div>
			
			<div class="container">

							<?php if(isset($sector['Image'])){ ?>

								<?=@$this->Html->image($sector["Image"]["Main"]["hizmetbuyuk"],Array('alt'=>$sector["Sector"]["name"]))?>

							<?php } ?>
							<?=$sector["Sector"]['value_' . $lang['Short']]?>			
				
			</div>
			
			<div class="dt-sc-margin100"></div>
			
			



<?php } else {?>


		<div id="content">
			 		<div id="breadcrumb"><!-- breadcrumb starts-->
				<div class="container">
					<div class="one-half">
						<h1 class="has4"><?=__('Faaliyet Alanlarımız');?></h1>
					</div>
					<div class="one-half">
						<nav id="breadcrumbs"><!--breadcrumb nav starts-->
						<ul>
							<li>Buradasınız : </li>
							<li><a href="/" title="<?=__('Ana Sayfa');?>"><?=__('Ana Sayfa');?></a></li>
							<li><?=__('Faaliyet Alanlarımız');?></li>
						</ul>
						</nav><!--breadcrumb nav ends -->
					</div>
				</div>
			</div><!--breadcrumbs ends -->
			<div class="container">

				 
				<ul id="portfolio-container" class="four-columns">
<?php foreach ($sectors as $sector) { ?>				
					<li class="isotope-item">
						<div class="item-wrapp">
								<div class="portfolio-item">
								
									<a href="<?=$this->webroot?>sectors/<?=$sector["Sector"]["id"]?>/<?=$this->Genel->seo_tr($sector["Sector"]['name_' . $lang['Short']])?>.html" title="<?=$sector["Sector"]["name"]?>" class="item-permalink"><i class="icon-link"></i></a>
									<?php if(isset($sector["Image"])){ ?>
										<?=@$this->Html->image($sector["Image"]["Main"]["hizmetkucuk"],Array('alt'=>$sector["Sector"]['name_' . $lang['Short']]))?>
									<?php }else{ ?>
										<img src="img/portfolio/portfolio-item-1.jpg" alt="aak orman ürünleri"/>
									<?php } ?>
								</div>
								<div class="portfolio-item-title">
									<a href="<?=$this->webroot?>faaliyetalanlarimiz/<?=$sector["Sector"]["id"]?>/<?=$this->Genel->seo_tr($sector["Sector"]['name_' . $lang['Short']])?>.html" title="<?=$sector["Sector"]['name_' . $lang['Short']]?>"><?=$sector["Sector"]['name_' . $lang['Short']]?></a>
								</div>
							</div>
					</li>
<?php } ?> 
				</ul>
				 


			</div>
			</div>



<?php } ?>












