<div class="farmacos form">
<?php echo $this->Form->create('Farmaco'); ?>
	<fieldset>
		<legend><?php echo __('Edit Farmaco'); ?></legend>
	<?php
		echo $this->Form->input('ID_FAR');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Farmaco.ID_FAR')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Farmaco.ID_FAR'))); ?></li>
		<li><?php echo $this->Html->link(__('List Farmacos'), array('action' => 'index')); ?></li>
	</ul>
</div>
