
<table>
	<tr>
		<td class="mitdLeft">
		<h3><?php echo __('Firmantes Asociados'); ?></h3></td>
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
			<p >Nuevo Firmante
			<?php echo $this->html->image("mi_form/Add.png", array(
				    		"alt" => "Editar", 'title' =>"Agregar Firmante",
			    			'url' => array('controller' => 'firmantes','action' => 'add',$empresa['Empresa']['id']))); ?></p>

	</td>
	</tr>
</table>
	

<div class="related">
		
	
	<?php if (!empty($empresa['Firmante'])){ ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr class="mitr">		
		<th><?php echo __('CUIL'); ?></th>
		<th><?php echo __('Nombre y Apellido'); ?></th>
		<th><?php echo __('Teléfono') ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo "Acciones"; ?></th>
		
		
	</tr>
	<?php foreach ($empresa['Firmante'] as $firmante): ?>
		<tr class="mitr">
			<td><?php echo $firmante['FirmanteCUIL']; ?></td>	
			<td><?php echo $firmante['FirmanteNombre']; ?>&nbsp;
			<?php echo $firmante['FirmanteApellido']; ?></td>	
			<td><?php echo $firmante['FirmanteTelefono'] ?></td>	
			<td><?php echo $firmante['FirmanteCargo']; ?></td>
			<td class="tabla">
			
				<?php echo $this->html->image("mi_form/view.png", array(
			    		"alt" => "Agregar",
			    		'title' =>"ver firmante",
			    		'url' => array('controller' => 'firmantes', 'action' => 'view', $firmante['id'])
						)); 

				echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Agregar",
			    		'title' =>"editar firmante",
			    		'url' => array('controller' => 'firmantes', 'action' => 'edit', $firmante['id'])
						)); 


					?>

			
		</tr>
	<?php endforeach; ?>

	</table>
<?php }else{
	echo "No hay firmantes";
	} ?>
<br><br>

