<div class="vets index">
	<h2><?php echo __('Vets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_GROUP'); ?></th>
			<th><?php echo $this->Paginator->sort('RUT_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('APELLIDO_PVET'); ?></th>
			<th><?php echo $this->Paginator->sort('APELLIDO_MVET'); ?></th>
			<th><?php echo $this->Paginator->sort('TEL_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('DIR_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('MAIL_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('FECHA_REGISTRO_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('HABILITADO'); ?></th>
			<th><?php echo $this->Paginator->sort('PASSWORD_VET'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vets as $vet): ?>
	<tr>
		<td><?php echo h($vet['Vet']['ID_VET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['ID_GROUP']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['RUT_VET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['NOMBRE_VET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['APELLIDO_PVET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['APELLIDO_MVET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['TEL_VET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['DIR_VET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['MAIL_VET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['FECHA_REGISTRO_VET']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['HABILITADO']); ?>&nbsp;</td>
		<td><?php echo h($vet['Vet']['PASSWORD_VET']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vet['Vet']['ID_VET'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vet['Vet']['ID_VET'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vet['Vet']['ID_VET']), array(), __('Are you sure you want to delete # %s?', $vet['Vet']['ID_VET'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vet'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('controller' => 'oferta_hors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
	</ul>
</div>
