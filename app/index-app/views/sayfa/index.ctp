			<section class="no-padding sh-services">
				<div class="sub-header">
					<span>Profesyonel Site ve Apartman Yönetimi</span>
					<h1><?=$selectedStaticpage[0]['Staticpage']['name_' . $lang['Short']]?></h1>
					<ol class="breadcrumb">
 						<li><a href="/" title="çorlu site ve apartman yönetimi"><i class="fa fa-home"></i>Ana Sayfa</a></li>
 						<li class="active"><?=$selectedStaticpage[0]['Staticpage']['name_' . $lang['Short']]?></li>
 					</ol>
				</div>
			</section>



			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="detayresim">
							<?php if(isset($staticpage[0]['Image'])){ ?>
								<?=$this->Html->image($staticpage[0]['Image']['Main']['sayfabuyuk'])?>
							<?php }else{ ?>
								<img src="http://placehold.it/900x500/ccc.jpg" class="img-responsive" alt="Image">
							<?php } ?>															
							</div>
							<div class="detay">
								<?=$selectedStaticpage[0]['Staticpage']['value_' . $lang['Short']]?>
							</div>														
						</div>
						<div class="col-md-3">

							<div class="sideabar">
								<div class="widget widget-sidebar widget-list-link">
									<h4 class="title-widget-sidebar">Hizmetlerimiz</h4>
									<ul class="wd-list-link">
										<?php foreach ($hizmetler as $saghizmet) { ?>
											<li><a  href="/hizmetlerimiz/<?=$saghizmet['Service']['link'];?>.html" title="<?=$saghizmet['Service']['name_tr'];?>"><?=$saghizmet['Service']['name_tr'];?></a></li>
										<?php } ?>
									</ul>
								</div>
								
							</div>							
							
						</div>
					</div>
				</div>
			</section>
