<div class="recMeds view">
<h2><?php echo __('Rec Med'); ?></h2>
	<dl>
		<dt><?php echo __('ID RECETA'); ?></dt>
		<dd>
			<?php echo h($recMed['RecMed']['ID_RECETA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atencion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recMed['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $recMed['Atencion']['ID_ATENCION'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIPO'); ?></dt>
		<dd>
			<?php echo h($recMed['RecMed']['TIPO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OBS RECETA'); ?></dt>
		<dd>
			<?php echo h($recMed['RecMed']['OBS_RECETA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rec Med'), array('action' => 'edit', $recMed['RecMed']['ID_RECETA'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rec Med'), array('action' => 'delete', $recMed['RecMed']['ID_RECETA']), array(), __('Are you sure you want to delete # %s?', $recMed['RecMed']['ID_RECETA'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rec Meds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rec Med'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farmacos'), array('controller' => 'farmacos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farmaco'), array('controller' => 'farmacos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Farmacos'); ?></h3>
	<?php if (!empty($recMed['Farmaco'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID FAR'); ?></th>
		<th><?php echo __('NOMBRE FARMACO'); ?></th>
		<th><?php echo __('LABORATORIO MEDICAMENTO'); ?></th>
		<th><?php echo __('NOMBRE GENERICO'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recMed['Farmaco'] as $farmaco): ?>
		<tr>
			<td><?php echo $farmaco['ID_FAR']; ?></td>
			<td><?php echo $farmaco['NOMBRE_FARMACO']; ?></td>
			<td><?php echo $farmaco['LABORATORIO_MEDICAMENTO']; ?></td>
			<td><?php echo $farmaco['NOMBRE_GENERICO']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'farmacos', 'action' => 'view', $farmaco['ID_FAR'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'farmacos', 'action' => 'edit', $farmaco['ID_FAR'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'farmacos', 'action' => 'delete', $farmaco['ID_FAR']), array(), __('Are you sure you want to delete # %s?', $farmaco['ID_FAR'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Farmaco'), array('controller' => 'farmacos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
