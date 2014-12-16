<table>
	<tr>
		<td class="mitdLeft">
		<h3><?php echo __('Tarea'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'tareas', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>
<table>


<div class="tareas view">

	<dl>
		
		
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tarea['Actividade']['ActividadDescripcion'], array('controller' => 'actividades', 'action' => 'view', $tarea['Actividade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Convenios'); ?></dt>
		<dd>
			<?php echo $this->Html->link(__('Ver Convenio'), array('controller' => 'conveniosparticulares', 'action' => 'view', $tarea['Conveniosparticulare']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['TareaDescripcion']); ?>
			&nbsp;
		</dd>
	</dl>
	
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
		<li><?php echo $this->Html->link(__('Edit Tarea'), array('action' => 'edit', $tarea['Tarea']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tarea'), array('action' => 'delete', $tarea['Tarea']['id']), array(), __('Are you sure you want to delete # %s?', $tarea['Tarea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
