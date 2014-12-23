<?php 
  $this->layout = 'headClientes';
?>
<div class="agendas form">
<?php echo $this->Form->create('Agenda'); ?>
	<fieldset>
		<h3><?php echo __('Solicitar Agendamiento'); ?></h3>
		<br>

	<label for="fecha">Seleccione el día que desea antender a su mascota: </label>
	<div class="input-group date" id="cal">
	  <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
	</div>
	<?php
		echo $this->Js->submit('Enviar', array( 
              'update'=>'#divXactualizar', 
              'url' => array('controller' => 'tuControlador', 'action' => 'tuAccion'), 
            ));  

		echo $this->Form->input('ID_MAS', array(
			'label' => 'Seleccione la mascota que desea atender en la clínica : <br>',
			'options' => $mas,
			'class' => 'form-control'
			));
		echo $this->Form->input('ID_VET', array(
			'label' => 'Seleccione profesional con el cual desea atender a su mascota : <br>',
			'options' => $vets,
			'class' => 'form-control'
			));
		echo $this->Form->input('ID_PRES', array(
			'label' => 'Seleccione la prestación con la cual desea solicitar hora : <br>',
			'options' => $pres,
			'class' => 'form-control'
			));
		
		echo $this->Form->input('ESTADO_AGENDA', array(
			'type' => 'hidden'
			));
		echo $this->Form->input('OfertaHor', array(
			'label' => 'Seleccione oferta Horaria de su veterinario : <br>',
			'options' => $ofertaHors,
			'type' => 'select',
			'class' => 'form-control'
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
<script>	
	$('#cal').datepicker({
	    format: "yyyy/mm/dd",
	    startDate: "1990/01/01",
	    language: "es",
	    multidate: false,
	    todayHighlight: true
	});
</script>