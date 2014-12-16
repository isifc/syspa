<table>
	<tr>
		<td class="mitdLeft"><h3><?php echo __('Nuevo Convenio'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'conveniosparticulares', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>

<?php echo $this->Form->create('Conveniosparticulare'); ?>





 
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
	
		 				
		 	<td class="mitd">
		 				<?php 
		 						echo $this->Form->input('empresa_id', array('label'=>'Seleccionar Empresa: ','id' => "empresa_id"));
						?>
						<script>
						$("#empresa_id").select2({
							placeholder: "Seleccione Comuna",
							width:'150px'	
						});
						</script>
					&nbsp
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
		 				<td class="mitd" >
		 					<?php 
		 						echo $this->Form->input('alumno_id',array('label'=>'Seleccionar Alumno: ','id' => "alumno_id"));
		 					?>
							<script>
						$("#alumno_id").select2({
							placeholder: "Seleccionar alumno",
							width:'150px',
							minimumInputLength: 3
						});
						</script>
						
						&nbsp
						<?php 
		 						echo $this->Form->input('carrera_id',array('label'=>'Seleccionar Carrera: ','id' => "carrera_id"));
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
					'style'=>"width:130px;"
					

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
				<?php echo $this->Form->input('ImporteObraSocial',array('label'=>'Importe obra social: ', 'style'=>"width:107px;",'value'=>0,'default'=>0,'required'));?>
			</td>
		</tr>
		 <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreART',array('label'=>'ART: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteArt',array('label'=>'Importe ART: ', 'style'=>"width:107px;",'value'=>0,'default'=>0));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<small>¿Paga asignacion estimulo?</small><?php echo $this->Form->checkbox('PagaAsignacionEstumulo'); ?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteAsignacionEstimulo',array('label'=>'Importe asignacion estimulo: ', 'style'=>"width:107px;",'value'=>0,'default'=>0));?>
			</td>
		</tr>
			<tr>
			<td class="mitd">
			<?php
				//echo $this->Form->input('EvaluacionAlumno'); VER DONDE LO PONGO
				
				//echo $this->Form->input('ArchivoCP'); VER PARA QUE ES ESTO
				
				echo $this->Form->input('oferta_id',array('id' => "oferta_id", 'label'=>"Seleccionar Oferta: ",'default'=>10));
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
