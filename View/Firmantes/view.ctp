<div class="firmantes view">

<h2>	<?php echo "Firmante" ?></h2>
<fieldset>

<legend><?php echo h($firmante['Empresa']['EmpresaRazonSocial']); ?></legend>
<dl>
<table cellspacing="2" >
<tr >
	<td class="mitdLeft">
		<dt><?php echo __('CUIL'); ?></dt>
		<dd><h3>
			<?php echo h($firmante['Firmante']['FirmanteCUIL']); ?>
			</h3>
		</dd>
		<br>
	</td>
<tr>
	<td class="mitdLeft">
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteNombre']); ?>
			
		</dd>

		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteTelefono']); ?>
			
		</dd>

		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteCorreo']); ?>
			
		</dd>

		<dt><?php echo __('Fecha de Baja'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteFechaBaja']); ?>
		
		</dd>
	</td>
	</td>
	<td class="mitdLeft">
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteApellido']); ?>
			
		</dd>

		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteDireccion']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteCargo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('DNI'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteDNI']); ?>
			&nbsp;
		</dd>
	</td>
</tr>
</table>		
</dl>
</fieldset>

</div>
<br>
<br>
<br>
<br>
<br>