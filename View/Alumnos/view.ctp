


<table>
	<tr>
		<td class="mitdLeft">
		<h3><?php echo __('Alumno'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'conveniosparticulares', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>



<div class="alumnos view">

	<dl>
	<table>
	
	<tr>
		<td class="mitdLeft">
		<dt><?php echo __('NroLegajo'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['NroLegajo']); ?>
			&nbsp;
		</dd>
		</td>
		</tr>
		<tr>
		<td class="mitdLeft">
		<dt><?php echo __('Apellido Nombre'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Nombre']); ?>
			&nbsp;
		</dd>
		</td>
		</tr>
		<tr>
		
		</tr>
		<td class="mitdLeft">
		<dt><?php echo __('FechaNacimiento'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['FechaNacimiento']); ?>
			&nbsp;
		</dd>
		</td>
		<tr>
		<td class="mitdLeft">
		<dt><?php echo __('DNI'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['DNI']); ?>
			&nbsp;
		</dd>
		</td>
		</tr>
		<td class="mitdLeft">
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Direccion']); ?>
			&nbsp;
		</dd>
		</td>
		<tr>
		<td class="mitdLeft">
		<dt><?php echo __('E-mail'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['CorreoElectronico']); ?>
			&nbsp;
		</dd>
		</td>
		</tr>
		<tr>
		<td class="mitdLeft">
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Telefono']); ?>
			&nbsp;
		</dd>
		</td>
		</tr>
		<tr>
		<td class="mitdLeft">
		<dt><?php echo __('Suscripcion'); ?></dt>
		<dd>
			<?php 
			if ((h($alumno['Alumno']['Suscripcion'])) == 1){
				echo __('SI');
			}else{
				echo __('NO');
			}
			; ?>
			&nbsp;
		</dd>
		</td>
		</tr>
		
		<tr>
		<td class="mitdLeft">
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($alumno['Carrera']['carrera']); ?>
		
			&nbsp;
		</dd>
		</td>
		</tr>
		</table>
	</dl>
</div>

<br>

<div class="related">
	<h3><?php echo __('Pasantias realizadas'); ?></h3>
	<?php if (!empty($alumno['Conveniosparticulare'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empresa'); ?></th>
		<th><?php echo __('Fecha de Inicio'); ?></th>
		<th><?php echo __('Fecha de Fin'); ?></th>
		<th><?php echo __('Fecha Firma de Convenio'); ?></th>	
		<th><?php echo __('Oferta'); ?></th>
		
		
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	
	<!--<pre><?php print_r($alumno)?></pre>-->
	<?php foreach ($alumno['Conveniosparticulare'] as $conveniosparticulare): ?>
		<tr>
			<td><?php echo $conveniosparticulare['Empresa']['EmpresaRazonSocial']; ?></td>
			<td><?php echo $conveniosparticulare['FechaInicio']; ?></td>
			<td><?php echo $conveniosparticulare['FechaFin']; ?></td>
			<td><?php echo $conveniosparticulare['FechaFirmaConvenio']; ?></td>
			<td><?php echo $conveniosparticulare['Oferta']['OfertaDescripcion']; ?></td>
			
			
			<td class="actions">
				<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Ver", 'title' =>"Ver Convenio",
			    		'url' => array('controller' => 'conveniosparticulares','action' => 'view',$conveniosparticulare['id']), array('class'=>'view')
						)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Postulaciones'); ?></h3>
	<?php if (!empty($alumno['Postulacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('FechaPostulacion'); ?></th>
		<th><?php echo __('FechaSeleccion'); ?></th>
		<th><?php echo __('CumpleRequisitosAcademicos'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Oferta Id'); ?></th>
		
	</tr>
	<?php foreach ($alumno['Postulacione'] as $postulacione): ?>
		<tr>
			
			<td><?php echo $postulacione['FechaPostulacion']; ?></td>
			<td><?php echo $postulacione['FechaSeleccion']; ?></td>
			<td><?php echo $postulacione['CumpleRequisitosAcademicos']; ?></td>
			<td><?php echo $postulacione['Alumno']['Nombre']; ?></td>
			<td><?php echo $postulacione['Oferta']['OfertaDescripcion']; ?></td>
			}
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
