<div class="adendas form">
<?php echo $this->Form->create('Adenda'); ?>
<?php
		echo $this->Form->hidden('conveniosparticulare_id',array('value'=>$conveniosparticulare_id,'default'=>$conveniosparticulare_id));
		echo $this->Form->hidden('FechaFirmaConvenioAnterior',array('value'=>$fechaFirmaConvenio,'default'=>$fechaFirmaConvenio));
		//echo $this->Form->input('AdendaDescripcion');
		//echo $this->Form->input('AdendaArchivoAdjunto');
		echo $this->Form->hidden('NombreArtAnterior',array('value'=>$nombreArtAnterior,'default'=>$nombreArtAnterior));
		echo $this->Form->hidden('NombreObraSocialAnterior',array('value'=>$nombreObraSocialAnterior,'default'=>$nombreObraSocialAnterior));
		echo $this->Form->hidden('ImporteObraSocialAnterior',array('value'=>$importeObraSocialAnterior,'default'=>$importeObraSocialAnterior));
		echo $this->Form->hidden('ImporteAsignacionEstimuloAnterior',array('value'=>$importeAsignacionEstimuloAnterior,'default'=>$importeAsignacionEstimuloAnterior));
		echo $this->Form->hidden('TutorIdAnterior',array('value'=>$tutorIdAnterior,'default'=>$tutorIdAnterior));
		echo $this->Form->hidden('FechaAltaObraSocialAnterior',array('value'=>$fechaAltaObraSocialAnterior,'default'=>$fechaAltaObraSocialAnterior));
		echo $this->Form->hidden('PagaAsignacionEstimuloAnterior',array('value'=>$pagaAsignacionEstimuloAnterior,'default'=>$pagaAsignacionEstimuloAnterior));
		//echo $this->Form->input('FechaAltaARTAnterior',array('value'=>$fechaAltaARTAnterior,'default'=>$fechaAltaARTAnterior));
		echo $this->Form->hidden('ImporteARTAnterior',array('value'=>$importeARTAnterior,'default'=>$importeARTAnterior));
		
	?>

<div id="tabs">
  <ul>
    <p>Registrar una adenda</p>
    
  </ul>
  <div>
    <p>¿Desea Registrar una adenda?</p>
    <dl>
		
		<table>
		
		<tr>	
			<td class="mitdLeft">
					<dt><?php echo __('Fecha Firma Convenio'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $fechaFirmaConvenio; ?>
					&nbsp;
					</dd>
					
			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
						<dt><?php echo __('Nombre ART'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $nombreArtAnterior; ?>
					&nbsp;
					</dd>
	
			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
					<dt><?php echo __('Nombre Obra Social'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $nombreObraSocialAnterior; ?>
					&nbsp;
					</dd>

					</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
					<dt><?php echo __('Importe Obra Social'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $importeObraSocialAnterior; ?>
					&nbsp;
					</dd>

			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
				<dt><?php echo __('Importe Asignacion Estimulo'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $importeAsignacionEstimuloAnterior; ?>
					&nbsp;
					</dd>

			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
				<dt><?php echo __('Fecha Alta Obra Social'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $fechaAltaObraSocialAnterior; ?>
					&nbsp;
					</dd>

			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
				<dt><?php echo __('Paga Asignacion Estimulo'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $pagaAsignacionEstimuloAnterior; ?>
					&nbsp;
					</dd>

			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
				<dt><?php echo __('Importe ART'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $importeARTAnterior; ?>
					&nbsp;
					</dd>

			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
					<dt><?php echo __('Tutor'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $tutorIdAnterior; ?>
					&nbsp;
					</dd>

			</td>
		</tr>

	</table>
	</dl>
  </div>
 </div>
 <div class="submit" align="center">
         <?php echo $this->Form->Button(__('Si', true), array('name' => 'ok', 'div' => false)); ?>
         <?php echo $this->Form->Button(__('No', true), array('name' => 'cancel','div' => false)); ?>
     </div>
                      
 <?php echo $this->Form->end();?>

 <script>
	$("button").button();
	
</script>
<script>
    $( "#tabs" ).tabs();
  </script>

	
	
