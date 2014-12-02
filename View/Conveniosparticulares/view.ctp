<div align="right">
	<br>
	<td><?php echo $this->Html->link(__('<< Volver'), array('action' => 'index')); ?></td>
	<br>
</div>	
<div class="conveniosparticulares view">


<fieldset>
<legend> Datos del convenio particular</legend>

<dl>
<table cellspacing="2" >
<tr class="mitr" >


	<td class="mitdLeft">
	
	
	<dt><?php echo __('Empresa'); ?></dt>
		<dd><h3>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $this->Html->link($conveniosparticulare['Empresa']['EmpresaRazonSocial'], array('controller' => 'empresas', 'action' => 'view', $conveniosparticulare['Empresa']['id'])); ?>
			&nbsp;</h3>
		</dd>
			
		<dt><?php echo __('Tutor'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo $this->Html->link($conveniosparticulare['Tutore']['ApellidoNombre'], array('controller' => 'tutores', 'action' => 'view', $conveniosparticulare['Tutore']['id'])); ?>
			&nbsp;
		</dd>	

		<dt><?php echo __('Fecha Firma Convenio'); ?></dt>
		<dd>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaFirmaConvenio']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Fecha de Inicio'); ?></dt>
		 <dd>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaInicio']); ?>
			&nbsp;
		</dd>


			<dt><?php echo __('Nombre Obra Social'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['NombreObraSocial']); ?>
			&nbsp;
		</dd>

			<dt><?php echo __('Nombre ART'); ?></dt>
		<dd>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo h($conveniosparticulare['Conveniosparticulare']['NombreART']); ?>
			&nbsp;
		</dd>
			
		<dt><?php echo __('Paga Asignacion Estimulo'); ?></dt>
		<dd>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php 

			if ($conveniosparticulare['Conveniosparticulare']['PagaAsignacionEstimulo']==1) {
				echo "Si";
			}else{
				echo "No";
			}
?>
			&nbsp;
		</dd>
		

		
		
		<!--<dt><?php echo __('ArchivoCP'); ?></dt>
		<dd>
			<?php echo h($conveniosparticulare['Conveniosparticulare']['ArchivoCP']); ?>
			&nbsp;
		</dd> PODRIA SER UN LINK AL ARCHIVO-->
		
		
		<dt><?php echo __('Oferta'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo $this->Html->link($conveniosparticulare['Oferta']['OfertaDescripcion'], array('controller' => 'ofertas', 'action' => 'view', $conveniosparticulare['Oferta']['id'])); ?>
			&nbsp;
		</dd>
		
		
		
		
	</td>

	<td class="mitdLeft">
		<dt><?php echo __('Alumno'); ?></dt>
		<dd><h3>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo $this->Html->link($conveniosparticulare['Alumno']['name'], array('controller' => 'alumnos', 'action' => 'view', $conveniosparticulare['Alumno']['id'])); ?>
			&nbsp;</h3>
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo h($conveniosparticulare['Carrera']['carrera']); ?>
			&nbsp;
		</dd>

		 <dt><?php echo __('Fecha Alta Obra Social'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaAltaObraSocial']); ?>
			&nbsp;
		</dd>




		<dt><?php echo __('Fecha de Fin'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaFin']); ?>
			&nbsp;
		</dd>



			<dt><?php echo __('Importe Obra Social'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['ImporteObraSocial']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Importe ART'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['ImporteArt']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Importe Asignacion Estimulo'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['ImporteAsignacionEstimulo']); ?>
			&nbsp;
		</dd>
	
	



	</td>
</tr>



</table>		
</dl>
<div class="related">
	
	<h3><?php echo __('Adendas Asociadas'); ?></h3>
</div>
</fieldset>

<?php if (!is_null($conveniosparticulare['Conveniosparticulare']['FechaCancelacion'])) {
	
 ?>
<fieldset>

<legend>Cancelacion del convenio particular</legend>

<dl>
<table cellspacing="2" >
<tr class="mitr" >


	<td class="mitdLeft">





<dt><?php echo __('Fecha de Cancelacion'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaCancelacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motivo de Cancelacion'); ?></dt>
		<dd>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo h($conveniosparticulare['Conveniosparticulare']['MotivoCancelacion']); ?>
			&nbsp;
		</dd>
</td>
</tr>
</table>
</dl>
</fieldset>

<?php } ?>



</div>

<!--<div class="related">
	
	<h3><?php echo __('Tutor Asociado'); ?></h3>
	<?php if (is_null($conveniosparticulare['Conveniosparticulare']['FechaCancelacion'])){
	
 ?> <p align="right">Agregar tutor <?php echo $this->html->image("mi_form/Add.png", array(
							"alt" => "Agregar tutor", 'title' =>"Agregar Tutor",
							'url' => array('controller' => 'tutores','action' => 'add',$conveniosparticulare['Conveniosparticulare']['id'])
							)); ?> </p>
<?php  
}
?>
	 
		
	<hr>
	<?php if (!empty($conveniosparticulare['Tutore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr class="mitr">		
		<th><?php echo __('Apellido y Nombre'); ?></th>
		<th><?php echo __('Cargi'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($conveniosparticulare['Tutore'] as $tutor): ?>
		<tr class="mitr">
			<td><?php echo $tutor['ApellidoNombre']; ?></td>	
			<td><?php echo $tutor['TutorCargo']; ?></td>
			<td><?php echo $tutor['TutorTelefono']; ?></td>		
			<td><?php echo $tutor['TutorEmail']; ?></td>
			<td class="actions">

				<?php echo $this->html->image("mi_form/view.png", array(
						"alt" => "Agregar",
						'title' =>"ver tutor",
						'url' => array('controller' => 'tutores', 'action' => 'view', $tutor['id'])
						)); ?>
					
			</td>
		</tr>
	<?php endforeach; ?>

	</table>
	
<?php endif; ?>-->
<br><br>

</fieldset>
<br>





<br>
<br>
<br>


	
	
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conveniosparticulare'), array('action' => 'edit', $conveniosparticulare['Conveniosparticulare']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conveniosparticulare'), array('action' => 'delete', $conveniosparticulare['Conveniosparticulare']['id']), array(), __('Are you sure you want to delete # %s?', $conveniosparticulare['Conveniosparticulare']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutores'), array('controller' => 'tutores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutore'), array('controller' => 'tutores', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
