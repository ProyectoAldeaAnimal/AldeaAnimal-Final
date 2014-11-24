<div class="mas view">
<h2><?php echo __('Ma'); ?></h2>
	<dl>
		<dt><?php echo __('ID MAS'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['ID_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Mas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ma['TipoMas'][''], array('controller' => 'tipo_mas', 'action' => 'view', $ma['TipoMas']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ma['User']['NOMBRE_CLI'], array('controller' => 'users', 'action' => 'view', $ma['User']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE MAS'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['NOMBRE_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RAZA MAS'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['RAZA_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA NACIMIENTO'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['FECHA_NACIMIENTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SEXO'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['SEXO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('COLOR'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['COLOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CARACTERISTICA'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['CARACTERISTICA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DEFUNCION'); ?></dt>
		<dd>
			<?php echo h($ma['Ma']['FECHA_DEFUNCION']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ma'), array('action' => 'edit', $ma['Ma']['ID_MAS'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ma'), array('action' => 'delete', $ma['Ma']['ID_MAS']), array(), __('Are you sure you want to delete # %s?', $ma['Ma']['ID_MAS'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Mas'), array('controller' => 'tipo_mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Mas'), array('controller' => 'tipo_mas', 'action' => 'add')); ?> </li>
	</ul>
</div>
