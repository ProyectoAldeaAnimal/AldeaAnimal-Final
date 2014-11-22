<div class="pars form">
<?php echo $this->Form->create('Par'); ?>
	<fieldset>
		<legend><?php echo __('Add Par'); ?></legend>
	<?php
		echo $this->Form->input('TAM_BLOQUE');
		echo $this->Form->input('INICIO_VIGENCIA');
		echo $this->Form->input('FIN_VIGENCIA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pars'), array('action' => 'index')); ?></li>
	</ul>
</div>
