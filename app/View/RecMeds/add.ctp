<?php
	$this->layout= 'head';
?>

<div class="recMeds form">
<?php echo $this->Form->create('RecMed'); ?>
	<fieldset>
		<h3><?php echo __('Realizando un Receta o Medicación'); ?></h3>
	<?php
		echo $this->Form->input('ID_ATENCION', array(
				'label' => 'Atención: <br>',
				'options' => $atencions
			));
		$rOm = array('M'=> 'Medicación', 'R' => 'Receta');
		echo $this->Form->input('TIPO', array(
				'label' => 'Seleccione si esta realizando una medicación o una receta: <br>',
				'options' => $rOm
			));
		echo $this->Form->input('OBS_RECETA', array(
				'label' => 'Ingrese las observaciones que estime pertinentes: <br>',
				'type' => 'textarea'
			));
		echo $this->Form->input('Farmaco');
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

