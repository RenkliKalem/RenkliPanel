			<section class="no-padding sh-services">
				<div class="sub-header">
					<h1>Hizmetlerimiz</h1>
					<ol class="breadcrumb">
 						<li><a href="#"><i class="fa fa-home"></i> Ana Sayfa</a></li>						
 						<li class="active">Hizmetlerimiz</li>
 					</ol>
				</div>
			</section>
			
			<section>
				<div class="container">
					<div class="row">
						<div class="news-list-warp">
							
							<?php foreach ($services as $servicemain) { ?>
							<div class="col-md-6">
								<div class="item-new-list grid-new"> <!-- add class no-position --> 

									<div class="feature-new-warp">
										<a href="#">
										<?php if(isset($servicemain['Image'])){ ?>
											<?=$this->Html->image($servicemain['Image']['Main']['hizmetkucuk'],Array('alt'=>$servicemain["Service"]['name'], 'class'=>'img-responsive'));?>
										<?php }else { ?>
											<img src="http://placehold.it/670x380/CACACA.jpg" class="img-responsive" alt="<?=$servicemain["Service"]['name'];?>">	
										<?php } ?>											
										</a>
									</div>
									<div class="box-new-info">
										<div class="new-info">
											<h3><a href="/hizmetlerimiz/<?=$servicemain["Service"]['link'];?>.html" title="<?=$servicemain["Service"]['name_tr'];?>"><?=$servicemain["Service"]['name_tr'];?></a></h4>											
										</div>
										<div class="tapo">
											<p><?php
												$detay = strip_tags($servicemain["Service"]["value_tr"]);
												$kelime = explode(" ",$detay);
												$say = count($kelime);
												$sinir = 40;
												for($i = 0; $i <= $sinir; $i++)
												{ echo $kelime[$i].' ' ; }
												?> [ ... ]
											</p>
										</div>
										<a href="/hizmetlerimiz/<?=$servicemain["Service"]['link'];?>.html" title="<?=$servicemain["Service"]['name_tr'];?>" class="ot-btn btn-sub-color">Detay</a>
									</div>
								</div>
							</div>
							<?php } ?>
							
							
						</div>
					</div>
				</div>
			</section>



       













