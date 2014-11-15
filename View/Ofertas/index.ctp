<div class="ofertas index">
    <br>
    <h3><?php echo __('Ofertas de Pasantías'); ?></h3>
    <br>
     <td valign="bottom" >
	<p align="right"> Nueva Oferta 
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Oferta",'url' => 
                    array('controller' => 'ofertas','action' => 'add')
		)
                    );
            ?>
	</p>
    </td>
    <hr>
    <table cellpadding="0" cellspacing="0">
    <thead>
	<tr>
        <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
        <th><?php echo $this->Paginator->sort('OfertaVigenciaDesde','Vigencia Desde'); ?></th>
        <th><?php echo $this->Paginator->sort('OfertaVigenciaHasta','Vigencia Hasta'); ?></th>
        <th><?php echo $this->Paginator->sort('OfertaDescripcion','Descripción'); ?></th>
        <th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
        <th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
    </thead>
    <tbody>
	<?php foreach ($ofertas as $oferta): ?>
            <tr>
        <?php if(($oferta['Oferta']['id'])!=1) {?>
		<!--<td class="tabla"><?php echo h($oferta['Oferta']['id']); ?>&nbsp;</td>-->
		<td class="tabla"><?php echo h($oferta['Oferta']['OfertaVigenciaDesde']); ?>&nbsp;</td>
		<td class="tabla"><?php echo h($oferta['Oferta']['OfertaVigenciaHasta']); ?>&nbsp;</td>
		<td class="tabla"><?php echo h($oferta['Oferta']['OfertaDescripcion']); ?>&nbsp;</td>
		<td class="tabla"><?php echo h($oferta['Empresa']['EmpresaRazonSocial']);?></td>
		<td class="tabla">
                    <?php echo $this->html->image("mi_form/carreras.png", 
                            array("alt" => "Ver", 'title' =>"Carreras",'url' => 
                                array('controller' => 'Ofertascarreras','action' => 'detallecarreras',$oferta['Oferta']['id']), 
                                    array('class'=>'view')
				)
                            ); 
                    ?>
                    <?php echo $this->html->image("mi_form/requisitos.png", 
                            array("alt" => "Ver", 'title' =>"Requisitos",'url' => 
                                array('controller' => 'Requisitoscompetencias','action' => 'detallerequisitos',$oferta['Oferta']['id']), 
                                    array('class'=>'view')
				)
                            ); 
                    ?>                                      
                    <?php echo $this->html->image("mi_form/view.png", 
                            array("alt" => "Ver", 'title' =>"Ver Oferta",'url' => 
                                array('controller' => 'ofertas','action' => 'view',$oferta['Oferta']['id']), 
                                    array('class'=>'view')
				)
                            ); 
                    ?>
                    <?php echo $this->html->image("mi_form/edit.png", 
                            array("alt" => "Editar", 'title' =>"Editar Oferta",'url' => 
                                array('controller' => 'ofertas','action' => 'edit',$oferta['Oferta']['id']), 
                                    array('class'=>'edit')
				)
                            ); 
                    ?>
 
                    <?php 
                        echo $this->Form->postLink(__('Eliminar'), 
                            array('action' => 'delete', $oferta['Oferta']['id']), 
                                array(), __('Esta seguro que desea eliminar esta Oferta? ', $oferta['Oferta']['id'])); 
                    ?>

		</td>
	</tr>
    <?php } ?>
<?php endforeach;
?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>	
            <li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Ofertascarrera'), array('controller' => 'ofertascarreras', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Postulaciones'), array('controller' => 'postulaciones', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Requisitoscompetencias'), array('controller' => 'requisitoscompetencias', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('controller' => 'requisitoscompetencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
