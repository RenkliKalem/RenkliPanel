			<div class="theme-page padding-bottom-66">
				<div class="row gray full-width page-header vertical-align-table">
					<div class="row full-width padding-top-bottom-50 vertical-align-cell">
						<div class="row">
							<div>
								<h1><?=$urun['Product']['name_tr']?></h1>
							</div>
							<div>
								<div class="bread-crumb-container">
									<ul class="bread-crumb">
										<li><a title="Led Panel Aydınlatma" href="/">Emt Led</a></li>
										<li class="separator">&#47;</li>
										<li><a title="ürünlerimiz" href="/urunlerimiz/">Ürünlerimiz</a></li>
										<li class="separator">&#47;</li>
										<li><a title="<?=$urun['Productgroup']['name_tr']?>" href="/urunler/<?=$urun['Productgroup']['link']?>.html"><?=$urun['Productgroup']['name_tr']?></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix">
					<div class="row margin-top-70">
						<div class="column column-1-2">
							<a href="/<?=$urun['Image']['Main']['urunbuyuk']?>" class="prettyPhoto re-preload">
								<?=$this->Html->image($urun['Image']['Main']['urunbuyuk'])?>
							</a>
							<div class="row margin-top-30">
								<div class="column column-1-2">
									<a href="images/samples/870x580/image_08.jpg" class="prettyPhoto re-preload" title="Engine Diagnostics">
										<img src='images/samples/570x380/image_08.jpg' alt='img'>
									</a>
								</div>
								<div class="column column-1-2">
									<a href="images/samples/870x580/image_09.jpg" class="prettyPhoto re-preload" title="Engine Diagnostics">
										<img src='images/samples/570x380/image_09.jpg' alt='img'>
									</a>
								</div>
							</div>
						</div>
						<div class="column column-1-2">
							<h3 class="box-header"><?=$urun['Product']['name_tr']?></h3>
							<p><?=$urun['Product']['value_tr']?></p>
							
							
						</div>
						
					</div>
				</div>
			</div>
			
