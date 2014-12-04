<div class="postulaciones index">
    <!--<pre><?php print_r($postulaciones); ?></pre>-->
    <h2><?php echo __('Postulaciones'); ?></h2>
    <br>
    <table>
        <tr>
            <td class="mitd" bgcolor="D#DEF0">
                <?php
                    echo $this->Form->create('Postulacione');
                    echo $this->Form->input('Nombre');
                ?>
            </td>
            <td class="mitd" bgcolor="D#DEF0">
                <?php
                    echo $this->Form->create('Postulacione');
                    echo $this->Form->input('Oferta');
                ?>
            </td>
            <td class="mitd">
               <?php echo $this->Form->Button(__('Buscar'));?>
               <script>
                   $( "button" ).button();
               </script>
           </td>
           
           
        </tr>
    </table>    
	<table cellpadding="0" cellspacing="0">
	<thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Empresa'); ?></th>
                <th><?php echo $this->Paginator->sort('Alumno'); ?></th>
                <th><?php echo $this->Paginator->sort('Descripción Oferta'); ?></th>
                <th><?php echo $this->Paginator->sort('FechaPostulacion'); ?></th>
                <th><?php echo $this->Paginator->sort('FechaSeleccion'); ?></th>
                <!--<th><?php echo $this->Paginator->sort('CumpleRequisitosAcademicos'); ?></th>-->
                <th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
	</thead>
	<tbody>
            <?php foreach ($postulaciones as $postulacione): ?>
            <!--<pre><?php print_r($postulacione) ;?></pre>    -->
            <tr>
		<td><?php echo h($postulacione['Oferta']['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</td>
		<td><?php echo h($postulacione['Alumno']['name']);?></td>
		<td><?php echo $this->Acortar->recortar_texto($postulacione['Oferta']['OfertaDescripcion'],23);?></td>
		<td><?php echo h($postulacione['Postulacione']['FechaPostulacion']); ?>&nbsp;</td>
		<td><?php echo h($postulacione['Postulacione']['FechaSeleccion']); ?>&nbsp;</td>
		<!--<td><?php echo h($postulacione['Postulacione']['CumpleRequisitosAcademicos']); ?>&nbsp;</td>-->
		<td class="actions">
                    <?php echo $this->html->image("mi_form/view.png", 
                            array("alt" => "Ver", 'title' =>"Postulación",'url' => 
                                array('action' => 'view',$postulacione['Postulacione']['id']), 
                                    array('class'=>'view')
				)
                            ); 
                    ?>
                   <?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $postulacione['Postulacione']['id'])); ?>
                    <?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $postulacione['Postulacione']['id']), array(), __('Are you sure you want to delete # %s?', $postulacione['Postulacione']['id'])); ?>
		</td>
            </tr>
<?php endforeach; ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
