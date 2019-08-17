			<section class="no-padding sh-services">
				<div class="sub-header">
					<span>Bizlere Ulaşabilmeniz için</span>
					<h1>İletişim Bilgilerimiz</h1>
					<ol class="breadcrumb">
 						<li><a href="/" title="çorlu site ve apartman yönetimi"><i class="fa fa-home"></i>Ana Sayfa</a></li>
 						<li class="active">İletişim Bilgilerimiz</li>
 					</ol>
				</div>
			</section>
		
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 iletisimbilgileri">
				          	<h3>İletişim Bilgilerimiz</h3>  
							<?php foreach ($iletisimBilgileri as $iletisimBilgisi) { ?>
							    <h4><?=$iletisimBilgisi['Contactgroup']['name']?></h4>
							
							       <?php foreach ($iletisimBilgisi['Contact'] as $iletisimAyrintisi) { ?>
							        <p><strong><?=$iletisimAyrintisi['name']?></strong> : <?=$iletisimAyrintisi['value']?></p>
							       <?php } ?>
							
							<?php } ?>                            
                        </div>
                        
                        <div class="col-md-6 iletisimformu">
	                        <h3>İletişim Formu</h3>
							<form id="IletisimFormuIndexForm" method="post" action="/iletisim">
								<input type="hidden" name="_method" value="POST" />
								<input name="data[IletisimFormu][İsim]" type="text" maxlength="100" id="IletisimFormuİsim" placeholder="Adınız.." />
								<input name="data[IletisimFormu][Mail]" type="text" maxlength="255" id="IletisimFormuMail" placeholder="Mail Adresiniz" />
								<input name="data[IletisimFormu][Telefon]" type="text" maxlength="255" id="IletisimFormuMail" placeholder="Telefon Numaranız" />
								<textarea name="data[IletisimFormu][Ayrıntı]" cols="30" rows="6" id="IletisimFormuAyrıntı"placeholder="Mesajınız" ></textarea>
								<div class="submit"><input type="submit" value="Gönder" /></div>
							</form>                            
                        </div>

				</div>
			</div>
		</section>
