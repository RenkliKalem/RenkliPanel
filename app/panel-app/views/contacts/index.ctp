			<div class="block"> 
			
				<div class="block_head"> 
					<div class="bheadl"></div> 
					<div class="bheadr"></div> 
					
					<h2>İLETİŞİM BİLGİLERİ</h2>
					<ul>
						<li><?=$this->Html->link('YENİ İLETİŞİM BİLGİSİ EKLE',Array('controller' => 'contacts','action' => 'add'));?></li>
					</ul>

				</div>		<!-- .block_head ends --> 
				
				<?php $confirm = Array(1 => 'Açık', 0 => 'Kapalı');$link = Array(1 => 0, 0 => 1);?>
				
				<div class="block_content"> 
                <?php echo $this->Session->flash(); ?>
				

				<table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                            
                            <th><?php echo $this->Paginator->sort('Başlık','name');?></th>
                            <th>&nbsp;</th>
                    </tr>
                    <?php foreach ($contactgroups as $Contactgroup): ?>
                    <tr>
                    	
                        <td><?php echo substr($Contactgroup['Contactgroup']['name'],0,50) . '...'; ?>&nbsp;</td>
                        <td class="delete"><?php echo $this->Html->link(__('Düzenle', true), array('action' => 'edit', $Contactgroup['Contactgroup']['id'])); ?> | <?php echo $this->Html->link(__('Sil', true), array('action' => 'delete', $Contactgroup['Contactgroup']['id']), null, sprintf(__('%s No\'lu Kaydı Silmek İstediğinize Emin misiniz?', true), $Contactgroup['Contactgroup']['id'])); ?>
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