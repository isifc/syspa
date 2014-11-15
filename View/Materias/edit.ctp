<div class="materias form">
<?php echo $this->Form->create('Materia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Materia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('carrera_id');
		echo $this->Form->input('materia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Materia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Materia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnosmaterias'), array('controller' => 'alumnosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('controller' => 'alumnosmaterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitosmaterias'), array('controller' => 'requisitosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisitosmateria'), array('controller' => 'requisitosmaterias', 'action' => 'add')); ?> </li>
	</ul>
</div>
