<div class="procs index">
	<h2><?php echo __('Procs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_PROC'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_ATENCION'); ?></th>
			<th><?php echo $this->Paginator->sort('OBS_PROC'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_SGTE_PROC'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procs as $proc): ?>
	<tr>
		<td><?php echo h($proc['Proc']['ID_PROC']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proc['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $proc['Atencion']['ID_ATENCION'])); ?>
		</td>
		<td><?php echo h($proc['Proc']['OBS_PROC']); ?>&nbsp;</td>
		<td><?php echo h($proc['Proc']['FECHA_SGTE_PROC']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proc['Proc']['ID_PROC'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proc['Proc']['ID_PROC'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proc['Proc']['ID_PROC']), array(), __('Are you sure you want to delete # %s?', $proc['Proc']['ID_PROC'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proc'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
