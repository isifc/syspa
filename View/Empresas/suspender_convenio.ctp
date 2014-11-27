
<table>
	<tr>
		<td class="mitdLeft"><h3>Ver Empresa</h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'empresas', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>
<?php echo $this->Form->create('Empresa'); ?>
<br>
<?php
					echo $this->Form->hidden('id');?>
<table>
<tr>
<td class="mitdLeft">
<dl>
		<dt><?php echo __('CUIT'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo h($empresa['Empresa']['EmpresaCUIT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon Social'); ?></dt>
			<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($empresa['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
		<dt><?php echo __('Fecha del convenio'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo h($empresa['Empresa']['ConvenioFecha']); ?>
			&nbsp;
		</dd>
</dl>
</td>
</tr>
</table>

<fieldset>
<legend>Suspención</legend>

<?php	
						echo "Fecha de baja: ".$this->Form->inputText('Empresa.ConvenioFechaBaja',array(
							'id'=>'fechaDeBaja',
							'dateFormat'=>'d-m-Y',
							'class'=>'datepicker',
							'style'=>"width:76px;",
							'rule' => 'notempty',
							)); 
  						?> 
  						<Script> 
							$("#fechaDeBaja").datepicker();
						</script>
	<h4>Motivo: </h4><?php
	echo $this->Form->textarea('MotivoBaja'); ?>
	
	
</fieldset>
<?php echo $this->Form->end('suspender');
	
?>
<br>
<br>
<br>
<br>
<br>
