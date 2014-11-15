<div class="competencias index">
    <br>
    <h3><?php echo __('Competencias'); ?></h3>
    <td valign="bottom" >
        <p align="right"> Nueva Competencia 
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Competencia",'url' => 
                    array('controller' => 'Competencias','action' => 'add')
                )
                            );
            ?>
        </p>
    </td>
    <table cellpadding="0" cellspacing="0">
	<thead>
            <tr>
		<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
		<th><?php echo $this->Paginator->sort('CompetenciaNombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Area'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
	</thead>
        <tbody>
            <?php foreach ($competencias as $competencia): ?>
            <tr>
		<!--<td class="tabla"><?php echo h($competencia['Competencia']['id']); ?>&nbsp;</td>-->
		<td class="tabla"><?php echo h($competencia['Competencia']['CompetenciaNombre']); ?>&nbsp;</td>
		<td class="tabla"><?php echo h($competencia['Area']['AreaDescripcion']); ?></td>
		<td class="tabla">
                    <?php echo $this->html->image("mi_form/view.png",
                            array("alt" => "Ver", 'title' => "Ver Competencia", 'url' => 
                                array('controller' => 'competencias','action' => 'view',$competencia['Competencia']['id']),
                                    array('class' => 'view')
                                    )
                                );
                    ?>
                    <?php echo $this->html->image("mi_form/edit.png",
                            array("alt" => "Editar", 'title' => "Editar Competencia", 'url' => 
                                array('controller' => 'competencias','action' => 'edit',$competencia['Competencia']['id']),
                                    array('class' => 'edit')
                                    )
                                );
                    ?>
                    <?php 
                        echo $this->Form->postLink(__('Eliminar'), 
                            array('action' => 'delete', $competencia['Competencia']['id']), 
                                array(), __('Esta seguro que desea eliminar esta competencia? ', $competencia['Competencia']['id'])); 
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
            ));
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
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitoscompetencias'), array('controller' => 'requisitoscompetencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('controller' => 'requisitoscompetencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->