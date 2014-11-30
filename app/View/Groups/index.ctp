<div class="groups index">
	<h2><?php echo __('Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_GRUPO'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBREGRUPO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['ID_GRUPO']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['NOMBREGRUPO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['ID_GRUPO'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['ID_GRUPO'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['ID_GRUPO']), array(), __('Are you sure you want to delete # %s?', $group['Group']['ID_GRUPO'])); ?>
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
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?></li>
	</ul>
</div>