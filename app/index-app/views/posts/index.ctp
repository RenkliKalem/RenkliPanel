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
				<section id="primary" class="with-right-sidebar page-with-sidebar"> 
                    <article class="type3">

<ul>
<?php foreach ($posts as $post) {?>
	<li>
		<h3><a href="/led/<?=$post['Post']['id']?>/<?=$this->Genel->seo_tr($post['Post']['name_tr'])?>.html"><?=$post['Post']['name_tr']?></a></h3>
        <p><?=$this->Genel->tarih("gun.aysayi.yil",$post['Post']['created'])?> :: <?=$post['User']['name']?> <?=$post['User']['surname']?></p>
        <span><?=$post['Post']['label_tr']?></span>
	</li>
<?php } ?>
</ul>
<div class="paginator">
         	<?=$paginator->prev('«', null, null, array('class' => 'disabled'))?>
			<?=$paginator->numbers(); ?>
            <?=$paginator->next('»', null, null, array('class' => 'disabled'))?>
</div>

	                    
                    </article>
                    
				</section>
				
				
				<section id="secondary-right" class="secondary-sidebar secondary-has-right-sidebar">
                    
                    <aside class="widget widget_categories">
                        <h4 class="widgettitle">Metantech</h4>
                        <ul>
                            <li> <a href="#">Hakkımızda</a></li>
                        </ul>
                    </aside>
                    
                    <aside class="widget widget_categories">
                        <h4 class="widgettitle">Çözüm Sunduğumuz Sektörler</h4>
                        <ul>
                            <li> <a href="#">List</a></li>
                        </ul>
                    </aside>
                    
                    
				</section>
				
			</div>
			
			<div class="dt-sc-margin100"></div>





