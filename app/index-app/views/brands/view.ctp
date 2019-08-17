			<div class="parallax sayfa">
            	<div class="container">
                	<div class="main-title">
                    	<h1><?=$marka['Brand']['name_tr']?></h1>
                        <div class="breadcrumb">
	                        <a href="/" title="metantech"><?=__('Ana Sayfa');?></a>
	                        <span class="fa fa-angle-right"></span>
                            <a href="/brands.html" title="<?=__('Markalar');?>"><?=__('Markalar');?></a>
                            <span class="fa fa-angle-right"></span>
                            <span><?=$marka['Brand']['name_tr']?></span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="dt-sc-margin100"></div>
			
			<div class="container">
				<section id="primary" class="with-right-sidebar page-with-sidebar"> 
                    <article class="type3">
<?php $i=1; ?>
<?php foreach ($urun as $urun) { ?>

						<div class="portfolio-item <?php if($i%3){?>right5<?php } ?>">
							<a href="<?=$this->webroot?>product/<?=$urun['Product']['id']?>/<?=$this->Genel->seo_tr($urun['Product']['name_' . $lang['Short']])?>.html" title="<?=$urun['Product']['name_' . $lang['Short']]?>">
									<?php if (isset($urun['Image'])) { ?>
										<?=$this->Html->image($urun['Image']['Main']['urunkucuk'],Array('alt'=>$urun['Product']['name_' . $lang['Short']]))?>
									<?php }else{ ?>
										<?=$this->Html->image('/img/resimyok.png',Array('alt'=>'metantech'));?>
									<?php } ?>
							</a>
							<h3><a href="<?=$this->webroot?>urun/<?=$urun['Product']['id']?>/<?=$this->Genel->seo_tr($urun['Product']['name_' . $lang['Short']])?>.html" title="<?=$this->Genel->seo_tr($urun['Product']['name_' . $lang['Short']])?>"><?=$urun['Product']['name_' . $lang['Short']]?></a></h3>
						</div>
<?php if($i%3){}else{?><div class="clear"></div><?php } ?>
<?php $i++; ?>
<?php } ?>	

                    
                    </article>
                    
				</section>
				
				
				<section id="secondary-right" class="secondary-sidebar secondary-has-right-sidebar">
                    
                    <aside class="widget widget_categories">
                        <h4 class="widgettitle">Metantech</h4>
                        <ul>
						<?php foreach ($sayfalar as $sayfalar) { ?>
							<li><a href="/pages/<?=$this->Genel->seo_tr($sayfalar["Staticpage"]['name_tr'])?>.html"><?=$sayfalar["Staticpage"]['name_' . $lang['Short']]?></a></li>
						<?php } ?>
                        </ul>
                    </aside>
                    
                    <aside class="widget widget_categories">
                        <h4 class="widgettitle">Çözüm Sunduğumuz Sektörler</h4>
                        <ul>
                            <li> <a href="#">List</a></li>
                        </ul>
                    </aside>
                    
                    
				</section>
				
			</div>
			
			<div class="dt-sc-margin100"></div>








