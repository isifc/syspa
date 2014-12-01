
<table>
	<tr>
		<td class="mitdLeft">
		<h2><small>	<?php echo __('Estado de Cuenta'); ?></small> </h2></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'empresas', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>
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
<table>
	<tr>
		<td class="mitd">
			<p >Nuevo Pago
			<?php echo $this->html->image("mi_form/Add.png", array(
				    		"alt" => "Editar", 'title' =>"Nuevo Estado",
			    			'url' => array('controller' => 'estadocuentas','action' => 'add',$empresa['Empresa']['id']))); ?></p>

	</td>
	</tr>
</table>
	

<div class="related">
		
	
	<?php if (!empty($empresa['Estadocuenta'])){ ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr class="mitr">		
		<th><?php echo __('Período'); ?></th>
		<th><?php  echo __('Importe');?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Estado') ?></th>
		<th><?php echo "Acciones"; ?></th>
		
		
	</tr>
	<?php foreach ($empresa['Estadocuenta'] as $estadocuenta): ?>
		<tr class="mitr">
			<td><?php echo $estadocuenta['Periodo']; ?></td>	
			
			<td><?php echo $estadocuenta['Importe'];?></td>
			<td>	<?php 
			if (!empty($estadocuenta['Fecha'])) {
				echo "Pagado";
			}?>

			<td><?php echo $estadocuenta['Fecha']; ?>&nbsp;</td>
			
			<td class="tabla">
			
				<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Agregar",
			    		'title' =>"ver estado de cuenta",
			    		'url' => array('controller' => 'estadocuentas', 'action' => 'view', $estadocuenta['id'])
						)); 

				echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Agregar",
			    		'title' =>"editar estado de cuenta",
			    		'url' => array('controller' => 'estadocuentas', 'action' => 'edit', $estadocuenta['id'])
						)); 


					?>

			
		</tr>
	<?php endforeach; ?>

	</table>
<?php }else{
	echo "No hay estado de cuentas";
	} ?>
<br><br>

