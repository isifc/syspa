
						
						
<div class="conveniosparticulares form">

<?php echo $this->Form->create('Conveniosparticulare'); ?>

<h1><?php echo __('Nuevo Convenio'); ?></h1>
<br>



 
<div id="dialog" style="display:none;" title="Dialog Title">
<iframe frameborder="0" scrolling="no" width="700" height="700" src="http://localhost/syspa/alumnos/">
</iframe>
</div>

	
	


<table>

</table>

	
<br>	
	<fieldset>
		<legend><?php echo __('Datos Convenio particular'); ?></legend>
	<table>	
	<tr >
	
		 				
		 	<td class="mitd2">
		 				<?php 
		 						echo $this->Form->input('empresa_id', array('label'=>'Seleccionar Empresa','id' => "empresa_id"));
						?>
						<script>
						$("#empresa_id").select2({
							placeholder: "Seleccione Comuna",
							width:'150px'	
						});
						</script>
					&nbsp
						<?php
							echo $this->Form->input('tutore_id',array('id' => "tutor_id" ,'label'=>'Seleccionar Tutor')); 
						?>
						
						<script>
							$("#tutor_id").select2({
							placeholder: "Select a State",
							width:'170px'
							});
						</script>
					
		 				</td>
		 				<td class="mitd2" >
		 					<?php 
		 						echo $this->Form->input('alumno_id',array('label'=>'Seleccionar Alumno','id' => "alumno_id"));
		 					?>
							<script>
						$("#alumno_id").select2({
							placeholder: "Seleccionar alumno",
							width:'150px'
						});
						</script>
						
						&nbsp
						<?php 
		 						echo $this->Form->input('carrera_id',array('label'=>'Seleccionar Carrera','id' => "carrera_id"));
		 					?>
						<script>
									$("#carrera_id").select2({
									placeholder: "carrera_id",
									width:'150px'
									});
						</script>
						
						<!--	
						<button type="button" id="buscar" >Buscar</button>

						<script>
						$( "#buscar" ).click(function() {
						$( "#dialog" ).dialog( "open" );
						});
						$("#dialog").dialog({
							autoOpen: false,
							//position: 'center' ,
							title: 'EDIT',
							draggable: true,
							width : 800,
							height : 700,
							resizable : true,
							modal : true,
						});
						 
						</script>-->

						

		 				</td>		
			
						
	
	</tr>
		
	</tr>
		<tr>
			<td class="mitd">
				
				<?php 
				echo "Fecha de firma del convenio: <b>(YYYY-MM-DD)</b>".$this->Form->inputText('FechaFirmaConvenio',array(		
					'id'=>'fechaFirmaConvenio',
					'class'=>'datepicker',
					'style'=>"width:76px;",

					));
				?>
				<Script> 
					$("#fechaFirmaConvenio").datepicker();
				</script>
			</td>
			<td class="mitd">
				
				<?php 
				echo "Fecha de alta Obra Social: <b>(YYYY-MM-DD)</b>".$this->Form->inputText('FechaAltaObraSocial',array(		
					'id'=>'fechaAltaOS',
					'class'=>'datepicker',
					'style'=>"width:76px;",

					));
				?>
				<Script> 
					$("#fechaAltaOS").datepicker();
				</script>
				
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php 
				echo "Fecha de inicio: <b>(YYYY-MM-DD)</b>".$this->Form->inputText('FechaInicio',array(		
					'id'=>'fechainicio',
					'class'=>'datepicker',
					'style'=>"width:76px;",

					));
				?>
				<Script> 
					$("#fechainicio").datepicker();
				</script>
			</td>
			<td class="mitd">
				
					<?php 
				echo "Fecha de inicio: <b>(YYYY-MM-DD)</b>".$this->Form->inputText('FechaFin',array(		
					'id'=>'fechafin',
					'class'=>'datepicker',
					'style'=>"width:76px;",

					));
				?>
				<Script> 
					$("#fechafin").datepicker();
				</script>
			</td>
		</tr>
	    <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreObraSocial',array('label'=>'Obra social: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteObraSocial',array('label'=>'Importe obra social: ', 'style'=>"width:107px;"));?>
			</td>
		</tr>
		 <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreART',array('label'=>'ART: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteArt',array('label'=>'Importe ART: ', 'style'=>"width:107px;"));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('PagaAsignacionEstumulo',array('label'=>'Paga asignacion estimulo: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteAsignacionEstimulo',array('label'=>'Importe asignacion estimulo: ', 'style'=>"width:107px;"));?>
			</td>
		</tr>
			<tr>
			<td class="mitd2">
			<?php
				//echo $this->Form->input('EvaluacionAlumno'); VER DONDE LO PONGO
				
				//echo $this->Form->input('ArchivoCP'); VER PARA QUE ES ESTO
				
				echo $this->Form->input('oferta_id',array('id' => "oferta_id"));
		 	?>
						<script>
						$("#oferta_id").select2({
							placeholder: "Select a State",
							width:'150px'
						});
						</script>
						</td>
							
				<!--//echo $this->Form->input('empresa_id');
				//echo $this->Form->input('alumno_id');
				//echo $this->Form->input('carrera_id');-->
				
			
		</tr>
	</table>
	</fieldset>
<?php echo $this->Form->end(__('Registrar')); ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
