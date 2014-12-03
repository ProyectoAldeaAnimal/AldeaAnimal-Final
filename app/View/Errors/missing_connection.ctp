<?php

	$usuario = AuthComponent::user();
	if(isset($usuario)){
		if(key($usuario[0])=='Vet') $this->layout= 'head';
		else 	$this->layout= 'headClientes';
	}
	else $this->layout= 'headClientes';
?>
<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive center-block"));
		          ?>
</div>

<?php 


	echo $this->Html->div('alert alert-danger', '<h3 class="text-center">Lo sentimos. No se puede conectar en estos momentos a la base de datos, por favor comuniquese con el administrador del sistema.</h3>'); 


?>