<div class="atencions index">
	<h2><?php echo __('Atencions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_ATENCION'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_PRES'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_MAS'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_TIPO_PRES'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_ATENCION'); ?></th>
			<th><?php echo $this->Paginator->sort('PESO'); ?></th>
			<th><?php echo $this->Paginator->sort('TEMPERATURA'); ?></th>
			<th><?php echo $this->Paginator->sort('MOTIVO'); ?></th>
			<th><?php echo $this->Paginator->sort('ANAMNESIS'); ?></th>
			<th><?php echo $this->Paginator->sort('DIAGNOSTICO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($atencions as $atencion): ?>
	<tr>
		<td><?php echo h($atencion['Atencion']['ID_ATENCION']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($atencion['Pre']['NOMBRE_PRES'], array('controller' => 'pres', 'action' => 'view', $atencion['Pre']['ID_PRES'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($atencion['Ma']['NOMBRE_MAS'], array('controller' => 'mas', 'action' => 'view', $atencion['Ma']['ID_MAS'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($atencion['TipoPre']['NOMBRE_TIPO_PRES'], array('controller' => 'tipo_pres', 'action' => 'view', $atencion['TipoPre']['ID_TIPO_PRES'])); ?>
		</td>
		<td><?php echo h($atencion['Atencion']['FECHA_ATENCION']); ?>&nbsp;</td>
		<td><?php echo h($atencion['Atencion']['PESO']); ?>&nbsp;</td>
		<td><?php echo h($atencion['Atencion']['TEMPERATURA']); ?>&nbsp;</td>
		<td><?php echo h($atencion['Atencion']['MOTIVO']); ?>&nbsp;</td>
		<td><?php echo h($atencion['Atencion']['ANAMNESIS']); ?>&nbsp;</td>
		<td><?php echo h($atencion['Atencion']['DIAGNOSTICO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $atencion['Atencion']['ID_ATENCION'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $atencion['Atencion']['ID_ATENCION'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $atencion['Atencion']['ID_ATENCION']), array(), __('Are you sure you want to delete # %s?', $atencion['Atencion']['ID_ATENCION'])); ?>
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
		<li><?php echo $this->Html->link(__('New Atencion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pres'), array('controller' => 'pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre'), array('controller' => 'pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Pres'), array('controller' => 'tipo_pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pre'), array('controller' => 'tipo_pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ma'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pats'), array('controller' => 'pats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pat'), array('controller' => 'pats', 'action' => 'add')); ?> </li>
	</ul>
</div>
