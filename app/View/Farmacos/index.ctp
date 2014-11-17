
<div class="farmacos index">
	<h2><?php echo __('Farmacos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_FAR'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_FARMACO'); ?></th>
			<th><?php echo $this->Paginator->sort('LABORATORIO_MEDICAMENTO'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_GENERICO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($farmacos as $farmaco): ?>
	<tr>
		<td><?php echo h($farmaco['Farmaco']['ID_FAR']); ?>&nbsp;</td>
		<td><?php echo h($farmaco['Farmaco']['NOMBRE_FARMACO']); ?>&nbsp;</td>
		<td><?php echo h($farmaco['Farmaco']['LABORATORIO_MEDICAMENTO']); ?>&nbsp;</td>
		<td><?php echo h($farmaco['Farmaco']['NOMBRE_GENERICO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $farmaco['Farmaco']['ID_FAR'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $farmaco['Farmaco']['ID_FAR'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $farmaco['Farmaco']['ID_FAR']), array(), __('Are you sure you want to delete # %s?', $farmaco['Farmaco']['ID_FAR'])); ?>
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
		<li><?php echo $this->Html->link(__('New Farmaco'), array('action' => 'add')); ?></li>
	</ul>
</div>
