<div class="departamentos view">
<h2><?php echo __('Departamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provincia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($departamento['Provincia']['id'], array('controller' => 'provincias', 'action' => 'view', $departamento['Provincia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Localidades'); ?></h3>
	<?php if (!empty($departamento['Localidade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($departamento['Localidade'] as $localidade): ?>
		<tr>
			<td><?php echo $localidade['id']; ?></td>
			<td><?php echo $localidade['departamento_id']; ?></td>
			<td><?php echo $localidade['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'localidades', 'action' => 'view', $localidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'localidades', 'action' => 'edit', $localidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'localidades', 'action' => 'delete', $localidade['id']), array(), __('Are you sure you want to delete # %s?', $localidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Localidade'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
