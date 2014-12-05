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
		<td class="tabla"><?php echo $this->Acortar->recortar_texto($postulacione['Oferta']['Empresa']['EmpresaRazonSocial'],30); ?>&nbsp;</td>
		<td class="tabla"><?php echo $this->Acortar->recortar_texto($postulacione['Alumno']['name'],30);?></td>
		<td class="tabla"><?php echo $this->Acortar->recortar_texto($postulacione['Oferta']['OfertaDescripcion'],23);?></td>
		<td class="tabla"><?php echo date("d-m-Y",strtotime($postulacione['Postulacione']['FechaPostulacion'])); ?>&nbsp;</td>
		<td class="tabla"><?php echo date("d-m-Y",strtotime($postulacione['Postulacione']['FechaSeleccion'])); ?>&nbsp;</td>
		<!--<td><?php echo h($postulacione['Postulacione']['CumpleRequisitosAcademicos']); ?>&nbsp;</td>-->
		<td>
                    <?php echo $this->html->image("mi_form/view.png", 
                            array("alt" => "Ver", 'title' =>"Postulación",'url' => 
                                array('action' => 'view',$postulacione['Postulacione']['id']), 
                                    array('class'=>'view')
				)
                            ); 
                    ?>
                    <?php echo $this->html->image("mi_form/edit.png", 
                            array("alt" => "Editar", 'title' =>"Postulación",'url' => 
                                array('action' => 'edit',$postulacione['Postulacione']['id']), 
                                    array('class'=>'edit')
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
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
