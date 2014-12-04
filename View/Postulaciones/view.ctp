<div class="postulaciones view">
<h2><?php echo __('Postulacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($postulacione['Postulacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($postulacione['Alumno']['name'], array('controller' => 'alumnos', 'action' => 'view', $postulacione['Alumno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oferta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($postulacione['Oferta']['id'], array('controller' => 'ofertas', 'action' => 'view', $postulacione['Oferta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaPostulacion'); ?></dt>
		<dd>
			<?php echo h($postulacione['Postulacione']['FechaPostulacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaSeleccion'); ?></dt>
		<dd>
			<?php echo h($postulacione['Postulacione']['FechaSeleccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CumpleRequisitosAcademicos'); ?></dt>
		<dd>
			<?php echo h($postulacione['Postulacione']['CumpleRequisitosAcademicos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Postulacione'), array('action' => 'edit', $postulacione['Postulacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Postulacione'), array('action' => 'delete', $postulacione['Postulacione']['id']), array(), __('Are you sure you want to delete # %s?', $postulacione['Postulacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Postulaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postulacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
	</ul>
</div>
