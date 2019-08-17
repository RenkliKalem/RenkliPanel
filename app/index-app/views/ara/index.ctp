			<div class="parallax sayfa">
            	<div class="container">
                	<div class="main-title">
                    	<h1>Arama Sonuçları</h1>
                        <div class="breadcrumb">
                            <a href="/" title="metantech"><?=__('Ana Sayfa');?></a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current">Arama Sonuçları</span>
                        </div>
                    </div>
                </div>
            </div>

			<div class="dt-sc-margin100"></div>
			
			<div class="container">
<ul class="arama">
<?php foreach($sonuc as $sonuc) { ?>
			<li><a href="/products/<?=$sonuc['Productgroup']['id']?>/<?=$this->Genel->seo_tr($sonuc['Productgroup']['name_' . $lang['Short']])?>.html" title="<?=$sonuc['Productgroup']['name_' . $lang['Short']]?>"><?=$sonuc['Productgroup']['name_' . $lang['Short']]?></a></li>
	<?php } ?>
</ul>                    
				
			</div>
			
			<div class="dt-sc-margin100"></div>





