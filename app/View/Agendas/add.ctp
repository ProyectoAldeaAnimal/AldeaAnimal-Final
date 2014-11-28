<?php 
  $this->layout = 'headClientes';
?>
<div class="agendas form">
<?php echo $this->Form->create('Agenda'); ?>
	<fieldset>
		<h3><?php echo __('Solicitar Agendamiento'); ?></h3>
		<br>
	<?php

		echo $this->Form->input('ID_MAS', array(
			'label' => 'Seleccione la mascota que desea atender en la clínica : <br>',
			'options' => $mas
			));
		echo $this->Form->input('ID_VET', array(
			'label' => 'Seleccione profesional con el cual desea atender a su mascota : <br>',
			'options' => $vets
			));
		echo $this->Form->input('ID_PRES', array(
			'label' => 'Seleccione la prestación con la cual desea solicitar hora : <br>',
			'options' => $pres
			));
		
		echo $this->Form->input('ESTADO_AGENDA', array(
			'type' => 'hidden'
			));
		echo $this->Form->input('OfertaHor', array(
			'label' => 'Seleccione oferta Horaria de su veterinario : <br>',
			'options' => $ofertaHors
			));
	?>
	</fieldset>

<?php
	if($ofertaHors!='El veterinario no tiene oferta Horaria' ){
		echo $this->Form->end(__('Solicitar')); 	
	}
 ?>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>

