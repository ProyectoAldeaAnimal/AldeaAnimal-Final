<?php 
 $this->layout = 'headClientes';
?>
<div class="User form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<h3><?php echo __('Editar Mis Datos'); ?></h3>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('ID_GROUP', array('type'=> 'hidden'));
		echo $this->Form->input('RUT_CLI' ,array('label'=> 'Rut'));
		echo $this->Form->input('NOMBRE_CLI',array('label'=> 'Nombre'));
		echo $this->Form->input('APELLIDO_PCLI',array('label'=> 'Apellido Paterno'));
		echo $this->Form->input('APELLIDO_MCLI',array('label'=> 'Apellido Materno'));
		echo $this->Form->input('MAIL_CLI',array('label'=> 'E-Mail'));
		echo $this->Form->input('TEL_CLI',array('label'=> 'Teléfono'));
		echo $this->Form->input('FECHA_REGISTRO_CLI',array('type'=> 'hidden'));
		echo $this->Form->input('DIR_CLI',array('label'=> 'Dirección'));
		echo $this->Form->input('HABILITADO_CLI',array('type'=> 'hidden'));
		echo $this->Form->input('PASSWORD_CLI',array('label'=> 'Contraseña'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
