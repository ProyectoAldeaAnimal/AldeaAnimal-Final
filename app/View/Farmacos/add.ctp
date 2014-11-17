<div class="farmacos form">
<?php echo $this->Form->create('Farmaco'); ?>
	<fieldset>
		<legend><?php echo __('Add Farmaco'); ?></legend>
	<?php
		echo $this->Form->input('NOMBRE_FARMACO');
		echo $this->Form->input('LABORATORIO_MEDICAMENTO');
		echo $this->Form->input('NOMBRE_GENERICO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Farmacos'), array('action' => 'index')); ?></li>
	</ul>
</div>
