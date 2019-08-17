			<div class="theme-page padding-bottom-70">
				<div class="row gray full-width page-header vertical-align-table">
					<div class="row full-width padding-top-bottom-50 vertical-align-cell">
						<div class="row">
							<div class="page-header-left">
								<h1><?=$path[0]['Productgroup']['name_tr']?></h1>
							</div>
							<div class="page-header-right">
								<div class="bread-crumb-container">
									<ul class="bread-crumb">
										<li><a title="Led Panel Aydınlatma" href="/">Emt Led</a>
										</li>
										<li class="separator">
											&#47;
										</li>
										<li><a title="ürünlerimiz" href="/urunlerimiz/">Ürünlerimiz</a></li>
										<li class="separator">
											&#47;
										</li>
										<li><a title="<?=$path[0]['Productgroup']['name_tr']?>" href="/urunlerimiz/<?=$path[0]['Productgroup']['link']?>.html"><?=$path[0]['Productgroup']['name_tr']?></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix">
					<div class="row">
						<ul class="services-list clearfix padding-top-70">
<?php foreach ($urunler as $urun) { ?>							
							<li>
								<a href="<?=$this->webroot?>urun/<?=$this->Genel->seo_tr($urun['Product']['name_' . $lang['Short']])?>.html" title="<?=$urun['Product']['name_' . $lang['Short']]?>">
									<?php if (isset($urun['Image'])) { ?>
										<?=$this->Html->image($urun['Image']['Main']['urunkucuk'],Array('alt'=>$urun['Product']['name_' . $lang['Short']]))?>
									<?php }else{ ?>
										<?=$this->Html->image('resimyok.png',Array('alt'=>''));?>
									<?php } ?>
								</a>
								<h4 class="box-header"><a href="<?=$this->webroot?>urun/<?=$this->Genel->seo_tr($urun['Product']['name_' . $lang['Short']])?>.html" title="<?=$urun['Product']['name_' . $lang['Short']]?>"><?=$urun['Product']['name_' . $lang['Short']]?><span class="template-arrow-menu"></span></a></h4>
							</li>
<?php } ?>
						</ul>
					</div>
				</div>
			</div>

