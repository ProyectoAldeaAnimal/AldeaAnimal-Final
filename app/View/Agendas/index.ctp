<div class="agendas index">
	<h2><?php echo __('Agendas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_AGENDA'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_PRES'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AGENDA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($agendas as $agenda): ?>
	<tr>
		<td><?php echo h($agenda['Agenda']['ID_AGENDA']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agenda['Ma']['NOMBRE_MAS'], array('controller' => 'mas', 'action' => 'view', $agenda['Ma']['ID_MAS'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agenda['Vet']['NOMBRE_VET'], array('controller' => 'vets', 'action' => 'view', $agenda['Vet']['ID_vET'])); ?>
		</td>
		<td><?php echo h($agenda['Agenda']['ID_PRES']); ?>&nbsp;</td>
		<td><?php echo h($agenda['Agenda']['ESTADO_AGENDA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agenda['Agenda']['ID_AGENDA'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agenda['Agenda']['ID_AGENDA'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agenda['Agenda']['ID_AGENDA']), array(), __('Are you sure you want to delete # %s?', $agenda['Agenda']['ID_AGENDA'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Agenda'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ma'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('controller' => 'oferta_hors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
	</ul>
</div>
