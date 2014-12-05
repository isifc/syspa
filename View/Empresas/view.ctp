<div class="empresas view">



<table>
	<tr>

		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'empresas', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>
<fieldset>
<legend> Datos de la empresa</legend>

<dl>
<table cellspacing="2" >
<tr class="mitr" >
	<td class="mitdLeft">
	<dt><?php echo __('CUIT: '); ?></dt>
		
		<dd> <h3>
			<?php echo 
			 h($empresa['Empresa']['EmpresaCUIT']); 
			?></h3>
			
		</dd>

		<dt><?php echo __('Localidad'); ?></dt>
		<dd>
			<?php echo h($empresa['Localidade']['nombre']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['EmpresaCorreo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['EmpresaActividad']); ?>
			&nbsp;
		</dd>
		
	</td>

	<td class="mitdLeft">
		
		<dt><?php echo __('Razon Social: '); ?></dt>
		<dd><h3>
			<?php echo h($empresa['Empresa']['EmpresaRazonSocial']); ?></h3>
		
		</dd>
		
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['EmpresaDireccion']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['EmpresaTelefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje Gasto'); ?></dt>
		<dd>
			<?php echo "%".h($empresa['Empresa']['PorcentajeGasto']); ?>
			&nbsp;
		</dd>
		
	</td>
</tr>
</table>		
</dl>

</fieldset>

<fieldset>
<legend>Datos del contacto</legend>
<dl>
<table cellspacing="2">
	
		<tr class="mitr">
			<td class="mitdLeft">
				<dt><?php echo __('Nombre: '); ?></dt>
				<dd>
					<?php echo h($empresa['Empresa']['ContactoNombre']); ?>
					&nbsp;
				</dd>
			</td>
			<td class="mitdLeft">
				<dt><?php echo __('Teléfono '); ?></dt>
				<dd>
				<?php echo h($empresa['Empresa']['ContactoTelefono']) ?>
				&nbsp;
				</dd>
			</td>
		</tr>
		<tr class="mitr">
			<td>
				<td class="mitdLeft">
				<dt><?php echo __('Correo: '); ?></dt>
				<dd>
					<?php echo h($empresa['Empresa']['ContactoCorreo']) ?>
					&nbsp;
				</dd>
			</td>
			</td>
		</tr>

</table>
</dl>
</fieldset>
<?php  // aca miro si tiene convenio o no ....
if (!is_null($empresa['Empresa']['ConvenioFecha'])){
?>


<fieldset>
<legend>Datos del Convenio Marco </legend>
<?php  // aca miro si tiene convenio o no ....
if (!is_null($empresa['Empresa']['ConvenioFechaBaja'])){
 ?><h3 class="rojo" align="center">Convenio no vigente</h3> <?php
}
?>
<br>
<dl>

<legend><small>Representante</small></legend>
<dl>
<table cellspacing="2">
	
		<tr class="mitr">
				
			<td class="mitdLeft">
				<dt><?php echo __('Nombre:'); ?></dt>
				<dd>
					<?php echo h($empresa['Empresa']['RepresentanteNombre']); ?>
					&nbsp;
				</dd>
			</td>
			<td class="mitdLeft">
				<dt><?php echo __('DNI: '); ?></dt>
				<dd>
				<?php echo h($empresa['Empresa']['RepresentanteDNI']); ?>
				&nbsp;
				</dd>
			</td>
		</tr>

</table>
<hr>
</dl>

<table >
	
		<tr cellspacing="3" class="mitr">
			<td class="mitdleft">
				<b><?php echo __('¿Paga Obra Social? '); ?></b>
					<?php
			if ($empresa['Empresa']['PagaObraSocial']== 1){
					
				echo "Si";
			}else{
				
				echo "No";
				} ?>
			</td>
			<td class="mitd">
				<b><?php echo __('¿Paga Seguro Trabajo? '); ?></b>
				<?php
				if ($empresa['Empresa']['PagaSeguroTrabajo']== 1){
					
					echo "Si";
				}else {
					 
					echo "No";
					} ?>
			</td>
			<td class="mitd">
				<b><?php echo __('¿Paga Asignacion Estimulo? '); ?></b>
		
			<?php if ($empresa['Empresa']['PagaAsignacionEstimulo']== 1){
					
					echo "Si";
				}else{
					
					echo "No";
					} ?>
			&nbsp;
			</td>
		</tr>
</table>
<br>

<table>
		<tr class="mitr">

			<td class="mitdLeft">
				<dt><?php echo __('Fecha de firma:'); ?></dt>
				<dd>
				<?php echo h($empresa['Empresa']['ConvenioFecha']); ?>
				&nbsp;
				</dd>
			</td>
			<td class="mitdLeft">
				<dt><?php echo __('Fecha de baja'); ?></dt>
					<dd>
					<?php echo h($empresa['Empresa']['ConvenioFechaBaja']); ?>
					&nbsp;
					</dd>
			</td>
			
		</tr>
</table>
<table>
		<tr class="mitr">
			<td class="mitdLeft">
				<dt><?php echo __('MotivoBaja'); ?></dt>
				<dd>
				<?php echo h($empresa['Empresa']['MotivoBaja']); ?>
				&nbsp;
				</dd>
			</td>
		</tr>
</table>

</dl>
<div class="related">
		
	<h3><?php echo __('Firmantes Asociados'); ?></h3>
	<?php if (!empty($empresa['Firmante'])){ ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr class="mitr">		
		<th><?php echo __('FirmanteCUIL'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('FirmanteCargo'); ?></th>
		<th><?php echo __('Teléfono'); ?></th>
		
	</tr>
	<?php foreach ($empresa['Firmante'] as $firmante): ?>
		<tr class="mitr">
			<td><?php echo $firmante['FirmanteCUIL']; ?></td>	
			<td><?php echo $firmante['FirmanteNombre']; ?></td>
			<td><?php echo $firmante['FirmanteApellido']; ?></td>		
			<td><?php echo $firmante['FirmanteCargo']; ?></td>
			<td><?php echo $firmante['FirmanteTelefono']; ?></td>
			
		</tr>
	<?php endforeach; ?>

	</table>
<?php }else{
	echo "No hay firmantes";
	} ?>

<br><br>
<div class="related">
	
	<div class="related">
	
	<h3><?php echo __('Anexos Asociados'); ?></h3>
		<?php if (empty($empresa['Anexos'])){ ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr class="mitr">
		<th><?php echo __('Fecha'); ?></th>		
		<th><?php echo __('CUIT'); ?></th>
		<th><?php echo __('Paga Asignacion Estimulo'); ?></th>
		<th><?php echo __('Paga obra social') ?></th>
		<th><?php echo __('Paga ART'); ?></th>
		<th><?php echo __('% gasto'); ?></th>

		
		
	</tr>
	<?php foreach ($empresa['Anexo'] as $anexo): ?>
		<tr class="mitr">
			<td><?php echo $anexo['ConvenioFechaAnterior']; ?>&nbsp;</td>
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
			

			
		</tr>
	<?php endforeach; ?>

	</table>
<?php }else{
	echo "Anexos";
	} ?>
</div>
</fieldset>

</div>
</fieldset>
<br>


<?php } ?>









<br>
<br>
<br>


	
	
</div>




