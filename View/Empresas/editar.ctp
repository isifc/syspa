<div class="empresas form">

 
	
	
<?php echo $this->Form->create('Empresa'); ?>
<?php
					echo $this->Form->hidden('id');


					
				?>
		
								
	<fieldset >
		<legend><b>Datos de la empresa</b></legend>
		<table>
		<tr>
			<td class="mitd">
				<?php
					echo $this->Form->input('Empresa.EmpresaCUIT',array('label'=>'CUIT: ', 'min'=>0, 'max'=>99999999999));?>
			</td>
			<td class="mitd">
				<?php
					echo $this->Form->input('EmpresaRazonSocial',array('label'=>'Razón Social: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaActividad',array('label'=>'Actividad: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaDireccion',array('label'=>'Direccion: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaCorreo',array('label'=>'Correo: ')); ?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaTelefono',array('label'=>'Teléfono: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('PorcentajeGasto',array('label'=>'Porcentaje Gasto: ', 'default' =>5, 'min'=>0, 'max'=>5));?>
			</td>
			
		</tr>
		</table>
		</fieldset>
		
		
		<fieldset>
		<legend ><b>Datos del contácto </b></legend>
		<table>
			<tr>
				<td class="mitd">
					<?php echo $this->Form->input('ContactoNombre',array('label'=>'Nombre: '));?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('ContactoTelefono',array('label'=>'Teléfono: '));?>
				</td>
			</tr>
			<tr>
				<td class="mitd">
					<?php ?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('ContactoCorreo',array('label'=>'Correo: '));?>
				</td>
			</tr>
		</table>
		</fieldset>	
		
		<?php   ?>
		<fieldset>	
	
	<table>
		<legend >Datos del Convenio Marco</legend>
			<tr>
				<td class="mitd">
					<?php echo $this->Form->input('RepresentanteNombre',array('label'=>'Representante Nombre: '));?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('RepresentanteDNI',array('label'=>' Representante DNI: ',  'style'=>"width:76px;"));?>
				</td>
			

			</tr>
			<tr>
				<td class="mitd">
				
				<?php 
				echo "Fecha de alta: <b>(YYYY-MM-DD)</b>".$this->Form->inputText('ConvenioFecha',array(
					
					'id'=>'fechaConvenio',
					'class'=>'datepicker',
					'style'=>"width:76px;",

					));
				?>
				<Script> 
					$("#fechaConvenio").datepicker();
				</script>
				
								
				</td>
				<td class="mitd">
				<?php if (!(is_null($empresa['Empresa']['ConvenioFechaBaja']))){
 						
						
						echo "Fecha de baja: <b>(YYYY-MM-DD)</b> ".$this->Form->inputText('ConvenioFechaBaja',array(
							'id'=>'fechaDeBaja',
							'class'=>'datepicker',
							'style'=>"width:76px;")); 
  						?> 
  						<Script> 
							$("#fechaDeBaja").datepicker();
						</script>
						<?php  
						}
						?>
				<?php 

				
				?>
				</td>				
			</tr>	
		</table>
		<table>
		<tr>	
						<td class="mitd">
							<small>¿Paga obra social?</small><?php echo $this->Form->checkbox('PagaObraSocial');?>
							
						</td>
						<td class="mitd">

							<small>¿Paga seguro de trabajo?</small><?php echo $this->Form->checkbox('PagaSeguroTrabajo');?>
							
						</td>

						<td class="mitd">
							<small>¿Paga ellos Asignacion estímilo?</small><?php echo $this->Form->checkbox('PagaAsignacionEstimulo');?>
						</td>	
				</tr>
				</table>
				<table>
					<tr>
						<td class="mitd">
							
						<?php if (!(is_null($empresa['Empresa']['ConvenioFechaBaja']))){
 						?><h4>Motivo de baja: </h4>	<?php
						echo $this->Form->textarea('MotivoBaja'); 
  						?> </p>
						<?php  
						}
						?>
						</td>
					</tr>
				</table>
				

	<h3><?php echo __('Firmantes Asociados'); ?></h3>
	<?php if (is_null($empresa['Empresa']['ConvenioFechaBaja'])){
 ?> <p align="right">Nuevo firmante <?php echo $this->html->image("mi_form/Add.png", array(
				    		"alt" => "Agregar Firmante", 'title' =>"Agregar Firmante",
				    		//'url' => array('controller' => 'firmantes','action' => 'add',$empresa['Empresa']['id'])
				    		'id'=>'RegistrarFirmante'
							)); ?> </p>
							
<?php  

}?>
<div class="related">
		
	
	<?php if (!empty($empresa['Firmante'])){ ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr class="mitr">		
		<th><?php echo __('CUIL'); ?></th>
		<th><?php echo __('Nombre y Apellido'); ?></th>
		<th><?php echo __('Teléfono') ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo "Acciones"; ?></th>
		
		
	</tr>
	<?php foreach ($empresa['Firmante'] as $firmante): ?>
		<tr class="mitr">
			<td><?php echo $firmante['FirmanteCUIL']; ?></td>	
			<td><?php echo $firmante['FirmanteNombre']; ?>&nbsp;
			<?php echo $firmante['FirmanteApellido']; ?></td>	
			<td><?php echo $firmante['FirmanteTelefono'] ?></td>	
			<td><?php echo $firmante['FirmanteCargo']; ?></td>
			<td class="tabla">
			
				<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Agregar",
			    		'title' =>"ver firmante",
			    		'url' => array('controller' => 'firmantes', 'action' => 'view', $firmante['id'])
						)); 

				echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Agregar",
			    		'title' =>"editar firmante",
			    		'url' => array('controller' => 'firmantes', 'action' => 'edit', $firmante['id'])
						)); 


					?>

			
		</tr>
	<?php endforeach; ?>

	</table>
<?php }else{
	echo "No hay firmantes";
	} ?>

<br><br>
<div class="related">
	
	<h3><?php echo __('Anexos Asociados'); ?></h3>
	<?php echo "no hay anexos"; ?>
</div>
</fieldset>

<br>
<br>
<br>
<br>








	<div class="anexos form">
	<?php echo $this->Form->create('Anexo');
	
	echo $this->Form->input('id');
	echo $this->Form->hidden('Anexo.empresa_id',array('value'=>$empresa_id,'default'=>$empresa_id));
	echo $this->Form->hidden('Anexo.EmpresaCUIT',array('value'=>($empresa['Empresa']['EmpresaCUIT']),'default'=>($empresa['Empresa']['EmpresaCUIT'])));
	echo $this->Form->hidden('Anexo.ConvenioFechaAnterior',array('value'=>($empresa['Empresa']['ConvenioFecha']),'default'=>($empresa['Empresa']['ConvenioFecha'])));
	echo $this->Form->hidden('Anexo.PorcentajeGastoAnterior',array('value'=>($empresa['Empresa']['PorcentajeGasto']),'default'=>($empresa['Empresa']['PorcentajeGasto'])));
	echo $this->Form->hidden('Anexo.PagaObraSocialAnterior',array('value'=>($empresa['Empresa']['PagaObraSocial']),'default'=>($empresa['Empresa']['PagaObraSocial'])));
	echo $this->Form->hidden('Anexo.PagaSeguroTrabajoAnterior',array('value'=>($empresa['Empresa']['PagaSeguroTrabajo']),'default'=>($empresa['Empresa']['PagaSeguroTrabajo'])));
	echo $this->Form->hidden('Anexo.PagaAsignacionEstimuloAnterior',array('value'=>($empresa['Empresa']['PagaAsignacionEstimulo']),'default'=>($empresa['Empresa']['PagaAsignacionEstimulo'])));
?>
</div>
<?php echo $this->Form->end(__('Registrar')); ?>
<br>
<br>
<br>
<br>
<br>
<div id="dialog" title="Registrar Firmante">
	<div class="firmantes form">
<?php echo $this->Form->create('Firmante'); ?>
	
	<br>
	<fieldset>
		<legend><?php echo __('Datos del Firmante'); ?></legend>
		<table>
		<?php //echo $this->Form->create('Firmante'); 


?>
		<tr>
			<td class="mitd">
				<?php
					echo $this->Form->input('Firmante.FirmanteCUIL',array('label'=>'CUIL: ','style'=>"width:107px;"));?>
			</td>
			<td class="mitd">
				<?php
					echo $this->Form->input('Firmante.FirmanteCargo',array('label'=>'Cargo: '));?>
					
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('Firmante.FirmanteNombre',array('label'=>'Nombre'));?>

				
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('Firmante.FirmanteApellido',array('label'=>'Apellido '));?>

			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('Firmante.FirmanteTelefono',array('label'=>'Teléfono'));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('Firmante.FirmanteDireccion',array('label'=>'Dirección '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('Firmante.FirmanteCorreo',array('label'=>'E-mail '));?>
			</td>
			<td class="mitd">
				
			</td>
		</tr>
		<tr>
			<td class="mitd">
			 	
			 	<?php echo $this->Form->hidden('empresa_id',array('value'=>$empresa_id,'default'=>$empresa_id)); ?>
			 	<?php echo $this->Form->input('Firmante.EmpresaCUIT',array('value'=>($empresa['Empresa']['EmpresaCUIT']),'default'=>($empresa['Empresa']['EmpresaCUIT']))); ?>
				
			</td>
		</tr>
		</table>

	</fieldset>
	<?php //echo $this->Form->button('Registrar', array('type'=>'button'));
	echo $this->Form->end(__('Registrar')); ?>



	</div>
</div>
 
<script>

var minWidth = $( ".selector" ).dialog( "option", "minWidth");
var maxWidth = $( ".selector" ).dialog( "option", "maxWidth" );
$( "#dialog" ).dialog({ autoOpen: false });
$( "#RegistrarFirmante" ).click(function() {
  $( "#dialog" ).dialog( "open")
  $("#dialog").dialog("option","minWidth",800,"maxWidth",900)
});
</script>