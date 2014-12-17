
<table>
	<tr>
		<td class="mitdLeft"><h3><?php echo __('Editar Convenio Particular'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'conveniosparticulares', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>


<div class="conveniosparticulares form">
<?php echo $this->Form->create('Conveniosparticulare'); ?>


<div class="adendas form">
<?php /*echo $this->Form->create('Adenda'); ?>
	
	<?php
		echo $this->Form->input('Adenda.FechaFirmaConvenioAnterior');
		echo $this->Form->input('Adenda.AdendaDescripcion');
		echo $this->Form->input('Adenda.AdendaArchivoAdjunto');
		echo $this->Form->input('Adenda.NombreArtAnterior');
		echo $this->Form->input('Adenda.NombreObraSocialAnterior');
		echo $this->Form->input('Adenda.ImporteObraSocialAnterior');
		echo $this->Form->input('Adenda.ImporteAsignacionEstimuloAnterior');
		echo $this->Form->input('Adenda.TutorIdAnterior');
		echo $this->Form->input('Adenda.FechaAltaObraSocialAnterior');
		echo $this->Form->input('Adenda.PagaAsignacionEstimuloAnterior');
		echo $this->Form->input('Adenda.FechaAltaARTAnterior');
		echo $this->Form->input('Adenda.ImporteARTAnterior');
		echo $this->Form->input('Adenda.conveniosparticulare_id');
	?>
	
<?php echo $this->Form->end(__('Submit'));*/ ?>
</div>


<table>
<tr>
<td class="mitdLeft">
<dl>

		<dt><?php echo __('Empresa'); ?></dt>
			<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
		<dt><?php echo __('Legajo Alumno'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Alumno']['name'] /*." - ". h($conveniosparticulare['Alumno']['NroLegajo'])*/); ?>&nbsp;</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Carrera']['carrera']); ?>&nbsp;</dd>
	
</dl>
</td>
<td class="mitdLeft">
<dl>
	
		<!--<dt><?php echo __('Fecha del convenio'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaFirmaConvenio']); ?>
			&nbsp;
		</dd>-->
		</dl>
</td>

</table>






	<fieldset>
		<legend><?php echo __('Datos del Convenio Particular'); ?></legend>
	
	
						<div id="dialog" title="Lista de alumnos">
								<div class="alumnos index">
	

</div>
</div>




						
<table>	




</tr>

<tr>
	<td class="mitd">
		<?php
							echo $this->Form->input('tutore_id',array('id' => "tutor_id" ,'label'=>'Seleccionar Tutor: ')); 
						?>
						
						<script>
							$("#tutor_id").select2({
							placeholder: "Select a State",
							width:'170px'
							});
						</script>
	</td>
</tr>

		<tr>
			<td class="mitd">
			<?php 
				echo "Fecha de firma del convenio: ".$this->Form->inputText('FechaFirmaConvenio',array(		
					'type'=>'date',
					'dateFormat'=>'d-m-Y',				
					'style'=>"width:130px;",
					'required'
					));
				?>
				
			</td>
			<td class="mitd">
				
				<?php 
				echo "Fecha de alta Obra Social: ".$this->Form->inputText('FechaAltaObraSocial',array(		
					'type'=>'date',
					'dateFormat'=>'d-m-Y',				
					'style'=>"width:130px;",
					
					));
				?>
				
				
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php 
				echo "Fecha de inicio: ".$this->Form->inputText('FechaInicio',array(		
					'type'=>'date',
					'dateFormat'=>'d-m-Y',				
					'style'=>"width:130px;",
					'required'
					));
				?>
				
			</td>
			<td class="mitd">
				
					<?php 
				echo "Fecha de fin: ".$this->Form->inputText('FechaFin',array(		
					'type'=>'date',
					'dateFormat'=>'d-m-Y',				
					'style'=>"width:130px;",
					'required'
					));
				?>
				
			</td>
		</tr>
	    <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreObraSocial',array('label'=>'Obra social: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteObraSocial',array('label'=>'Importe obra social: ','min'=>0, 'max'=>9999));?>
			</td>
		</tr>
		 <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreART',array('label'=>'ART: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteArt',array('label'=>'Importe ART: ','min'=>0, 'max'=>9999));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<small>¿Paga asignacion estimulo?</small><?php echo $this->Form->checkbox('PagaAsignacionEstumulo'); ?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteAsignacionEstimulo',array('label'=>'Importe asignacion estimulo: ','min'=>0, 'max'=>9999));?>
			</td>
		</tr>
			
				
	</table>
	
	<?php
	
		echo $this->Form->hidden('id');
		
	?>
	</fieldset>



					
			<?php
			if ((!(is_null($conveniosparticulare['Conveniosparticulare']['EvaluacionAlumno'])))&&(!(empty($conveniosparticulare['Conveniosparticulare']['EvaluacionAlumno'])))) {
				?>
			<fieldset>
				<legend ><b>Experiencia del Alumno </b></legend>
				<table>
					<tr>
						<td class="mitd">

					<?php echo $this->Form->textarea('EvaluacionAlumno'); ?>
				

					</td>
			
			</tr>
			
		</table>
		</fieldset>	
	<?php  } ?>		
	
	 			




<?php echo $this->Form->end(__('Registrar')); ?>
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Conveniosparticulare.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Conveniosparticulare.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
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
