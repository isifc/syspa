<div class="actividades view">
<h2><?php echo __('Actividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividade['Area']['AreaDescripcion'], array('controller' => 'areas', 'action' => 'view', $actividade['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ActividadDescripcion'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['ActividadDescripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividade'), array('action' => 'edit', $actividade['Actividade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividade'), array('action' => 'delete', $actividade['Actividade']['id']), array(), __('Are you sure you want to delete # %s?', $actividade['Actividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tareas'); ?></h3>
	<?php if (!empty($actividade['Tarea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Actividade Id'); ?></th>
		<th><?php echo __('Convenioparticulare Id'); ?></th>
		<th><?php echo __('TareaDescripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividade['Tarea'] as $tarea): ?>
		<tr>
			<td><?php echo $tarea['id']; ?></td>
			<td><?php echo $tarea['actividade_id']; ?></td>
			<td><?php echo $tarea['convenioparticulare_id']; ?></td>
			<td><?php echo $tarea['TareaDescripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tareas', 'action' => 'view', $tarea['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tareas', 'action' => 'edit', $tarea['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tareas', 'action' => 'delete', $tarea['id']), array(), __('Are you sure you want to delete # %s?', $tarea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
