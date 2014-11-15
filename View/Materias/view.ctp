<div class="materias view">
<h2><?php echo __('Materia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo $this->Html->link($materia['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $materia['Carrera']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo h($materia['Materia']['materia']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Materia'), array('action' => 'edit', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Materia'), array('action' => 'delete', $materia['Materia']['id']), array(), __('Are you sure you want to delete # %s?', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnosmaterias'), array('controller' => 'alumnosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('controller' => 'alumnosmaterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitosmaterias'), array('controller' => 'requisitosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisitosmateria'), array('controller' => 'requisitosmaterias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alumnosmaterias'); ?></h3>
	<?php if (!empty($materia['Alumnosmateria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('EstadoMateria'); ?></th>
		<th><?php echo __('FechaRegularizacion'); ?></th>
		<th><?php echo __('FechaAprobacion'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materia['Alumnosmateria'] as $alumnosmateria): ?>
		<tr>
			<td><?php echo $alumnosmateria['id']; ?></td>
			<td><?php echo $alumnosmateria['EstadoMateria']; ?></td>
			<td><?php echo $alumnosmateria['FechaRegularizacion']; ?></td>
			<td><?php echo $alumnosmateria['FechaAprobacion']; ?></td>
			<td><?php echo $alumnosmateria['materia_id']; ?></td>
			<td><?php echo $alumnosmateria['alumno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnosmaterias', 'action' => 'view', $alumnosmateria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnosmaterias', 'action' => 'edit', $alumnosmateria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnosmaterias', 'action' => 'delete', $alumnosmateria['id']), array(), __('Are you sure you want to delete # %s?', $alumnosmateria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('controller' => 'alumnosmaterias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Requisitosmaterias'); ?></h3>
	<?php if (!empty($materia['Requisitosmateria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('RequisitoMateriaCondicion'); ?></th>
		<th><?php echo __('Ofertacarreas Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($materia['Requisitosmateria'] as $requisitosmateria): ?>
		<tr>
			<td><?php echo $requisitosmateria['id']; ?></td>
			<td><?php echo $requisitosmateria['RequisitoMateriaCondicion']; ?></td>
			<td><?php echo $requisitosmateria['ofertacarreas_id']; ?></td>
			<td><?php echo $requisitosmateria['materia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'requisitosmaterias', 'action' => 'view', $requisitosmateria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'requisitosmaterias', 'action' => 'edit', $requisitosmateria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requisitosmaterias', 'action' => 'delete', $requisitosmateria['id']), array(), __('Are you sure you want to delete # %s?', $requisitosmateria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requisitosmateria'), array('controller' => 'requisitosmaterias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
