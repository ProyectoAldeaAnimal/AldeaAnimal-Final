<div class="vets view">
<h2><?php echo __('Vet'); ?></h2>
	<dl>
		<dt><?php echo __('RUT VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['RUT_VET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['NOMBRE_VET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('APELLIDO PVET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['APELLIDO_PVET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('APELLIDO MVET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['APELLIDO_MVET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TEL VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['TEL_VET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIR VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['DIR_VET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MAIL VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['MAIL_VET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA REGISTRO VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['FECHA_REGISTRO_VET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ADMIN'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['ADMIN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HABILITADO'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['HABILITADO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AUDITOR'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['AUDITOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PASSWORD VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['PASSWORD_VET']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vet'), array('action' => 'edit', $vet['Vet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vet'), array('action' => 'delete', $vet['Vet']['id']), array(), __('Are you sure you want to delete # %s?', $vet['Vet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
