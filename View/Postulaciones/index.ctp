<div class="postulaciones index">
    <h3><?php echo __('Postulaciones'); ?></h3>
     <td valign="bottom" >
	<p align="right"> Nueva Postualción 
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Postulación",'url' => 
                    array('controller' => 'postulaciones','action' => 'add')
		)
                    );
            ?>
	</p>
    </td>
    <hr>    
    <table cellpadding="0" cellspacing="0">
	<thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Oferta Descripción'); ?></th>
                <th><?php echo $this->Paginator->sort('Alumno'); ?></th>
                <th><?php echo $this->Paginator->sort('FechaPostulacion'); ?></th>
                <th><?php echo $this->Paginator->sort('FechaSeleccion'); ?></th>
                <th><?php echo $this->Paginator->sort('CumpleRequisitosAcademicos'); ?></th>
                <th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
	</thead>
	<tbody>
            <?php foreach ($postulaciones as $postulacione): ?>
                <tr>
                    <td><?php echo h($postulacione['Oferta']['OfertaDescripcion']); ?>&nbsp;</td>
                    <td><?php echo h($postulacione['Alumno']['name']); ?>&nbsp;</td>
                    <td><?php echo h($postulacione['Postulacione']['FechaPostulacion']); ?>&nbsp;</td>
                    <td><?php echo h($postulacione['Postulacione']['FechaSeleccion']); ?>&nbsp;</td>
                    <td><?php echo h($postulacione['Postulacione']['CumpleRequisitosAcademicos']); ?>&nbsp;</td>
                    <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $postulacione['Postulacione']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $postulacione['Postulacione']['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $postulacione['Postulacione']['id']), array(), __('Are you sure you want to delete # %s?', $postulacione['Postulacione']['id'])); ?>
                    </td>
                </tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Postulacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
	</ul>
</div>
