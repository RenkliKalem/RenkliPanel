			<div class="block"> 
			
				<div class="block_head"> 
					<div class="bheadl"></div> 
					<div class="bheadr"></div> 
					
					<h2>MÜŞTERİ TEMSİLCİLERİ</h2>
					<ul>
						<li><?=$this->Html->link('YENİ MÜŞTERİ TEMSİLCİSİ',Array('controller' => 'csrs','action' => 'add'));?></li>
					
					</ul>

				</div>		<!-- .block_head ends --> 
								
				<div class="block_content"> 
                <?php echo $this->Session->flash(); ?>
				

				<table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                            <th><?php echo $this->Paginator->sort('Başlık','name');?></th>
                            <th>&nbsp;</th>
                    </tr>
                    <?php foreach ($Csrs as $Csr): ?>
                    <tr>
                        <td><?=$Csr['Csr']['name']?>&nbsp;<?=$Csr['Csr']['surname']?></td>
                        <td class="delete"> 
                            <?php echo $this->Html->link(__('Düzenle', true), array('action' => 'edit', $Csr['Csr']['id'])); ?> |
                            <?php echo $this->Html->link(__('Sil', true), array('action' => 'delete', $Csr['Csr']['id']), null, sprintf(__('%s No\'lu Kaydı Silmek İstediğinize Emin misiniz?', true), $Csr['Csr']['id'])); ?>
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