<div class="vets form">
<?php echo $this->Form->create('Vet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vet'); ?></legend>
	<?php
		echo $this->Form->input('ID_VET');
		echo $this->Form->input('ID_GROUP');
		echo $this->Form->input('RUT_VET');
		echo $this->Form->input('NOMBRE_VET');
		echo $this->Form->input('APELLIDO_PVET');
		echo $this->Form->input('APELLIDO_MVET');
		echo $this->Form->input('TEL_VET');
		echo $this->Form->input('DIR_VET');
		echo $this->Form->input('MAIL_VET');
		echo $this->Form->input('FECHA_REGISTRO_VET');
		echo $this->Form->input('HABILITADO');
		echo $this->Form->input('PASSWORD_VET');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vet.ID_VET')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vet.ID_VET'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('controller' => 'oferta_hors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
	</ul>
</div>
