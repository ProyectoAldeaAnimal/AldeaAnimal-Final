<?php 
 $this->layout = 'headClientes';
?>
<div class="User form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('ID_GROUP');
		echo $this->Form->input('RUT_CLI');
		echo $this->Form->input('NOMBRE_CLI');
		echo $this->Form->input('APELLIDO_PCLI');
		echo $this->Form->input('APELLIDO_MCLI');
		echo $this->Form->input('MAIL_CLI');
		echo $this->Form->input('TEL_CLI');
		echo $this->Form->input('FECHA_REGISTRO_CLI');
		echo $this->Form->input('DIR_CLI');
		echo $this->Form->input('HABILITADO_CLI');
		echo $this->Form->input('PASSWORD_CLI');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
