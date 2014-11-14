
<div class="empresas index">


	<h2><?php echo __('Empresas'); ?></h2>
	
	
		
	 
	<br>
	
	
	 <table>
		
	
	<tr bgcolor="D3DEF0">
	
		 	<td class="mitd"  >
		 					<?php 
		 						echo $this->Form->create('Empresa');
								echo $this->Form->input('CUIT');
		 					?>
		 				</td>
		 				<td class="mitd" >
		 					<?php 
		 						echo $this->Form->create('Empresa');
								echo $this->Form->input('RazonSocial');
		 					?>
		 				</td>
		 				<td class="mitd" >
		 					<?php  $sizes = array('v' => 'Vigente', 'n' => 'no Vigente', 'nt'=>'Sin Convenio','t' => 'todos');
							echo $this->Form->input(
    								'convenio vigente',
    								array('id'=>'sele','options' => $sizes, 'default' => 't')
							);
							
							?>
		 					
		 				</td>
		 				<script>
				$("#sele").select2({
							placeholder: "Seleccione Comuna",
							width:'105px'	
						});
				</script>
		 				<td class="mitd">
		 					<?php echo $this->Form->Button(__('Buscar'));
							  //echo $this->Form->end();
							  ?>
							  <script>
									$( "button" ).button();
							  </script>
		 				</td>		
			<td valign="bottom" bgcolor="white">
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
			<th><?php echo $this->Paginator->sort('RepresentanteNombre','Nombre del Representante');?></th>
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
		<td class="tabla">
			<?php 
				echo $empresa['Empresa']['EmpresaRazonSocial']; 
			?>
		</td>
		<td class="tabla">
			<?php 
				echo $empresa['Empresa']['RepresentanteNombre']; 
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
 
					 echo $this->html->image("mi_form/addFirmante.png", array(
			    		"alt" => "Editar", 'title' =>"Agregar Firmante",
			    		'url' => array('controller' => 'firmantes','action' => 'add',$empresa['Empresa']['id'])));
			    		   }?>
					<?php echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Editar", 'title' =>"Editar Empresa",
			    		'url' => array('controller' => 'empresas','action' => 'editar',$empresa['Empresa']['id']), array('class'=>'editar')
						)); ?>
				<?php if (is_null($empresa['Empresa']['ConvenioFechaBaja'])){

				echo $this->html->image("mi_form/suspendConvenio.png", array(
			    		"alt" => "Suspender", 'title' =>"Suspender Convenio Marco",
			    		'url' => array('controller' => 'empresas','action' => 'suspenderConvenio',$empresa['Empresa']['id']), array('class'=>'suspenderConvenio')
				)); }?>
				

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



