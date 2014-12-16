

<?php echo $this->Form->create('Anexo'); ?>
	
<div id="tabs">
  <ul>
    <p>Registrar un anexo</p>
    
  </ul>
  <div>
    <p>¿Desea Registrar un anexo?</p>
    <dl>
		
		<table>
		
		<tr>	
			<td class="mitdLeft">
					<dt><?php echo __('Fecha de convenio'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $convenioFechaAnterior; ?>
					&nbsp;
					
					
			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
				<dt><?php echo __('Porcentaje gasto'); ?></dt>
					<dd>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo "%".$porcentajeGastoAnterior; ?>
					&nbsp;
					</dd>				
			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
			<dt><?php echo __('¿Paga Seguro Trabajo?'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
			<dd>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php if ($pagaSeguroTrabajoAnterior== 1){
						echo "si";
						} else {
							echo "no";
							}?>
					&nbsp;
			</dd>		
					</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
					<dt> <?php echo __('¿Paga Obra Social? '); ?></dt>
					<dd>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<?php if ($pagaObraSocialAnterior== 1){
						echo "si";
						} else {
							echo "no";
							}?>
				
					</dd>
			</td>
		</tr>
		<tr class="mitdLeft">
			<td class="mitdLeft">
				<dt><?php echo __('¿Paga Asignacion Estimulo? '); ?></dt>
				<dd>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo "si"; ?>
				&nbsp;
				</dd>
			</td>
		</tr>

	</table>
	</dl>
  </div>
 </div>
	<?php
		echo $this->Form->hidden('AnexoConvenioMarco');
		echo $this->Form->hidden('empresa_id',array('value'=>$empresa_id,'default'=>$empresa_id)); 
		echo $this->Form->hidden('EmpresaCUIT',array('value'=>$empresaCUIT,'default'=>$empresaCUIT));
		echo $this->Form->hidden('ConvenioFechaAnterior',array('value'=>$convenioFechaAnterior,'default'=>$convenioFechaAnterior));
		echo $this->Form->hidden('PorcentajeGastoAnterior',array('value'=>$porcentajeGastoAnterior,'default'=>$porcentajeGastoAnterior));
		echo $this->Form->hidden('PagaObraSocialAnterior',array('value'=>$pagaObraSocialAnterior,'default'=>$pagaObraSocialAnterior));
		echo $this->Form->hidden('PagaSeguroTrabajoAnterior',array('value'=>$pagaSeguroTrabajoAnterior,'default'=>$pagaSeguroTrabajoAnterior));
		echo $this->Form->hidden('PagaAsignacionAnterior',array('value'=>$pagaAsignacionAnterior,'default'=>$pagaAsignacionAnterior));
?>
		
		
		

	
	<div class="submit" align="center">
         <?php echo $this->Form->Button(__('Si', true), array('name' => 'ok', 'div' => false)); ?>
         <?php echo $this->Form->Button(__('No', true), array('name' => 'cancel','div' => false)); ?>
     </div>
     </fieldset>                   
 <?php echo $this->Form->end();?>
<?php //echo $this->Form->button(__('SI')); ?>
<?php //echo $this->Form->button("NO"); ?>
							 
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