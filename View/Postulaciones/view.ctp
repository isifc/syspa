<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('action' => 'index')); ?> </td>
</div>
<div class="postulaciones view">
    <h2><?php echo __('Postulación'); ?></h2>
    <dl>
        <dt><?php echo __('Alumno'); ?></dt>
        <dd>
            <?php echo h($postulacione['Alumno']['name']); ?>
            &nbsp;
	</dd>
        <dt> <?php echo __('Teléfono')?></dt>
        <dd>
            <?php 
                echo h($postulacione['Alumno']['Telefono']);
            ?>
            &nbsp;
        </dd>
        <dt> <?php echo __('E-mail') ?></dt>
        <dd>
            <?php 
                echo h($postulacione['Alumno']['CorreoElectronico'])
            ?>
            &nbsp;
        </dd>
        <dt> <?php echo __('Carrera') ?></dt>
        <dd> <?php echo h($postulacione['Alumno']['Carrera']['carrera']) ?>&nbsp;</dd>
        <dt><?php echo __('Oferta de pasantía'); ?></dt>
        <dd>
            <?php echo h($postulacione['Oferta']['OfertaDescripcion']); ?>
            &nbsp;
	</dd>
        <dt> <?php echo __('Empresa')?></dt>
        <dd>
            <?php echo h($postulacione['Oferta']['Empresa']['EmpresaRazonSocial'])?>
        </dd>
	<dt><?php echo __('Fecha Postulación'); ?></dt>
        <dd>
            <?php echo date("d-m-Y",strtotime($postulacione['Postulacione']['FechaPostulacion'])); ?>
            &nbsp;
	</dd>
	<dt><?php echo __('Fecha Selección'); ?></dt>
	<dd>
            <?php if (is_null($postulacione['Postulacione']['FechaSeleccion'])) {
                echo "";
            } else {
                echo date("d-m-Y",strtotime($postulacione['Postulacione']['FechaSeleccion']));
            }            
            ;?>
            &nbsp;
	</dd>
        
    </dl>
    <!--<pre><?php print_r($postulacione) ?></pre>-->
</div>
