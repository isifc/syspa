<div class="actions" align="right">
    <tr>
        <td>
            <?php echo $this->Html->link(__('Volver a Ofertas'), array('controller' => 'ofertas','action' => 'index')); ?>
            <br>
            <br>
            <?php echo $this->Html->link(__('Ver Requisitos'), array('controller' => 'Requisitoscompetencias','action' => 'detallerequisitos',$OfertaId)); ?>
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
    <h4><?php echo __('Para las carreras de'); ?></h4>
    <td valign="bottom" >
	<p align="right"> Agregar Carrera
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Carrera",'url' => 
                    array('controller' => 'ofertascarreras','action' => 'addcarrera',$OfertaId)
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
                <th><?php echo __('carrera_id'); ?></th>-->
                <th><?php echo __('Carreras'); ?></th>
                <th><?php echo __('Acciones'); ?></th>
            </tr>
	</thead>
	<tbody>
        <hr>
            <?php foreach ($carreras as $carrera): ?>
            <tr>
		<!--<td><?php echo h($carrera['Ofertascarrera']['id']); ?>&nbsp;</td>
		<td><?php echo h($carrera['Ofertascarrera']['carrera_id']); ?>&nbsp</td>-->
                <td><?php echo h($carrera['Carrera']['carrera']); ?>&nbsp</td>
		<td>
                    <?php echo $this->Html->image("mi_form/materia.png",
                        array("alt" => "Agregar", 'title' => "Ver Materias", 'url' => 
                                array('controller' => 'Requisitosmaterias','action' => 'detallematerias',$OfertaId,$carrera['Ofertascarrera']['id']),
                                    array('class' => 'edit')
                                    )
                                );
                    ?>
                    <?php 
                        $imagendelete = $this->Html->image(
                           "mi_form/no.png", ///aqui se coloca el nombre del archivo de la imagen 
                            array(
                                 'alt'=>__('Eliminar'), 
                                 'title' => "Eliminar Carrera"
                            )
                        );            
                        echo $this->Form->postLink($imagendelete, 
                            array('action' => 'borrarcarrera',$carrera['Ofertascarrera']['id'],$OfertaId), 
                                array('escape' => false), __('Eliminar esta carrera de la oferta? ', $carrera['Carrera']['carrera'])); ?>
		</td>
            </tr>
            <?php endforeach; ?>
	</tbody>
    </table>