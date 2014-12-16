<div class="tareas index">
	<h2><?php echo __('Tareas'); ?></h2>
	
	
	 <table>
		
	
	<tr >
	
		 	<td class="mitd" bgcolor="D3DEF0" >
		 					<?php 
		 						echo $this->Form->create('Tarea');
								echo $this->Form->input('Actividad:');
		 					?>
		 				</td>
		 				<td class="mitd" bgcolor="D3DEF0">
		 					<?php 
		 						echo $this->Form->create('Tarea');
								echo $this->Form->input('Tarea:');
		 					?>
		 				</td>
		 		
		 				<td class="mitd" bgcolor="D3DEF0">
		 					<?php echo $this->Form->Button(__('Buscar'));
							  //echo $this->Form->end();
							  ?>
							  <script>
									$( "button" ).button();
							  </script>
		 				</td>		
			<td valign="bottom">
			<p >Nueva Tarea
			<?php echo $this->html->image("mi_form/Add.png", array(
				    		"alt" => "Agregar", 'title' =>"Agregar Tarea",
			    			'url' => array('controller' => 'tareas','action' => 'add'))); ?></p>

		    </td>

	</tr>
	</table>
	
	
	
	
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('Actividades'); ?></th>
			<th><?php echo $this->Paginator->sort('Convenios Particulares'); ?></th>
			<th><?php echo $this->Paginator->sort('Tarea'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	
	
	
	
	
	<tbody>
	<?php foreach ($tareas as $tarea): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($tarea['Actividade']['ActividadDescripcion'], array('controller' => 'actividades', 'action' => 'view', $tarea['Actividade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link(__('Ver Convenio'), array('controller' => 'conveniosparticulares', 'action' => 'view', $tarea['Conveniosparticulare']['id'])); ?>
		</td>
		<td><?php echo h($tarea['Tarea']['TareaDescripcion']); ?>&nbsp;</td>
		<td class="actions">
		<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Ver", 'title' =>"Ver Tarea",
			    		'url' => array('controller' => 'tareas','action' => 'view',$tarea['Tarea']['id']), array('class'=>'view')
						)); 
		?>
		
		<?php echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Editar", 'title' =>"Editar Tarea",
			    		'url' => array('controller' => 'tareas','action' => 'edit',$tarea['Tarea']['id']), array('class'=>'editar')
						)); 
		?>
			
			
			
		</td>
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
	
	
<br>
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
		<li><?php echo $this->Html->link(__('New Tarea'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
