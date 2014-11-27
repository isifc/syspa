

	
<table>
	<tr>
		<td class="mitdLeft"><h3><?php echo __('Suspender Convenio Particular'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'conveniosparticulares', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>
	

	

<?php echo $this->Form->create('Conveniosparticulare'); ?>
<br>
<?php
					echo $this->Form->hidden('id');?>
<table>
<tr>
<td class="mitdLeft">
<dl>
		<dt><?php echo __('Empresa'); ?></dt>
			<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
		<dt><?php echo __('Legajo alumno'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Alumno']['NroLegajo']); ?>&nbsp;</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Carrera']['carrera']); ?>&nbsp;</dd>
		<dt><?php echo __('Fecha del convenio'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaFirmaConvenio']); ?>
			&nbsp;
		</dd>
</dl>
</td>
</tr>
</table>

<fieldset>
<legend>Suspención</legend>

<?php 
				echo "Fecha de firma del convenio:".$this->Form->inputText('FechaCancelacion',array(		
					'id'=>'fechaFirmaConvenio',
					'dateFormat'=>'d-m-Y',
					'class'=>'datepicker',
					'style'=>"width:76px;",
					'rule'=>"notEmpty",
					));
	?>
				<Script> 
					$("#fechaFirmaConvenio").datepicker();
				</script>
			
			<h4>Motivo: </h4>	
			<?php
	echo $this->Form->textarea('MotivoCancelacion');
	 ?>
	<!--echo $this->Form->input('FechaCancelacion',array('label'=>'Fecha de baja'));
	<h4>Motivo: </h4>	<?php
	echo $this->Form->textarea('MotivoCancelacion');
	 ?>-->
	
	
</fieldset>
<?php echo $this->Form->end('suspender');
	
?>
<br>
<br>
<br>
<br>
<br>
