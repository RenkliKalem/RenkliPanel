<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" />
<head>

<title><?php echo $title_for_layout; ?></title>
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" href="/css/bootstrap.css">
		<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext" rel="stylesheet">  -->
		<link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/fonts/IcoMoon/icomoon.css">
		<link rel="stylesheet" href="/fonts/linearicon/style.css">
		<link type="text/css" rel="stylesheet" href="/css/jquery.mmenu.all.css" />
		<link rel="stylesheet" href="/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="/revolution/css/settings.css">
		<link rel="stylesheet" type="text/css" href="/revolution/css/layers.css">
		<link rel="stylesheet" type="text/css" href="/revolution/css/navigation.css">
		<link rel="stylesheet" href="/style.css">

	</head>
	<body>
		<!-- royal_loader -->
		<div id="page">
			<!-- Mobile Menu -->
			<nav id="menu">
				<ul>
					<li class="active"><a href="/">Ana Sayfa</a></li>
					<li><a href="">Kurumsal</a>
						<ul>
							<?php foreach ($sayfalar as $mobilsayfa) { ?>
							<li><a  href="/kurumsal/<?=$mobilsayfa['Staticpage']['link'];?>.html" title="<?=$mobilsayfa['Staticpage']['name_tr'];?>"><?=$mobilsayfa['Staticpage']['name_tr'];?></a></li>
							<?php } ?>
						</ul>
					</li>
					<li><a href="">Hizmetlerimiz</a>
						<ul >
							<?php foreach ($hizmetler as $mobilhizmet) { ?>
							<li class="250"><a  href="/hizmetlerimiz/<?=$mobilhizmet['Service']['link'];?>.html" title="<?=$mobilhizmet['Service']['name_tr'];?>"><?=$mobilhizmet['Service']['name_tr'];?></a></li>
							<?php } ?>
						</ul>
					</li>
					<li><a href="cases.html">Mevzuatlar</a></li>
					<li><a href="">Blogs</a></li>
					<li><a href="/iletisim/" title="iletişim bilgilerimiz">İletişim</a></li>
				</ul>
			</nav>
			<!-- /Mobil Menu -->
			<header class="header-h2">
				<div class="topbar tb-mavi tb-md">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="topbar-home2">
								<div class="tb-contact tb-iconbox">
									<ul>
										<li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Esentepe Mah. Sancak Cad. Real Tower İş Kulesi No:2 Kat:8 İç Kapı:49</a></li>
										<li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> info@vizyonyonetim.com</a></li>
										<li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i> +90 541 504 25 24</a></li>
									</ul>
								</div>
								<div class="tb-social-lan language">
									<ul>
										<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /topbar -->
				<div class="nav-warp nav-warp-h2">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="navi-warp-home-2">
								<div class="yenilogo">
									<h1>Çorlu site ve apartman yönetimi</h1>
								</div>
								
								<nav>
									<ul class="navi-level-1 active-subcolor">
										<li class="active"><a href="/" title="çorlu site ve apartman yönetimi">Ana Sayfa</a></li>
										<li><a href="/kurumsal/hakkimizda.html">Kurumsal</a>
											<ul class="navi-level-2">
												<?php foreach ($sayfalar as $menusayfa) { ?>
												<li class="250"><a  href="/kurumsal/<?=$menusayfa['Staticpage']['link'];?>.html" title="<?=$menusayfa['Staticpage']['name_tr'];?>"><?=$menusayfa['Staticpage']['name_tr'];?></a></li>
												<?php } ?>
											</ul>
										</li>
										<li><a href="/hizmetlerimiz/" title="site ve apartman yönetimi hizmetlerimiz">Hizmetlerimiz</a>
											<ul class="navi-level-2">
												<?php foreach ($hizmetler as $menuhizmet) { ?>
												<li class="250"><a  href="/hizmetlerimiz/<?=$menuhizmet['Service']['link'];?>.html" title="<?=$menuhizmet['Service']['name_tr'];?>"><?=$menuhizmet['Service']['name_tr'];?></a></li>
												<?php } ?>
											</ul>
										</li>
										<li><a href="/mevzuat/">Mevzuatlar</a></li>
										<li><a href="/">Blog</a></li>										
										<li><a href="/iletisim/">İletişim Bilgilerimiz</a></li>
									</ul>
								</nav>

								<a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
								<ul class="subnavi">
									<li>
										<a class="btn-search-navi" href="#/"><i class="fa fa-search" aria-hidden="true"></i></a>
										<div class="search-popup">
											<form class="form-search-navi">
												<div class="input-group">
													<input class="form-control" placeholder="Ara ..." type="text">
												</div>
												<!-- /input-group -->
											</form>
										</div>
									</li>
								</ul>
								
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>


			<?php echo $content_for_layout; ?>

			<!-- Footer -->
			<footer class="f-bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-footer widget-footer-text">
								<div class="title-block title-on-dark title-xs">
									<h4>Vizyon Yönetim</h4>
									<span class="bottom-title"></span>
								</div>
								<p><?php
												$dty = strip_tags($hak["Staticpage"]["value_tr"]);
												$klm = explode(" ",$dty);
												$sy = count($klm);
												$snr = 30;
												for($k = 0; $k <= $snr; $k++)
												{ echo $klm[$k].' ' ; }
												?> [ ... ]
								</p>
								<ul class="widget widget-footer widget-footer-social-1">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-footer widget-footer-icon-link">
								<div class="title-block title-on-dark title-xs">
									<h4>İletişim Bilgilerimiz</h4>
									<span class="bottom-title"></span>
								</div>

								<ul class="icon-link-list-icon">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i></li>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:"></a></li>
									<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:"></a></li>
									<li><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:"></a></li>

								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-footer widget-footer-list-link">
								<div class="title-block title-on-dark title-xs">
									<h4>Hizmetlerimiz</h4>
									<span class="bottom-title"></span>
								</div>
								<ul>
									<?php foreach ($hizmetler as $footerhizmet) { ?>
									<li><a href="/hizmetlerimiz/<?=$footerhizmet['Service']['link'];?>.html" title="<?=$footerhizmet['Service']['name_tr'];?>"><?=$footerhizmet['Service']['name_tr'];?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget widget-footer widget-footer-list-link">
								<div class="title-block title-on-dark title-xs">
									<h4>Sektörel Bilgiler</h4>
									<span class="bottom-title"></span>
								</div>
								<ul>
									<li><a href="#"></a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>	
			
			<section class="no-padding cr-h1">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="copyright-warp cr-1">
								<div class="copyright-list-link">
									<ul>
										<li><a href="#">Ana Sayfa</a></li>
										<li><a href="#">Kurumsal</a></li>
										<li><a href="#">Hizmetlerimiz</a></li>
										<li><a href="#">Yönetmelikler</a></li>
										<li><a href="#">Sektörel Bilgiler</a></li>
										<li><a href="#">İletişim</a></li>
									</ul>
								</div>
								<div class="copyright-text">
									<p><a href="https://www.renklikalem.com" target="_blank" title="çorlu web tasarım">RenkliKalem.com</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- /copyright -->

		</div>
		<!-- /page -->
		<a id="to-the-top" class="fixbtt bg-hover-theme"><i class="fa fa-chevron-up"></i></a> 
		<!-- Back To Top -->
		<!-- Switcher -->
		<!-- End Switcher -->
		<!-- SCRIPT -->
		<script src="/js/vendor/jquery.min.js"></script>
		<script src="/js/vendor/bootstrap.js"></script>
		<script type="text/javascript" src="/js/plugins/jquery.mmenu.all.min.js"></script>
		<script type="text/javascript" src="/js/plugins/mobilemenu.js"></script>
		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="/js/plugins/slider-home-2.js"></script>
		<!-- Initializing Owl Carousel
			================================================== -->
		<script src="/js/plugins/owl.carousel.js"></script>
		<script src="/js/plugins/owl.js"></script>
		<!-- PreLoad
			================================================== --> 

		<!-- Parallax -->
		<script src="/js/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Initializing Counter Up
			================================================== -->
		<script src="/js/plugins/jquery.counterup.min.js"></script>
		<script src="/js/plugins/counterup.js"></script>
		<!-- Global Js
			================================================== --> 
		<script src="/js/plugins/template.js"></script>
		<!-- Demo Switcher
			================================================== -->
		<!-- <script src="switcher/demo.js"></script> -->
	</body>
</html>

