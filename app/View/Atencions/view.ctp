<div class="atencions view">
<h2><?php echo __('Atencion'); ?></h2>
	<dl>
		<dt><?php echo __('ID ATENCION'); ?></dt>
		<dd>
			<?php echo h($atencion['Atencion']['ID_ATENCION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($atencion['Pre']['NOMBRE_PRES'], array('controller' => 'pres', 'action' => 'view', $atencion['Pre']['ID_PRES'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($atencion['Ma']['NOMBRE_MAS'], array('controller' => 'mas', 'action' => 'view', $atencion['Ma']['ID_MAS'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Pre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($atencion['TipoPre']['NOMBRE_TIPO_PRES'], array('controller' => 'tipo_pres', 'action' => 'view', $atencion['TipoPre']['ID_TIPO_PRES'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA ATENCION'); ?></dt>
		<dd>
			<?php echo h($atencion['Atencion']['FECHA_ATENCION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PESO'); ?></dt>
		<dd>
			<?php echo h($atencion['Atencion']['PESO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TEMPERATURA'); ?></dt>
		<dd>
			<?php echo h($atencion['Atencion']['TEMPERATURA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MOTIVO'); ?></dt>
		<dd>
			<?php echo h($atencion['Atencion']['MOTIVO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ANAMNESIS'); ?></dt>
		<dd>
			<?php echo h($atencion['Atencion']['ANAMNESIS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIAGNOSTICO'); ?></dt>
		<dd>
			<?php echo h($atencion['Atencion']['DIAGNOSTICO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atencion'), array('action' => 'edit', $atencion['Atencion']['ID_ATENCION'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Atencion'), array('action' => 'delete', $atencion['Atencion']['ID_ATENCION']), array(), __('Are you sure you want to delete # %s?', $atencion['Atencion']['ID_ATENCION'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pres'), array('controller' => 'pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre'), array('controller' => 'pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Pres'), array('controller' => 'tipo_pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pre'), array('controller' => 'tipo_pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ma'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pats'), array('controller' => 'pats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pat'), array('controller' => 'pats', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pats'); ?></h3>
	<?php if (!empty($atencion['Pat'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID PAT'); ?></th>
		<th><?php echo __('NOMBRE PAT'); ?></th>
		<th><?php echo __('TIPO PAT'); ?></th>
		<th><?php echo __('GRAVEDAD PAT'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($atencion['Pat'] as $pat): ?>
		<tr>
			<td><?php echo $pat['ID_PAT']; ?></td>
			<td><?php echo $pat['NOMBRE_PAT']; ?></td>
			<td><?php echo $pat['TIPO_PAT']; ?></td>
			<td><?php echo $pat['GRAVEDAD_PAT']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pats', 'action' => 'view', $pat['ID_PAT'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pats', 'action' => 'edit', $pat['ID_PAT'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pats', 'action' => 'delete', $pat['ID_PAT']), array(), __('Are you sure you want to delete # %s?', $pat['ID_PAT'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pat'), array('controller' => 'pats', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
