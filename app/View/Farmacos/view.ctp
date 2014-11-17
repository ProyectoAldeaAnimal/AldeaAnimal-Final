<div class="farmacos view">
<h2><?php echo __('Farmaco'); ?></h2>
	<dl>
		<dt><?php echo __('ID FAR'); ?></dt>
		<dd>
			<?php echo h($farmaco['Farmaco']['ID_FAR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE FARMACO'); ?></dt>
		<dd>
			<?php echo h($farmaco['Farmaco']['NOMBRE_FARMACO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LABORATORIO MEDICAMENTO'); ?></dt>
		<dd>
			<?php echo h($farmaco['Farmaco']['LABORATORIO_MEDICAMENTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE GENERICO'); ?></dt>
		<dd>
			<?php echo h($farmaco['Farmaco']['NOMBRE_GENERICO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Farmaco'), array('action' => 'edit', $farmaco['Farmaco']['ID_FAR'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Farmaco'), array('action' => 'delete', $farmaco['Farmaco']['ID_FAR']), array(), __('Are you sure you want to delete # %s?', $farmaco['Farmaco']['ID_FAR'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Farmacos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farmaco'), array('action' => 'add')); ?> </li>
	</ul>
</div>
