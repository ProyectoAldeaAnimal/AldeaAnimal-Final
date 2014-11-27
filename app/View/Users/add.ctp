<?php
$this->layout = 'head'
?>
<div class="users form">

<?php echo $this->Form->create('User');?>
    <fieldset>
        <h3><?php echo __('Agregar un nuevo Cliente'); ?></h3>
        <?php


         echo $this->Form->input('ID_GROUP',array(
            'type' => 'hidden',
            'value'=> 1
            ));
        echo $this->Form->input('RUT_CLI',array(
            'type' => 'text',
            'label'=>'RUT'
            ));
        echo $this->Form->input('NOMBRE_CLI',array('label'=>'Nombre Cliente'));
        echo $this->Form->input('APELLIDO_PCLI',array('label'=>'Apellido Paterno Cliente'));
        echo $this->Form->input('APELLIDO_MCLI',array('label'=>'Apellido Materno Cliente'));
        echo $this->Form->input('MAIL_CLI',array('label'=>'E-Mail Cliente'));
        echo $this->Form->input('TEL_CLI',array('label'=>'Teléfono Cliente'));
        echo $this->Form->input('FECHA_REGISTRO_CLI',array('label'=>'Fecha Registro Cliente <br>'));
        echo $this->Form->input('DIR_CLI',array('label'=>'Dirección Cliente'));
        echo $this->Form->input('HABILITADO_CLI',array('label'=>'Habilitar Cliente'));
        echo $this->Form->input('PASSWORD_CLI',array('label'=>'Contraseña Cliente'));
		echo $this->Form->input('password_confirm', array('label' => 'Confirmar Contraseña', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));

		
		echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <div id="ex5">
                <?php
                    echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
                  ?>
              </div>
</div>