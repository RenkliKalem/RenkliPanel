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
<?php foreach ($grup as $grp) { ?>							
							<li>
								<a href="/urunler/<?=$grp['Productgroup']['link']?>.html" title="<?=$$grp['Productgroup']['name_tr']?>">
									<?php if(isset($grp["Image"])){ ?>
										<?=$this->Html->image($grp['Image']['Main']['kategorikucuk'])?>
									<?php }else{ ?>
										<?=$this->Html->image('resimyok.png')?>	
									<?php } ?>
								</a>
								<h4 class="box-header"><a href="/urunler/<?=$grp['Productgroup']['link']?>.html" title="<?=$grp['Productgroup']['name_tr']?>"><?=$grp['Productgroup']['name_tr']?><span class="template-arrow-menu"></span></a></h4>
							</li>
<?php } ?>
						</ul>
					</div>
				</div>
			</div>






