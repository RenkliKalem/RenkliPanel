				<div id="main">
					<!-- content-panel -->
					<div class="content-panel">
						<div class="page-title holder">
							<h2><?=$selectedStaticpage[0]['Staticpage']['name_' . $lang['Short']]?></h2>
							<!-- breadcrumbs2 -->
							<ul class="breadcrumbs">
								<li><a href="/" title="<?=__('Anasayfa');?>"><?=__('Anasayfa');?></a></li>
								<li>/</li>
								<li><?=__('Kurumsal');?></li>
								<li>/</li>
								<li><a href="/kurumsal/hakkimizda.html" title="<?=__('Hakkımızda');?>"><?=__('Hakkımızda');?></a></li>							
							</ul>
						</div>
					</div>
					<div class="container holder">
						<!-- content -->
						<div id="content">
							<div class="c1">
								
<?=$selectedStaticpage[0]['Staticpage']['value_' . $lang['Short']]?>								
								
							</div>
						</div>
						<!-- sidebar -->
						<aside id="sidebar">
														
							<!-- widget -->
							<div class="widget">
								<h3><?=__('Kurumsal');?></h3>
								<ul class="links-list">
									<li><a href="/kurumsal/hakkimizda.html" title="<?=__('hakkımızda');?>"><?=__('Hakkımızda');?></a></li>
									<li><a href="/urunlerimiz.html" title="<?=__('ürünlerimiz');?>"><?=__('Ürünlerimiz');?></a></li>
									<li><a href="/hizmetlerimiz.html" title="<?=__('hizmetlerimiz');?>"><?=__('Hizmetlerimiz');?></a></li>
									<li><a href="/iletisim.html" title="<?=__('iletişim');?>"><?=__('İletişim');?></a></li>
								</ul>
								
								<h3><?=__('Hizmetlerimiz');?></h3>
								<ul class="links-list">
									<?php foreach ($mainhizmetler as $solhizmetler) { ?>									
									<li><a href="<?=$this->webroot?>hizmetlerimiz/<?=$solhizmetler["Service"]["id"]?>/<?=$this->Genel->seo_tr($solhizmetler['Service']['name_' . $lang['Short']])?>.html" title="<?=$solhizmetler['Service']['name_' . $lang['Short']]?>"><?=$solhizmetler['Service']['name_' . $lang['Short']]?></a></li>
									<?php } ?>
								</ul>
							</div>
						</aside>
					</div>
					
				</div>
