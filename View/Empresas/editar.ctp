<div class="empresas form">

 
	
	
<?php echo $this->Form->create('Empresa'); ?>
<?php
					echo $this->Form->hidden('id');


					
				?>
<div class="anexos form">
	<?php echo $this->Form->create('Anexo');
	
	echo $this->Form->hidden('id');
	echo $this->Form->hidden('Anexo.empresa_id',array('value'=>$empresa_id,'default'=>$empresa_id));

	echo $this->Form->hidden('Anexo.EmpresaCUIT',array('value'=>($empresa['Empresa']['EmpresaCUIT']),'default'=>($empresa['Empresa']['EmpresaCUIT'])));

	echo $this->Form->hidden('Anexo.ConvenioFechaAnterior',array('value'=>($empresa['Empresa']['ConvenioFecha']),'default'=>($empresa['Empresa']['ConvenioFecha'])));

	echo $this->Form->hidden('Anexo.PorcentajeGastoAnterior',array('value'=>($empresa['Empresa']['PorcentajeGasto']),'default'=>($empresa['Empresa']['PorcentajeGasto'])));

	echo $this->Form->hidden('Anexo.PagaObraSocialAnterior',array('value'=>($empresa['Empresa']['PagaObraSocial']),'default'=>($empresa['Empresa']['PagaObraSocial'])));

	echo $this->Form->hidden('Anexo.PagaSeguroTrabajoAnterior',array('value'=>($empresa['Empresa']['PagaSeguroTrabajo']),'default'=>($empresa['Empresa']['PagaSeguroTrabajo'])));

	echo $this->Form->hidden('Anexo.PagaAsignacionEstimuloAnterior',array('value'=>($empresa['Empresa']['PagaAsignacionEstimulo']),'default'=>($empresa['Empresa']['PagaAsignacionEstimulo'])));
?>
</div>
								
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
					echo $this->Form->input('Empresa.EmpresaRazonSocial',array('label'=>'Razón Social: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('Empresa.EmpresaActividad',array('label'=>'Actividad: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('Empresa.EmpresaDireccion',array('label'=>'Direccion: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('Empresa.EmpresaCorreo',array('label'=>'Correo: ')); ?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('Empresa.EmpresaTelefono',array('label'=>'Teléfono: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('Empresa.PorcentajeGasto',array('label'=>'Porcentaje Gasto: ', 'default' =>5, 'min'=>0, 'max'=>5));?>
			</td>
			
		</tr>
		</table>
		</fieldset>
		
		
		<fieldset>
		<legend ><b>Datos del contácto </b></legend>
		<table>
			<tr>
				<td class="mitd">
					<?php echo $this->Form->input('Empresa.ContactoNombre',array('label'=>'Nombre: '));?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('Empresa.ContactoTelefono',array('label'=>'Teléfono: '));?>
				</td>
			</tr>
			<tr>
				<td class="mitd">
					<?php ?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('Empresa.ContactoCorreo',array('label'=>'Correo: '));?>
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
					<?php echo $this->Form->input('Empresa.RepresentanteNombre',array('label'=>'Representante Nombre: '));?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('Empresa.RepresentanteDNI',array('label'=>' Representante DNI: ',  'style'=>"width:76px;"));?>
				</td>
			

			</tr>
			<tr>
				<td class="mitd">
				
				<?php 
				echo "Fecha de alta: <b>(YYYY-MM-DD)</b>".$this->Form->inputText('Empresa.ConvenioFecha',array(
					
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
 						
						
						echo "Fecha de baja: <b>(YYYY-MM-DD)</b> ".$this->Form->inputText('Empresa.ConvenioFechaBaja',array(
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
							<small>¿Paga obra social?</small><?php echo $this->Form->checkbox('Empresa.PagaObraSocial');?>
							
						</td>
						<td class="mitd">

							<small>¿Paga seguro de trabajo?</small><?php echo $this->Form->checkbox('Empresa.PagaSeguroTrabajo');?>
							
						</td>

						<td class="mitd">
							<small>¿Paga ellos Asignacion estímilo?</small><?php echo $this->Form->checkbox('Empresa.PagaAsignacionEstimulo');?>
						</td>	
				</tr>
				</table>
				<table>
					<tr>
						<td class="mitd">
							
						<?php if (!(is_null($empresa['Empresa']['ConvenioFechaBaja']))){
 						?><h4>Motivo de baja: </h4>	<?php
						echo $this->Form->textarea('Empresa.MotivoBaja'); 
  						?> </p>
						<?php  
						}
						?>
						</td>
					</tr>
				</table>
				

	<h3><?php echo __('Firmantes Asociados'); ?></h3>
	

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
		<?php if (empty($empresa['Anexos'])){ ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr class="mitr">		
		<th><?php echo __('CUIT'); ?></th>
		<th><?php echo __('Paga Asignacion Estimulo'); ?></th>
		<th><?php echo __('Paga obra social') ?></th>
		<th><?php echo __('Paga ART'); ?></th>
		<th><?php echo __('% gasto'); ?></th>

		<th><?php echo "Acciones"; ?></th>
		
		
	</tr>
	<?php foreach ($empresa['Anexo'] as $anexo): ?>
		<tr class="mitr">
			<td><?php echo $anexo['EmpresaCUIT']; ?>&nbsp;</td>
			<td><?php echo "si";//$anexo['PagaAsignacionEstimuloAnterior']""; ?>&nbsp;</td>
			<td><?php 

			if  ($anexo['PagaObraSocialAnterior'] ==1) {
				echo "si";
				}else{
					echo "no";
					}  ?>&nbsp;</td>
			<td><?php 
					if  ($anexo['PagaSeguroTrabajoAnterior'] ==1) {
				echo "si";
				}else{
					echo "no";
				}
				 ?>&nbsp;</td>
			<td><?php echo $anexo['PorcentajeGastoAnterior']; ?>&nbsp;</td>
			<td class="tabla">
			
				<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Agregar",
			    		'title' =>"ver Anexo",
			    		'url' => array('controller' => 'anexos', 'action' => 'view', $anexo['id']))
						); 

				
					?>

			
		</tr>
	<?php endforeach; ?>

	</table>
<?php }else{
	echo "Anexos";
	} ?>
</div>
</fieldset>

<br>
<br>
<br>
<br>




<?php echo $this->Form->end(__('Registrar')); ?>
<br>
<br>
<br>