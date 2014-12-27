<?php 
			echo $this->Form->input('OfertaHor', array(
			'label' => 'Seleccione oferta Horaria de su veterinario : <br>',
			'options' => $ofertaHors,
			'type' => 'select',
			'class' => 'form-control'
			));

?>