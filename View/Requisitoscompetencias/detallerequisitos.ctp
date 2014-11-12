<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('controller' => 'ofertas','action' => 'index')); ?> </td>
</div>
<div class="ofertascarreras index">
    <h3><?php echo __('Requisitos para la oferta de pasantía'); ?></h3>
    <br>
    <td valign="bottom" >
	<p align="right"> Agregar Requisito
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Requisito",'url' => 
                    array('controller' => 'requisitoscompetencias','action' => 'addrequisitos',$OfertaId)
		)
                    );
            ?>
	</p>
    </td>
    
    <!--<td><?php echo $oferta['OfertaDescripcion']; ?></td>-->
    <table cellpadding="0" cellspacing="0">
	<thead>
            <tr>
 <!--               <th><?php echo __('id'); ?></th>
                <th><?php echo __('competencia_id'); ?></th>-->
                <th><?php echo __('Requisitos'); ?></th>
                <th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
	</thead>
	<tbody>
        <hr>
            <?php foreach ($requisitos as $requisito): ?>
            <tr>
		<!--<td><?php echo h($requisito['Requisitoscompetencia']['id']); ?>&nbsp;</td>
		<td><?php echo h($requisito['Requisitoscompetencia']['carrera_id']); ?>&nbsp</td>-->
                <td><?php echo h($requisito['Competencia']['competencianombre']); ?>&nbsp</td>
		<td class="actions">
                    <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'borrarrequisito',$requisito['Requisitoscompetencia']['id'],$OfertaId), array(), __('Eliminar este requisito de la oferta? ')); ?>
		</td>
            </tr>
            <?php endforeach; ?>
	</tbody>
    </table>