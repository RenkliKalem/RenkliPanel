			<div class="parallax sayfa">
            	<div class="container">
                	<div class="main-title">
                    	<h1><?=$reference['Reference']['name_' . $lang['Short']]?></h1>
                        <div class="breadcrumb">
                            <a href="/" title="metantech"><?=__('Ana Sayfa');?></a>
                            <span class="fa fa-angle-right"></span>
                            <a href="/reference.html" title="<?=__('Referanslarımız');?>"><?=__('Referanslarımız');?></a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current"><?=$reference['Reference']['name_' . $lang['Short']]?></span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="dt-sc-margin100"></div>
				<div class="container">
					<div class="ref_sol">
					<?=$this->Html->image($reference['Image']['Main']['referans'])?>	
					</div>
					<div class="ref_sag">
						<p><?=$reference['Reference']['value_' . $lang['Short']]?></p>
					</div>
				</div>
			
			<div class="dt-sc-margin100"></div>			

