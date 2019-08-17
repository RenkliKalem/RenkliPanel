<div class="detayTop">
	<h3><?=$post['Post']['name_tr']?></h3>
</div>
<div class="content">

            <div class="baslik"><h3></h3></div>
            <div class="tarih"><?=$this->Genel->tarih('gun ay yil',$post['Post']['created'])?></div>
            <div class="spot"><?=$post['Post']['label_tr']?></div>
			<div class="detay"><?=$post['Post']['value_tr']?></div>
			<div class="okunma"><?=$post['Post']['seencount']?> Defa Okunmuştur.</div>

</div>




