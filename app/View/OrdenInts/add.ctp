<?php 
	$this->layout= 'head';
?>
<div class="ordenInts form">
<?php echo $this->Form->create('OrdenInt'); ?>
	<fieldset>
		<h3><?php echo __('Creando Orden de Intervención:'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('ID_ATENCION', array(
			'label' => 'Seleccione la atención a la que corresponde esta Intervención: <br>',
			'options' => $atencions
			));
		echo $this->Form->input('ID_TIPO_INT', array(
			'label' => 'Seleccione el tipo de Intervención a realizar: <br>',
			'options' => $tipoDeInts
			));
		echo $this->Form->input('FECHA_SUGERIDA_INT', array(
			'label' => 'Seleccione fecha sugeridad para la realización de la orden: <br>'
			));
		echo $this->Form->input('MOTIVO_INT', array(
			'label' => 'Indique el motivo de la Intervención: <br>'
			));
		echo $this->Form->input('FECHA_ORDEN_INT', array(
			'label' => 'Indique el la fehca de emisión de la orden: <br>'
			));
		echo $this->Form->input('DURACION_ESTIMADA_INT', array(
			'label' => 'Indique la duración estimada de la Intervención: <br>'
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>
