<div class="pars index">
	<h2><?php echo __('Pars'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_PAR'); ?></th>
			<th><?php echo $this->Paginator->sort('TAM_BLOQUE'); ?></th>
			<th><?php echo $this->Paginator->sort('INICIO_VIGENCIA'); ?></th>
			<th><?php echo $this->Paginator->sort('FIN_VIGENCIA'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pars as $par): ?>
	<tr>
		<td><?php echo h($par['Par']['ID_PAR']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['TAM_BLOQUE']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['INICIO_VIGENCIA']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['FIN_VIGENCIA']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $par['Par']['ID_PAR'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $par['Par']['ID_PAR'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $par['Par']['ID_PAR']), array(), __('Are you sure you want to delete # %s?', $par['Par']['ID_PAR'])); ?>
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
		<li><?php echo $this->Html->link(__('New Par'), array('action' => 'add')); ?></li>
	</ul>
</div>
