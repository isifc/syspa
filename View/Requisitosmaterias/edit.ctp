<div class="requisitosmaterias form">
<?php echo $this->Form->create('Requisitosmateria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Requisitosmateria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('RequisitoMateriaCondicion');
		echo $this->Form->input('ofertascarreras_id');
		echo $this->Form->input('materia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Requisitosmateria.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Requisitosmateria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requisitosmaterias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
