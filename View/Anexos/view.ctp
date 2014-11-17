<div class="anexos view">
<fieldset>
<dl>
		<legend>Anexo</legend>
		<table>
		
		<tr>	
			<td class="mitdLeft">
					<dt><?php echo __('Empresa'); ?></dt>
					<dd>
					<?php echo $this->Html->link($anexo['Empresa']['EmpresaRazonSocial'], array('controller' => 'empresas', 'action' => 'view', $anexo['Empresa']['id'])); ?>
					&nbsp;
					</dd>
					<dt><?php echo __('Fecha de convenio'); ?></dt>
					<dd>
					<?php echo h($anexo['Anexo']['ConvenioFechaAnterior']); ?>
					&nbsp;
					
					
			</td>
			<td class="mitdLeft">
				<dt><?php echo __('Porcentaje gasto'); ?></dt>
					<dd>
					<?php echo "%".h($anexo['Anexo']['PorcentajeGastoAnterior']); ?>
					&nbsp;
					</dd>

				

				
			</td>
		</tr>
	</table>
	</dl>
		
		<table>
		<tr cellspacing="3" class="mitr">
		<td class="mitdleft">
					<b><?php echo __('¿Paga Seguro Trabajo? '); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					
					<?php if ($anexo['Anexo']['PagaSeguroTrabajoAnterior']== 1){
						echo "si";
						} else {
							echo "no";
							}?>
					&nbsp;
					</td>
		<td class="mitd">
		<b><?php echo __('¿Paga Obra Social? '); ?></b>
					
					<?php if ($anexo['Anexo']['PagaObraSocialAnterior']== 1){
						echo "si";
						} else {
							echo "no";
							}?>
					&nbsp;
					</td>
		<td class="mitd"><b><?php echo __('¿Paga Asignacion Estimulo? '); ?></b>
				
				<?php echo "Si"; ?>
				&nbsp;
			
		</td>
			
		</tr>
		</table>
	</fieldset>


</div>

</div>
<br>
<br>
<br>
<br>
<br>
