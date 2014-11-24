<div class="actions" align="right">
    <tr>
        <td>
            <?php echo $this->Html->link(__('Volver a Ofertas'), array('controller' => 'ofertas','action' => 'index')); ?>
            <br>
            <br>
            <?php echo $this->Html->link(__('Ver Carreras'), array('controller' => 'OfertasCarreras','action' => 'detallecarreras',$OfertaId)); ?>
        </td>
    </tr>
</div>
<div class="ofertascarreras index">
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
    <h4><?php echo __('Requisitos para la oferta de pasantía'); ?></h4>
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
                    <?php 
                    
                        $imagendelete = $this->Html->image(
                           "mi_form/no.png", ///aqui se coloca el nombre del archivo de la imagen 
                            array(
                                 'alt'=>__('Eliminar'), 
                                 'title' => "Eliminar Requisito"
                            )
                        );            
                        echo $this->Form->postLink($imagendelete, 
                            array('action' => 'borrarrequisito',$requisito['Requisitoscompetencia']['id'],$OfertaId), 
                                array('escape' => false), __('Eliminar este requisito de la oferta? ')); 
                    ?>                    
		</td>
            </tr>
            <?php endforeach; ?>
	</tbody>
    </table>