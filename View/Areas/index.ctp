<div class="areas index">
    <br>
    <h3><?php echo __('Areas'); ?></h3>
    <td valign="bottom" >
	<p align="right"> Nueva Area 
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Area",'url' => 
                    array('controller' => 'areas','action' => 'add')
		)
                    );
            ?>
	</p>
    </td>
    <table cellpadding="0" cellspacing="0">
        <hr>
	<thead>
            <tr>
		<!--<th><?php echo $this->Paginator->sort('id','Código'); ?></th>-->
		<th><?php echo $this->Paginator->sort('AreaDescripcion','Area'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
	</thead>
	<tbody>
            <?php foreach ($areas as $area): ?>
            <tr>
		<!--<td class="tabla"><?php echo h($area['Area']['id']);?></td>-->
		<td class="tabla"><?php echo h($area['Area']['AreaDescripcion']);?></td>
		<td class="tabla">
                    <?php 
			echo $this->html->image("mi_form/view.png",
                            array("alt" => "Ver", 'title' =>"Ver Area",'url' =>
				array('controller' => 'areas','action' => 'view',$area['Area']['id']), 
                                    array('class'=>'view')
                                )
                        ); 
                    ?>
                    <?php echo $this->html->image("mi_form/edit.png", 
			array("alt" => "Editar", 'title' =>"Editar Area",'url' => 
                            array('controller' => 'areas','action' => 'edit',$area['Area']['id']), 
                                array('class'=>'edit')
                            )
                        ); 
                    ?>			
                    <?php echo $this->Form->postLink(__('Delete'), 
                        array('action' => 'delete', $area['Area']['id']), 
                            array(), __('Está seguro que desea eliminar esta área?'
                                    )
                        ); 
                    ?>
		</td>
            </tr>
            <?php endforeach; ?>
	</tbody>
    </table>
    <p>
	<?php
            echo $this->Paginator->counter(
                array('format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}')
                )
                    );
	?>	
    </p>
    <div class="paging">
	<?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
    </div>
</div>
<!--
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
	<ul>
            <li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
