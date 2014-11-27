<?php 
  $this->layout = 'headClientes';
?>
<div class="agendas index">
	<h3><?php echo __('Mis Solicitudes de Hora'); 
	?></h3>
	<br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo __('Mascota'); ?></th>
			<th><?php echo __('Veterinaio'); ?></th>
			<th><?php echo __('Prestación'); ?></th>
			<th><?php echo __('Estado Solicitud'); ?>&nbsp;</th>
			<th><?php echo __('Fecha Solicitud'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($agendas as $agenda): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($agenda['Ma']['NOMBRE_MAS'], array('controller' => 'mas', 'action' => 'view', $agenda['Ma']['ID_MAS'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agenda['Vet']['name'], array('controller' => 'vets', 'action' => 'view', $agenda['Vet']['ID_VET'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agenda['Pre']['NOMBRE_PRES'], array('controller' => 'pres', 'action' => 'view', $agenda['Pre']['ID_PRES'])); ?>
		</td>
		<td><?php echo h($agenda['Agenda']['ESTADO_AGENDA']); ?>&nbsp;</td>

		<td><?php echo h($ofertaHors[$agenda['Agenda']['ID_AGENDA']]); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $agenda['Agenda']['ID_AGENDA'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $agenda['Agenda']['ID_AGENDA']), array(), __('Are you sure you want to delete # %s?', $agenda['Agenda']['ID_AGENDA'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>

</div>
