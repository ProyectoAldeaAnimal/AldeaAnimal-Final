<div class="procs view">
<h2><?php echo __('Proc'); ?></h2>
	<dl>
		<dt><?php echo __('ID PROC'); ?></dt>
		<dd>
			<?php echo h($proc['Proc']['ID_PROC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atencion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proc['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $proc['Atencion']['ID_ATENCION'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OBS PROC'); ?></dt>
		<dd>
			<?php echo h($proc['Proc']['OBS_PROC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA SGTE PROC'); ?></dt>
		<dd>
			<?php echo h($proc['Proc']['FECHA_SGTE_PROC']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proc'), array('action' => 'edit', $proc['Proc']['ID_PROC'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proc'), array('action' => 'delete', $proc['Proc']['ID_PROC']), array(), __('Are you sure you want to delete # %s?', $proc['Proc']['ID_PROC'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Procs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
