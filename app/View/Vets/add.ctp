<div class="vets form">
<?php echo $this->Form->create('Vet'); ?>
	<fieldset>
		<legend><?php echo __('Add Vet'); ?></legend>
	<?php
		echo $this->Form->input('RUT_VET');
		echo $this->Form->input('NOMBRE_VET');
		echo $this->Form->input('APELLIDO_PVET');
		echo $this->Form->input('APELLIDO_MVET');
		echo $this->Form->input('TEL_VET');
		echo $this->Form->input('DIR_VET');
		echo $this->Form->input('MAIL_VET');
		echo $this->Form->input('FECHA_REGISTRO_VET');
		echo $this->Form->input('ADMIN');
		echo $this->Form->input('HABILITADO');
		echo $this->Form->input('AUDITOR');
		echo $this->Form->input('PASSWORD_VET');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vets'), array('action' => 'index')); ?></li>
	</ul>
</div>
