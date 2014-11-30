<div class="recMeds index">
	<h2><?php echo __('Rec Meds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_RECETA'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_ATENCION'); ?></th>
			<th><?php echo $this->Paginator->sort('TIPO'); ?></th>
			<th><?php echo $this->Paginator->sort('OBS_RECETA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($recMeds as $recMed): ?>
	<tr>
		<td><?php echo h($recMed['RecMed']['ID_RECETA']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recMed['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $recMed['Atencion']['ID_ATENCION'])); ?>
		</td>
		<td><?php echo h($recMed['RecMed']['TIPO']); ?>&nbsp;</td>
		<td><?php echo h($recMed['RecMed']['OBS_RECETA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recMed['RecMed']['ID_RECETA'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recMed['RecMed']['ID_RECETA'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recMed['RecMed']['ID_RECETA']), array(), __('Are you sure you want to delete # %s?', $recMed['RecMed']['ID_RECETA'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rec Med'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farmacos'), array('controller' => 'farmacos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farmaco'), array('controller' => 'farmacos', 'action' => 'add')); ?> </li>
	</ul>
</div>
