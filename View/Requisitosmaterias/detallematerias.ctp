<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('controller' => 'ofertascarreras','action' => 'detallecarreras')); ?> </td>
</div>
<div class="requisitosmaterias index">
	<h3><?php echo __('Materias requeridas'); ?></h3>
    <br>
    <td valign="bottom" >
	<p align="right"> Agregar Materia
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Materia",'url' => 
                    array('controller' => 'requisitosmaterias','action' => 'addmateria',$OfertasCarrerasId)
		)
                    );
            ?>
	</p>
    </td>
        
	<table cellpadding="0" cellspacing="0">
            <hr>
	<thead>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('RequisitoMateriaCondicion'); ?></th>
			<th><?php echo __('ofertascarreras_id'); ?></th>
			<th><?php echo __('materia_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materias as $materia): ?>
	<tr>
		<td><?php echo h($materia['Requisitosmateria']['id']); ?>&nbsp;</td>
		<td><?php echo h($materia['Requisitosmateria']['RequisitoMateriaCondicion']); ?>&nbsp;</td>
                <td><?php echo h($materia['Requisitosmateria']['ofertascarreras_id']); ?>&nbsp;</td>
                <td><?php echo h($materia['Materia']['materia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materia['Requisitosmateria']['id']), array(), __('Are you sure you want to delete # %s?', $materia['Requisitosmateria']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
