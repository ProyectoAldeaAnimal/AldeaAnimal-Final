<div class="mas form">
<?php echo $this->Form->create('Ma'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ma'); ?></legend>
	<?php
		echo $this->Form->input('ID_MAS');
		echo $this->Form->input('ID_TIPO_MAS');
		echo $this->Form->input('ID');
		echo $this->Form->input('NOMBRE_MAS');
		echo $this->Form->input('RAZA_MAS');
		echo $this->Form->input('FECHA_NACIMIENTO');
		echo $this->Form->input('SEXO');
		echo $this->Form->input('COLOR');
		echo $this->Form->input('CARACTERISTICA');
		echo $this->Form->input('FECHA_DEFUNCION');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ma.ID_MAS')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ma.ID_MAS'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Mas'), array('controller' => 'tipo_mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Mas'), array('controller' => 'tipo_mas', 'action' => 'add')); ?> </li>
	</ul>
</div>
