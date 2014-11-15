<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('controller' => 'ofertascarreras','action' => 'detallecarreras',$OfertaId)); ?> </td>
</div>
<div class="requisitosmaterias index">
    <dl>
        <dt>
            <?php echo __('Empresa')?>
        </dt>
        <dd>
            <h3><?php echo $oferta['Empresa']['EmpresaRazonSocial'];?> </h3>
        </dd>
        <dt><?php echo __('Oferta Pasantía') ?></dt>
        <dd>
            <strong><?php echo $oferta['Oferta']['OfertaDescripcion'] ;?></strong>
        </dd>
    </dl>
    <h4><?php echo __('Materias requeridas'); ?></h4>
    <td valign="bottom" >
	<p align="right"> Agregar Materia
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Materia",'url' => 
                    array('controller' => 'requisitosmaterias','action' => 'addmateria',$OfertaId,$OfertasCarrerasId)
		)
                    );
            ?>
	</p>
    </td>
    <table cellpadding="0" cellspacing="0">
    <hr>
        <thead>
            <tr>
                <th><?php echo __('Materia'); ?></th>
                <th><?php echo __('Condición'); ?></th>
                <th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
	</thead>
	<tbody>
            <?php foreach ($materias as $materia): ?>
                <tr>
                    <td><?php echo h($materia['Materia']['materia']); ?>&nbsp;</td>
                    <td><?php echo h($materia['Requisitosmateria']['RequisitoMateriaCondicion']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'borrarmateria',$OfertaId,$OfertasCarrerasId,$materia['Requisitosmateria']['id']), array(), __('Eliminar la materia?', $materia['Requisitosmateria']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
	</tbody>
    </table>
</div>
