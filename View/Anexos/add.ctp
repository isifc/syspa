

<?php echo $this->Form->create('Anexo'); ?>
	
<div id="tabs">
  <ul>
    <p>Registrar un anexo</p>
    
  </ul>
  <div>
    <p>¿Desea Registrar un anexo?</p>
  </div>
 </div>
	<?php
		echo $this->Form->hidden('AnexoConvenioMarco');
		echo $this->Form->hidden('empresa_id',array('value'=>$empresa_id,'default'=>$empresa_id)); 
		echo $this->Form->hidden('EmpresaCUIT',array('value'=>$empresaCUIT,'default'=>$empresaCUIT));
		echo $this->Form->hidden('ConvenioFechaAnterior');//,array('value'=>$convenioFechaAnterior,'default'=>$convenioFechaAnterior));
		echo $this->Form->hidden('PorcentajeGastoAnterior',array('value'=>$porcentajeGastoAnterior,'default'=>$porcentajeGastoAnterior));
		echo $this->Form->hidden('PagaObraSocialAnterior',array('value'=>$pagaObraSocialAnterior,'default'=>$pagaObraSocialAnterior));
		echo $this->Form->hidden('PagaSeguroTrabajoAnterior',array('value'=>$pagaSeguroTrabajoAnterior,'default'=>$pagaSeguroTrabajoAnterior));
		echo $this->Form->hidden('PagaAsignacionAnterior');//,array('value'=>$pagaAsignacionAnterior,'default'=>$pagaAsignacionAnterior));
	?>
<?php echo $this->Form->button(__('SI')); ?>
<?php echo $this->Form->button("NO"); ?>
							 
</div>
 <script>
	$("button").button();
	
</script>
<script>
    $( "#tabs" ).tabs();
  </script>
<br>
<br>
<br>
<br>