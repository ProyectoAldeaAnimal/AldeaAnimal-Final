<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<?php

	$usuario = AuthComponent::user();
	if(isset($usuario)){
		if(key($usuario[0])=='Vet')
			{	
				if($usuario[0]['Group']['ID_GRUPO']==2) $this->layout= 'head';
				else $this->layout= 'heados';
			}
		else 	$this->layout= 'headClientes';
	}
	else $this->layout= 'headClientes';
?>


<?php 


	echo $this->Html->div('alert alert-danger', '<h3 class="text-center">Ups! ERROR IRRECUPERABLE, POR FAVOR ACCEDA A OTRA SECCIÓN O COMPRUEBA QUE ESTE BIEN ESCRITA LA DIRECCIÓN</h3>'); 


?>
<?php
/*
<h2><?php echo $message; ?></h2>
<p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php echo __d('cake', 'An Internal Error Has Occurred.'); ?>
</p>
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
*/
?>