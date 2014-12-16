
<div class="empresas index">


	<h2><?php echo __('Empresas'); ?></h2>
	<br>
	 <table>
		
	
	<tr >
	
		 	<td class="mitd" bgcolor="D3DEF0" >
		 					<?php 
		 						echo $this->Form->create('Empresa');
								echo $this->Form->input('CUIT');
		 					?>
		 				</td>
		 				<td class="mitd" bgcolor="D3DEF0">
		 					<?php 
		 						echo $this->Form->create('Empresa');
								echo $this->Form->input('RazonSocial');
		 					?>
		 				</td>
		 				
		 				<script>
				$("#sele").select2({
							placeholder: "Seleccione Comuna",
							width:'105px'	
						});
				</script>
		 				<td class="mitd" bgcolor="D3DEF0">
		 					<?php echo $this->Form->Button(__('Buscar'));
							  //echo $this->Form->end();
							  ?>
							  <script>
									$( "button" ).button();
							  </script>
		 				</td>		
			<td valign="bottom">
			<p >Nueva Empresa 
			<?php echo $this->html->image("mi_form/Add.png", array(
				    		'alt' => 'Agregar', 'title' =>"Agregar Empresa",
				    		'url' => array('controller' => 'empresas','action' => 'add')
							)); ?></p>

		    </td>

	</tr>
	</table>
	
	<hr>
	<table cellpadding="0" cellspacing="0" >
	<thead>
	<tr >
			
			<th ><?php echo $this->Paginator->sort('EmpresaCUIT','CUIT'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpresaRazonSocial','Razon Social'); ?></th>		
			<th><?php echo $this->Paginator->sort('ContactoNombre','Nombre de Contacto');?></th>
			<th><?php echo $this->Paginator->sort('EmpresaCorreo','E-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpresaTelefono','Teléfono'); ?></th>
			
			
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empresas as $empresa): ?>
		
		<tr>
        <td class="tabla">
			<?php 
				echo $empresa['Empresa']['EmpresaCUIT']; 
			?>
		</td>
		<td class="nombre">
			<?php 
				echo $this->Acortar->recortar_texto($empresa['Empresa']['EmpresaRazonSocial'],23);
			?>
		</td>
		<td class="tabla">
			<?php 
				echo $this->Acortar->recortar_texto($empresa['Empresa']['ContactoNombre'],20); 
			?>
		</td>
		
		<td class="tabla">
			<?php 
				echo $empresa['Empresa']['EmpresaCorreo']; 
			?>
		</td>
		<td class="tabla">
			<?php 
				echo $empresa['Empresa']['EmpresaTelefono']; 
			?>
		</td>
		

		
		<td  class="tabla">
			
					<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Ver", 'title' =>"Ver Empresa",
			    		'url' => array('controller' => 'empresas','action' => 'view',$empresa['Empresa']['id']), array('class'=>'view')
						)); ?>
						<?php if (is_null($empresa['Empresa']['ConvenioFechaBaja'])){
 
					
			    		   }?>
					<?php echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Editar", 'title' =>"Editar Empresa",
			    		'url' => array('controller' => 'empresas','action' => 'editar',$empresa['Empresa']['id']), array('class'=>'editar')
						)); ?>

					<?php echo $this->html->image("mi_form/estadoCuenta2.png", array(
			    		"alt" => "Editar", 'title' =>"Estado de Cuenta",
			    		'url' => array('controller' => 'empresas','action' => 'estado_cuenta',$empresa['Empresa']['id']), array('class'=>'editar')
						)); ?>
					
					<?php	
						if (is_null($empresa['Empresa']['ConvenioFecha'])) {
							echo $this->html->image("mi_form/addFirmante.png",array('title'=>'no se puede ejecutar esta acción','style'=>"opacity:0.4"));
							echo $this->html->image("mi_form/suspendConvenio.png",array('title'=>'no se puede ejecutar esta acción','style'=>"opacity:0.4"));
						}else{


						if (is_null($empresa['Empresa']['ConvenioFechaBaja'])){

						echo $this->html->image("mi_form/addFirmante.png", array(
			    			"alt" => "Editar", 'title' =>"Firmantes",
			    			'url' => array('controller' => 'empresas','action' => 'add_firmante',$empresa['Empresa']['id']))); 
									
						echo $this->html->image("mi_form/suspendConvenio.png", array(
			    			"alt" => "Suspender", 'title' =>"Suspender Convenio Marco",
			    			'url' => array('controller' => 'empresas','action' => 'suspenderConvenio',$empresa['Empresa']['id']), array('class'=>'suspenderConvenio')
										));
								}else{
									
									echo $this->html->image("mi_form/addFirmante.png",array('title'=>'no se puede ejecutar esta acción','style'=>"opacity:0.4"));
									echo $this->html->image("mi_form/suspendConvenio.png",array('title'=>'no se puede ejecutar esta acción','style'=>"opacity:0.4"));
								}
 }
								 ?>
				       	  

		</td>
		
      
    </tr>

	<?php endforeach; ?>
	</tbody>
	</table>
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
	
</div>



