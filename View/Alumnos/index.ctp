<div class="alumnos index">
	<h2><?php echo __('Alumnos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('NroLegajo'); ?></th>
			<th><?php echo $this->Paginator->sort('Apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>	
			<th><?php echo $this->Paginator->sort('carrera_id'); ?></th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alumnos as $alumno): ?>
	<tr>
		<td><?php echo h($alumno['Alumno']['NroLegajo']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Apellido']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Carrera']['carrera']); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Alumno'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnosmaterias'), array('controller' => 'alumnosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('controller' => 'alumnosmaterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postulaciones'), array('controller' => 'postulaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
