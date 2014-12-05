<div class="tutores index">
	<h1><?php echo __('Tutores'); ?></h1>
	
	
	<br>
	<table>
		
	
	
	<tr bgcolor="D3DEF0">
	
		 	<td class="mitd"  >
		 					<?php 
		 						echo $this->Form->create('Tutore');
								echo $this->Form->input('Cuil');
		 					?>
		 				</td>
		 				<td class="mitd" >
		 					<?php 
		 						echo $this->Form->create('Tutore');
								echo $this->Form->input('Tutor');
		 					?>
		 				</td>
		 				<td class="mitd" >
		 					<?php 
		 						echo $this->Form->create('Tutore');
								echo $this->Form->input('Cargo');
		 					?>
		 				</td>
		 				<td class="mitd">
		 					<?php echo $this->Form->Button(__('Buscar'));
							  //echo $this->Form->end();
							  ?>
							  <script>
									$( "button" ).button();
							  </script>
		 				</td>
						
						
						
						
			<td class = 'mitd' bgcolor="white">
			<p >Nuevo Tutor 
			<?php echo $this->html->image("mi_form/Add.png", array(
				    		'alt' => 'Agregar', 'title' =>"Agregar Tutor",
				    		'url' => array('controller' => 'tutores','action' => 'add')
							)); ?></p>

		    </td>
	

	</tr>
	</table>
	
	
	
	
	
	
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('CUIL'); ?></th>
			<th><?php echo $this->Paginator->sort('Apellido y Nombre'); ?></th>
			<!--<th><?php //echo $this->Paginator->sort('id'); ?></th>
			<th><?php //echo $this->Paginator->sort('DNI'); ?></th>-->
			<th><?php echo $this->Paginator->sort('Correo electronico'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('Cargo'); ?></th>
			
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tutores as $tutore): ?>
	<tr>
		<td><?php echo h($tutore['Tutore']['CUIL']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['ApellidoNombre']); ?>&nbsp;</td>
		<!--<td><?php //echo h($tutore['Tutore']['id']); ?>&nbsp;</td>
		<td><?php //echo h($tutore['Tutore']['DNI']); ?>&nbsp;</td>-->
		<td><?php echo h($tutore['Tutore']['TutorEmail']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['TutorTelefono']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['TutorCargo']); ?>&nbsp;</td>
		
		
				
		
		
		
		<td class="actions">
			<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Ver", 'title' =>"Ver Tutor",
			    		'url' => array('controller' => 'tutores','action' => 'view',$tutore['Tutore']['id']), array('class'=>'view')
						)); ?>
						
						
		<?php echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Editar", 'title' =>"Editar Tutor",
			    		'url' => array('controller' => 'tutores','action' => 'edit',$tutore['Tutore']['id']), array('class'=>'edit')
						)); ?>
						
			<!--<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tutore['Tutore']['id']), array(), __('Are you sure you want to delete # %s?', $tutore['Tutore']['id'])); ?>-->
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
</div>
<!--<div class="actions">
	<h3><?php// echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Tutore'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
