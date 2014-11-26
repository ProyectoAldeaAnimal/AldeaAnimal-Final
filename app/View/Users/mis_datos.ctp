<?php 
 $this->layout = 'headClientes';
?>

<div class="User view">
<legend><FONT COLOR="#229b0d"><h3><?php echo __('Mis Datos Personales:'); ?></h3></FONT></legend>

	<br>
	<legend>

		<h4><?php echo __('Su rut es:'); ?></h4>
		<?php echo h($User['User']['RUT_CLI']); ?>
	</legend>
	<legend>
		<h4><?php echo __('Su nombre Completo es:'); ?></h4>
		<?php echo h($User['User']['NOMBRE_CLI']); ?> <?php echo h($User['User']['APELLIDO_PCLI']); ?> <?php echo h($User['User']['APELLIDO_MCLI']); ?>
	</legend>
	<legend>
		<h4><?php echo __('Su E-mail es:'); ?></h4>
		<?php echo h($User['User']['MAIL_CLI']); ?>
	</legend>
	<legend>
		<h4><?php echo __('Su teléfono es:'); ?></h4>
		<?php echo h($User['User']['TEL_CLI']); ?>
	</legend>
	<legend>
		<h4><?php echo __('Usted fue registrado el día:'); ?></h4>
		<?php echo h($User['User']['FECHA_REGISTRO_CLI']); ?>
	</legend>
	<legend>
		<h4><?php echo __('Su dirección es:'); ?></h4>
		<?php echo h($User['User']['DIR_CLI']); ?>
	</legend>

	
	<legend>
		
		<?php 
		if($User['User']['HABILITADO_CLI'])
		echo $this->Html->div('alert alert-success', 'Usted se encuentra habilitado para usar el sistema');
		
		else echo $this->Html->div('alert alert-danger', 'Usted no se encuentra habilitado para usar el sistema');?>
	</legend>

</div>
<div class="actions">

	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>

	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Mis Datos'), array('action' => 'edit', $User['User']['ID'])); ?> </li>
	</ul>
</div>
