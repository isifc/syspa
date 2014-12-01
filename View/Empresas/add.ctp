<div class="empresas form">
<?php echo $this->Form->create('Empresa'); 


?>
<table>
	<tr>
		<td class="mitdLeft"><h3><?php echo __('Nueva Empresa'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'empresas', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>



<br>
	<fieldset >
		<legend><b>Datos de la empresa</b></legend>
		<table>
		<tr>
			<td class="mitd">
				<?php
					echo $this->Form->input('EmpresaCUIT',array('label'=>'CUIT: ', 'empty' => '4','style'=>"width:107px;"));?>
			</td>
			<td class="mitd">
				<?php
					echo $this->Form->input('EmpresaRazonSocial',array('label'=>'Razón Social: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
			<?php 

		 	echo $this->Form->input('localidade_id', array('label'=>'localidad','id' => "e7"));
					
			//echo $this->Form->input('id_localidade');?>
				<script>
				$("#e7").select2({
							placeholder: "Select report type",
							minimumInputLength: 3,
							width:'175px'	
						});
				</script>
				
				
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaDireccion',array('label'=>'Dirección: '));?>
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
					<?php echo $this->Form->input('EmpresaActividad',array('label'=>'Actividad: '));?>
			
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('PorcentajeGasto',array('label'=>'Porcentaje Gasto: (%)', 'default' =>5, 'min'=>0, 'max'=>5));?>
			</td>
			
		</tr>
		</table>

		</fieldset>
		<br>
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
		<br>
		<?php   ?>
		<fieldset>	
				<br>
		
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
				echo "Fecha del convenio: ".$this->Form->inputText('ConvenioFecha',array(
					
					'id'=>'fechaConvenio',
					'dateFormat'=>'d-m-Y',
					'class'=>'datepicker',
					'style'=>"width:76px;",

					));
				?>
				<script> 
					$("#fechaConvenio").datepicker();
				</script>
				

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
	</fieldset>




<?php echo $this->Form->end(__('Registrar')); ?>


		


		
<br>
<br>
<br>
<br>
<br>
</div>

