<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('action' => 'index')); ?> </td>
</div>
<div class="ofertas view">
    <br>
    <h3><?php echo __('Oferta'); ?></h3>
	<dl>
            <dt><?php echo __('Empresa'); ?></dt>
            <dd><?php echo h($oferta['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
            
            <dt><?php echo __('Vigencia Desde'); ?></dt>
            <dd><?php echo h($oferta['Oferta']['OfertaVigenciaDesde']); ?>&nbsp;</dd>
	
            <dt><?php echo __('Vigencia Hasta'); ?></dt>
            <dd><?php echo h($oferta['Oferta']['OfertaVigenciaHasta']); ?>&nbsp;</dd>
		
            <dt><?php echo __('Descripción'); ?></dt>
            <dd><?php echo h($oferta['Oferta']['OfertaDescripcion']); ?>&nbsp;</dd>
	</dl>
</div>
<hr>
<!--Ofertas-->
<table > 
    <!--<pre><?php print_r($carrera); ?></pre>-->
    
    <?php if (!empty($carreras)): ?>
    <table cellpadding = "0" cellspacing = "0" >
	<tr align="right">
            <th ><?php echo __('Carreras'); ?></th>
	</tr>
	<?php foreach ($carreras as $carrera): ?>
            <tr>
                <td class="tabla" align="right"><?php echo $carrera['Carrera']['carrera']; ?>
                    <table>
                        <tr>
                            <th>
                                <?php echo __('Materias');?>
                            </th>
                            <th>
                                <?php echo __('Condición');?>
                            </th>
                        </tr>
                        <?php foreach ($carrera['Requisitosmateria'] as $materia): ?>
                        <tr>
                            <td><?php echo $materia['materia_id'];?></td>
                            <td><?php echo $materia['RequisitoMateriaCondicion']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </td>
            </tr>
	<?php endforeach; ?>
    </table>
    <?php endif; ?>
</table>
<hr>
<div class="related">
    <?php if (!empty($requisitos)): ?>
    <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php echo __('Competencias'); ?></th>
        </tr>
        <?php foreach ($requisitos as $requisito): ?>
            <tr>
                <td><?php echo $requisito['Competencia']['competencianombre']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>

<!--
<div class="related">
	<h3><?php echo __('Related Postulaciones'); ?></h3>
	<?php if (!empty($oferta['Postulacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FechaPostulacion'); ?></th>
		<th><?php echo __('FechaSeleccion'); ?></th>
		<th><?php echo __('CumpleRequisitosAcademicos'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Oferta Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($oferta['Postulacione'] as $postulacione): ?>
		<tr>
			<td><?php echo $postulacione['id']; ?></td>
			<td><?php echo $postulacione['FechaPostulacion']; ?></td>
			<td><?php echo $postulacione['FechaSeleccion']; ?></td>
			<td><?php echo $postulacione['CumpleRequisitosAcademicos']; ?></td>
			<td><?php echo $postulacione['alumno_id']; ?></td>
			<td><?php echo $postulacione['oferta_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postulaciones', 'action' => 'view', $postulacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postulaciones', 'action' => 'edit', $postulacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postulaciones', 'action' => 'delete', $postulacione['id']), array(), __('Are you sure you want to delete # %s?', $postulacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->
