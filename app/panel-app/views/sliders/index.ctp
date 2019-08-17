			<div class="block"> 
			
				<div class="block_head"> 
					<div class="bheadl"></div> 
					<div class="bheadr"></div> 
					
					<h2>UYGULAMALAR</h2>
					<ul>
						<li><?=$this->Html->link('SLIDER EKLE',Array('controller' => 'sliders','action' => 'add'));?></li>
					
					</ul>

				</div>		<!-- .block_head ends --> 
				
				<?php $confirm = Array(1 => 'Açık', 0 => 'Kapalı');$link = Array(1 => 0, 0 => 1);?>
				
				<div class="block_content"> 
                <?php echo $this->Session->flash(); ?>
				

				<table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                            <th><?php echo $this->Paginator->sort('Onay','has_confirm');?></th>
                            <th><?php echo $this->Paginator->sort('Eklendiği Tarih','created');?></th>
                            <th><?php echo $this->Paginator->sort('Başlık','name');?></th>
                            <th>&nbsp;</th>
                    </tr>
                    <?php foreach ($sliders as $slider): ?>
                    <tr>
                    	<td><?php echo @$this->Html->link(__($confirm[$slider['Slider']['has_confirm']], true), array('action' => 'set_confirm', $slider['Slider']['id'],$link[$slider['Slider']['has_confirm']]));?>&nbsp</td>
                        <td class='date'><?php echo $this->Genel->tarih('gun kisaay yil',$slider['Slider']['created']); ?><br><?php echo $this->Genel->tarih('saat:dakika',$slider['Slider']['created']); ?>&nbsp;</td>
                        <td><?php echo substr($slider['Slider']['name'],0,100) . '...'; ?>&nbsp;</td>
                        <td class="delete"><?php echo $this->Html->link(__('Fotoğraf(' . count($slider['Image']) . ')', true),  array('controller'=> 'images','action' => 'index','slider',$slider['Slider']['id'])); ?> | 
                            <?php echo $this->Html->link(__('Düzenle', true), array('action' => 'edit', $slider['Slider']['id'])); ?> |
                            <?php echo $this->Html->link(__('Sil', true), array('action' => 'delete', $slider['Slider']['id']), null, sprintf(__('%s No\'lu Kaydı Silmek İstediğinize Emin misiniz?', true), $slider['Slider']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    </table>

                    <div class="pagination right">
		<?php echo $this->Paginator->prev('&laquo;', array('escape' => false), null, array('class'=>'link','escape' => false));?>
			<?php echo $this->Paginator->numbers(array('separator' => Null));?>
		<?php echo $this->Paginator->next('&raquo;', array('escape' => false), null, array('class' => 'link','escape' => false));?>
	</div>
					
				</div>		<!-- .block_content ends --> 
				
				<div class="bendl"></div> 
				<div class="bendr"></div> 
			</div>		<!-- .block ends --> 