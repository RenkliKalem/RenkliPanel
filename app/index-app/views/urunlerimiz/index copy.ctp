				<div id="main">
					<!-- content-panel -->
					<div class="content-panel">
						<div class="page-title holder">
							<h2><?=__('Ürünlerimiz');?></h2>
							<!-- breadcrumbs2 -->
							<ul class="breadcrumbs">
								<li><a href="/" title="berksa anasayfa"><?=__('Anasayfa');?></a></li>
								<li>/</li>
								<li><a href="/urunlerimiz.html" title="<?=__('ürünlerimiz');?>"><?=__('Ürünlerimiz');?></a></li>							
							</ul>
						</div>
					</div>
					<div class="container holder">
						<!-- content -->
						<div id="content">
							<div class="c1">
<div class="urunler">
<?php
			$a=1;
          foreach ($urunGruplari as $urunGrubu) {
?>
<div class="urun" <? if($a%3){?>style="margin-right:20px;" <? }?>>
        <?php if (count($urunGrubu['Product']) == 0) { ?>
                <a href='<?=$this->webroot?>urunlerimiz/<?=$urunGrubu['Productgroup']['id']?>/<?=$this->Genel->seo_tr($urunGrubu['Productgroup']['name_' . $lang['Short']])?>.html' title='<?=$urunGrubu['Productgroup']['name_' . $lang['Short']]?>'>
                    <?php if (isset($urunGrubu['Image'])) { ?>
                        <?=$this->Html->image($urunGrubu['Image']['Main']['kategori'])?>
                    <?php }else{?>
                    	<?=$this->Html->image('resimyok.png')?>
                    <?php } ?>
                    <span><?=$urunGrubu['Productgroup']['name_' . $lang['Short']]?></span>
                </a>
        <?php } else { ?>
                <a href='<?=$this->webroot?>urunler/<?=$urunGrubu['Productgroup']['id']?>/<?=$this->Genel->seo_tr($urunGrubu['Productgroup']['name_' . $lang['Short']])?>.html' title='<?=$urunGrubu['Productgroup']['name_' . $lang['Short']]?>'>
                    <?php if (isset($urunGrubu['Image'])) { ?>
                        <?=$this->Html->image($urunGrubu['Image']['Main']['kategori'])?>
                    <?php }else{?>
                    	<?=$this->Html->image('resimyok.png')?>
                    <? } ?>   
                    <?=$urunGrubu['Productgroup']['name_' . $lang['Short']]?>
                </a>
        <?php } ?>
</div>
<?php
$a++;
}
?>
</div>
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



