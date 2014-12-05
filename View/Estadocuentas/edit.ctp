<h3>Registrar Pago</h3>
<table>
<tr>
<td class="mitdLeft">
<dl>
		<dt><?php echo __('CUIT'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo h($estadocuenta['Empresa']['EmpresaCUIT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon Social'); ?></dt>
			<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($estadocuenta['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
		<dt><?php echo __('Fecha del convenio'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo date("d-m-Y",strtotime(($estadocuenta['Empresa']['ConvenioFecha']))); ?>
			&nbsp;
		</dd>
</dl>
</td>
</tr>
</table>
<div class="estadocuentas form">

<?php echo $this->Form->create('Estadocuenta'); ?>
	<fieldset>
		<legend><?php echo __('Datos del Pago'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->hidden('empresa_id');
		echo $this->Form->hidden('TipoMovimiento',array('value'=>"P",'default'=>"P"));
		//echo $this->Form->input('Periodo');
		//echo $this->Form->input('NroMovimiento');
		//echo $this->Form->input('TipoMovimiento');
		//echo $this->Form->input('Importe');
		//echo $this->Form->input();
		?>
		<dl>
		<table>
		<tr>
			<td class="mitdLeft">
			<dt><?php echo __('Importe: '); ?></dt>
		<dd>
			<?php echo "$".$estadocuenta['Estadocuenta']['Importe']?>
		
		</dd>
				
			</td>
</dl>
		</tr>
			<tr>
			<td class="mitdLeft">
				<?php 
		echo "Fecha de Pago: ".$this->Form->inputText('Fecha',array(		
			'dateFormat'=>'d-m-Y',
			'type'=>'date',
			'style'=>"width:130px;",
			'rule'=>'notEmpty',
			'required'

		));
			
	?>
			</td>
				<td class="mitd">
					
				</td>
			</tr>
		</table>
		
	</fieldset>
	
<?php echo $this->Form->end(__('Registrar')); ?>
<br>
<br>
<br>
