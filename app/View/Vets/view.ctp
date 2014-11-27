<div class="vets view">
<h2><?php echo __('Vet'); ?></h2>
	<dl>
		<dt><?php echo __('ID VET'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['ID_VET']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID GROUP'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['ID_GROUP']); ?>
			&nbsp;
		</dd>
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
		<dt><?php echo __('HABILITADO'); ?></dt>
		<dd>
			<?php echo h($vet['Vet']['HABILITADO']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Vet'), array('action' => 'edit', $vet['Vet']['ID_VET'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vet'), array('action' => 'delete', $vet['Vet']['ID_VET']), array(), __('Are you sure you want to delete # %s?', $vet['Vet']['ID_VET'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('controller' => 'oferta_hors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Oferta Hors'); ?></h3>
	<?php if (!empty($vet['OfertaHor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID OFERTA HOR'); ?></th>
		<th><?php echo __('ID CAL'); ?></th>
		<th><?php echo __('ID VET'); ?></th>
		<th><?php echo __('ESTADO AGENDAMIENTO'); ?></th>
		<th><?php echo __('HORA INICIO'); ?></th>
		<th><?php echo __('HORA TERMINO'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vet['OfertaHor'] as $ofertaHor): ?>
		<tr>
			<td><?php echo $ofertaHor['ID_OFERTA_HOR']; ?></td>
			<td><?php echo $ofertaHor['ID_CAL']; ?></td>
			<td><?php echo $ofertaHor['ID_VET']; ?></td>
			<td><?php echo $ofertaHor['ESTADO_AGENDAMIENTO']; ?></td>
			<td><?php echo $ofertaHor['HORA_INICIO']; ?></td>
			<td><?php echo $ofertaHor['HORA_TERMINO']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'oferta_hors', 'action' => 'view', $ofertaHor['ID_OFERTA_HOR'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'oferta_hors', 'action' => 'edit', $ofertaHor['ID_OFERTA_HOR'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'oferta_hors', 'action' => 'delete', $ofertaHor['ID_OFERTA_HOR']), array(), __('Are you sure you want to delete # %s?', $ofertaHor['ID_OFERTA_HOR'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
