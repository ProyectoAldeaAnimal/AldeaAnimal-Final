<?php

 $this->layout= 'head';
?>
<div class="mas form">
<?php echo $this->Form->create('Ma'); ?>
	<fieldset>
		<FONT COLOR="#229b0d"><h3><?php echo __('Agregar nueva mascota a un cliente'); ?></h3></FONT>
	<?php
		echo $this->Form->input('ID_TIPO_MAS',array('label'=> 'Seleccione el tipo de mascota:', 'options' => $tipoMas));
		echo $this->Form->input('ID',array('label'=> 'Seleccione el dueño:', 'options' => $users));
		echo $this->Form->input('NOMBRE_MAS',array('label'=> 'Ingrese el nombre:'));
		echo $this->Form->input('RAZA_MAS',array('label'=> 'Ingrese la raza:'));
		echo $this->Form->input('FECHA_NACIMIENTO',array('label'=> 'Ingrese fecha de naciemiento: <br>'));
		echo $this->Form->input('SEXO',array('label'=> 'Sexo:'));
		echo $this->Form->input('COLOR',array('label'=> 'Color:'));
		echo $this->Form->input('CARACTERISTICA',array('label'=> 'Ingrese características adicionales:'));
		echo $this->Form->input('FECHA_DEFUNCION',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <div id="ex5">
                <?php
                    echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
                  ?>
              </div>
</div>