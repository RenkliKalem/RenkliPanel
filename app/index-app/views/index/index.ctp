			<div class="parallax sayfa">
            	<div class="container">
                	<div class="main-title">
                    	<h1><?=__('Teknik Bilgi');?></h1>
                        <div class="breadcrumb">
                            <a href="/" title="metantech"><?=__('Ana Sayfa');?></a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current"><?=__('Teknik Bilgi');?></span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="dt-sc-margin100"></div>
			
			<div class="container">
					<?php foreach ($indexlist as $index) { ?>
					<div class="dokuman">
						<h3><?=$index['Instrument']['name_tr']?></h3>
						<?php if(isset($index['Document'][0])){ ?>
							<ul>
							<?php foreach ($index['Document'] as $dosya) { ?>
								<li><a href="<?=$dosya['path'];?>" target="_blank"><?=$dosya['name_tr'];?></a></li>
							<?php } ?>
		                    </ul>
		                <?php } ?>
					</div>
					<?php } ?>
				
			</div>
			
			<div class="dt-sc-margin100"></div>










