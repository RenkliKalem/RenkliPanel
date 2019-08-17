			<div class="block"> 
			
				<div class="block_head"> 
					<div class="bheadl"></div> 
					<div class="bheadr"></div> 
					
					<h2>DÖKÜMAN LİSTESİ</h2>
					<ul>
						<li><?=$this->Html->link('YENİ DÖKÜMAN EKLE',Array('controller' => 'instruments','action' => 'add'));?></li>
					
					</ul>

				</div>		<!-- .block_head ends --> 
				
				<?php $confirm = Array(1 => 'Açık', 0 => 'Kapalı');$link = Array(1 => 0, 0 => 1);?>
				
				<div class="block_content"> 
                <?php echo $this->Session->flash(); ?>
				

				<table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                            <th><?php echo $this->Paginator->sort('Onay','has_confirm');?></th>
                            <th><?php echo $this->Paginator->sort('Başlık','name_tr');?></th>
                            <th>&nbsp;</th>
                    </tr>
                    <?php foreach ($instruments as $instrument): ?>
                    <tr>
                    	<td><?php echo @$this->Html->link(__($confirm[$instrument['Instrument']['has_confirm']], true), array('action' => 'set_confirm', $instrument['Instrument']['id'],$link[$instrument['Instrument']['has_confirm']]));?>&nbsp</td>
                        <td><?php echo substr($instrument['Instrument']['name_tr'],0,100) . '...'; ?>&nbsp;</td>
                        <td class="delete"><?php echo $this->Html->link(__('Döküman(' . count($instrument['Document']) . ')', true),  array('controller'=> 'documents','action' => 'index','instrument',$instrument['Instrument']['id'])); ?> | 
                            <?php echo $this->Html->link(__('Düzenle', true), array('action' => 'edit', $instrument['Instrument']['id'])); ?> |
                            <?php echo $this->Html->link(__('Sil', true), array('action' => 'delete', $instrument['Instrument']['id']), null, sprintf(__('%s No\'lu Kaydı Silmek İstediğinize Emin misiniz?', true), $instrument['Instrument']['id'])); ?>
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