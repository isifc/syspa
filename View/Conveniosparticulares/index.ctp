<div class="conveniosparticulares index">

	<h1><?php echo __('Convenios Particulares'); ?></h1>
	
	
	
	<br>
	<table>
		
	
	
	<tr bgcolor="D3DEF0">
	
		 	<td class="mitd"  >
		 					<?php 
		 						echo $this->Form->create('Conveniosparticulare');
								echo $this->Form->input('Empresa');
		 					?>
		 				</td>
		 				<td class="mitd" >
		 					<?php 
		 						echo $this->Form->create('Conveniosparticulare');
								echo $this->Form->input('Alumno');
		 					?>
		 				</td>
		 				<td class="mitd" >
		 					<?php 
		 						echo $this->Form->create('Conveniosparticulare');
								echo $this->Form->input('Carrera');
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
			<p >Nuevo Convenio 
			<?php echo $this->html->image("mi_form/Add.png", array(
				    		'alt' => 'Agregar', 'title' =>"Agregar Convenio",
				    		'url' => array('controller' => 'conveniosparticulares','action' => 'add')
							)); ?></p>

		    </td>
	

	</tr>
	</table>
	
	
	
	
	
	
	
	
	
	
	
	<hr>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('FechaInicio','Fecha de inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaFin', 'Fecha de fin'); ?></th>
		
		
			<th><?php echo $this->Paginator->sort('Empresa'); ?></th>
			
			
			<th><?php echo $this->Paginator->sort('Alumno'); ?></th>
			<th><?php echo $this->Paginator->sort('Carrera'); ?></th>
			
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	
	</thead>
	<tbody>
	<?php foreach ($conveniosparticulares as $conveniosparticulare): ?>
	<tr>
	
		<td><?php echo h($conveniosparticulare['Conveniosparticulare']['FechaInicio']); ?>&nbsp;</td>
		<td><?php echo h($conveniosparticulare['Conveniosparticulare']['FechaFin']); ?>&nbsp;</td>
		<td><?php echo $this->Acortar->recortar_texto($conveniosparticulare['Empresa']['EmpresaRazonSocial'],23); ?>&nbsp;</td>
		<td><?php echo $this->Acortar->recortar_texto($conveniosparticulare['Alumno']['Apellido'],23); ?>&nbsp;   
		<td><?php echo $this->Acortar->recortar_texto($conveniosparticulare['Carrera']['carrera'],23); ?>&nbsp;</td>
		
		<td  class="tabla">
			
					<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Ver", 'title' =>"Ver Convenio",
			    		'url' => array('controller' => 'conveniosparticulares','action' => 'view',$conveniosparticulare['Conveniosparticulare']['id']), array('class'=>'view')
						)); ?>
					
				
					<?php 
						/*if (is_null($conveniosparticulare['Conveniosparticulare']['tutore_id'])){
							 echo $this->html->image("mi_form/addFirmante.png", array(
			    		"alt" => "Ver", 'title' =>"Agregar tutor",
			    		'url' => array('controller' => 'tutores','action' => 'add',$conveniosparticulare['Conveniosparticulare']['id']), array('class'=>'view')
						)); 	
							}else{
									 echo $this->html->image("mi_form/addFirmante.png", array(
			    		"alt" => "Ver", 'title' =>"No se puede ejecutar la acción","style"=>"opacity:0.4"));
							 }*/
					 ?>
					<?php echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Editar", 'title' =>"Editar Convenio",
			    		'url' => array('controller' => 'conveniosparticulares','action' => 'edit',$conveniosparticulare['Conveniosparticulare']['id']), array('class'=>'edit')
						)); ?>
					<?php 
					if(is_null($conveniosparticulare['Conveniosparticulare']['FechaCancelacion'])){
					echo $this->html->image("mi_form/suspendConvenio.png", array(
			    		"alt" => "Suspender", 'title' =>"Suspender Convenio",
			    		'url' => array('controller' => 'conveniosparticulares','action' => 'suspenderConvenio',$conveniosparticulare['Conveniosparticulare']['id']), array('class'=>'suspenderConvenio')
						)); 
						}else{echo $this->html->image("mi_form/suspendConvenio.png", array(
			    		"alt" => "Suspender", 'title' =>"No se puede ejecutar la acción","style"=>"opacity:0.4"));
						}
						?>
					<?php 
					if(!is_null($conveniosparticulare['Conveniosparticulare']['FechaCancelacion'])){
						echo $this->html->image("mi_form/addConvenio.png", array(
			    			"alt" => "Agregar", 'title' =>"Agregar Experiencia del Alumno",
			    			'url' => array('controller' => 'conveniosparticulares','action' => 'experiencia',$conveniosparticulare['Conveniosparticulare']['id']), array('class'=>'edit')
						));
							}else{echo $this->html->image("mi_form/addConvenio.png", array(
			    			"alt" => "Agregar", 'title' =>"No se puede ejecutar la acción","style"=>"opacity:0.4"));
						}
						?>
					<?php 
					echo $this->html->image("mi_form/tarea.png", array(
			    		"alt" => "Tarea", 'title' =>"Agregar Tarea",
			    		'url' => array('controller' => 'tareas','action' => 'add',$conveniosparticulare['Conveniosparticulare']['id']), array('class'=>'edit')
						)); 
						
						
						?>
					

		</td>
<!-- 
		<td>
			<?php echo $this->Html->link($conveniosparticulare['Oferta']['id'], array('controller' => 'ofertas', 'action' => 'view', $conveniosparticulare['Oferta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($conveniosparticulare['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $conveniosparticulare['Empresa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($conveniosparticulare['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $conveniosparticulare['Alumno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($conveniosparticulare['Carrera']['id'], array('controller' => 'carreras', 'action' => 'view', $conveniosparticulare['Carrera']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($conveniosparticulare['Tutore']['id'], array('controller' => 'tutores', 'action' => 'view', $conveniosparticulare['Tutore']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $conveniosparticulare['Conveniosparticulare']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $conveniosparticulare['Conveniosparticulare']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $conveniosparticulare['Conveniosparticulare']['id']), array(), __('Are you sure you want to delete # %s?', $conveniosparticulare['Conveniosparticulare']['id'])); ?>
		</td>-->
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>

<br>
<br>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutores'), array('controller' => 'tutores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutore'), array('controller' => 'tutores', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->

<br>
<br>
<?php
	echo $this->Paginator->counter(array(
	'format' => __('pagina {:page} de {:pages}, mostrando {:current} de {:count} total, comenzando del registro {:start}, finalizando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separador' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
