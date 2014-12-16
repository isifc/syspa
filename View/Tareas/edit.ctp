<table>
	<tr>
		<td class="mitdLeft">
		<h3><?php echo __('Editar Tarea'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'tareas', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>




<div class="tareas form">
<?php echo $this->Form->create('Tarea'); ?>
	<fieldset>
		<legend><?php echo __('Datos Tarea'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('actividade_id', array('label'=>'Seleccionar Actividad: ','id' => "actividad_id"));
	
		echo $this->Form->input('conveniosparticulare_id');
		
	?>
	<script>
		$("#actividad_id").select2({
		placeholder: "Seleccione Comuna",
		width:'150px'	
		});
	</script>
	<h4>Descripción: </h4>
	<?php
		echo $this->Form->textarea('TareaDescripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar')); ?>

<br>
<br>
<br>
<br>
<br>
<br>





</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tarea.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tarea.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
