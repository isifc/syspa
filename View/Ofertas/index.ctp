
<div class="ofertas index">
    <br>
    <h2><?php echo __('Ofertas de Pasantías'); ?></h2>
    <br>
    <table>
    <tr>	
        <td class="mitd" bgcolor="D3DEF0">
            <?php 
                echo $this->Form->create('Oferta');
                echo $this->Form->input('Empresa');
            ?>
        </td>
        <script>
            $("#sele").select2({
                placeholder: "Seleccione Comuna",
                width:'105px'	
            });
        </script>
        <td class="mitd" bgcolor="D3DEF0">
            <?php 
                echo $this->Form->create('Oferta');
                echo $this->Form->input('Descripcion');
            ?>
        </td>
        <td valign="bottom" bgcolor="D3DEF0">
            <?php echo $this->Form->Button(__('Buscar'));?>
            <script>
                $( "button" ).button();
            </script>
	</td>		   
    <td valign="bottom">
	<p align="right"> Nueva Oferta 
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Oferta",'url' => 
                    array('controller' => 'ofertas','action' => 'add')
		)
                    );
            ?>
	</p>
    </td>
    </tr>
    </table>
    <hr>
    <table cellpadding="0" cellspacing="0">
    <thead>
	<tr>
        <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
        <th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
        <th><?php echo $this->Paginator->sort('OfertaDescripcion','Descripción de la Oferta'); ?></th>
        <th><?php echo $this->Paginator->sort('OfertaVigenciaDesde','Vigencia Desde'); ?></th>
        <th><?php echo $this->Paginator->sort('OfertaVigenciaHasta','Vigencia Hasta'); ?></th>        
        <th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
    </thead>
    <tbody>
	<?php foreach ($ofertas as $oferta): ?>
            <tr>
		<td class="tabla" align="right"><?php echo h($oferta['Empresa']['EmpresaRazonSocial']);?></td>
                <td class="tabla"><?php echo $this->Acortar->recortar_texto($oferta['Oferta']['OfertaDescripcion'],20); ?>&nbsp;</td>
                <td class="tabla"><?php echo date("d-m-Y",strtotime($oferta['Oferta']['OfertaVigenciaDesde'])); ?>&nbsp;</td>
                <td class="tabla"><?php echo date("d-m-Y",strtotime($oferta['Oferta']['OfertaVigenciaHasta'])); ?>&nbsp;</td>
		
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
                        echo $this->Form->postLink($this->html->image("mi_form/no.png"), 
                            array('action' => 'delete', $oferta['Oferta']['id']), 
                                array('escape' => false), __('Esta seguro que desea eliminar esta Oferta? ', $oferta['Oferta']['id'])); 
                    ?>

		</td>
	</tr>
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
