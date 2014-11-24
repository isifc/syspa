<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<<Volver'), 
        array('controller' => 'Ofertascarreras', 'action' => 'detallecarreras',$OfertaId)); ?> 
    </td>
</div>
<div class="ofertascarreras form">
    <br>
    <?php echo $this->Form->create('Ofertascarrera'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Carrera'); ?></legend>
        <dl>
            <dt>
                <?php echo __('Empresa: ')?>  
            </dt>
            <dd>
                <h3><?php echo $oferta['Empresa']['EmpresaRazonSocial'];?></h3>
            </dd>
            <dt>
                <?php echo __('Oferta: ')?>  
            </dt>
            <dd>
                <strong><?php echo $oferta['Oferta']['OfertaDescripcion'];?></strong>
            </dd>
            
        </dl>    
        <?php
            echo $this->Form->hidden('oferta_id',array('value'=>$OfertaId,'default'=>$OfertaId));
            echo $this->Form->input('carrera_id', array('label'=>'Seleccione una Carrera','id' => "carrera_id"));
            echo "<br>";
        ?>
        <script>
            $("#carrera_id").select2({
                placeholder: "Seleccione Comuna",
                width:'300px'	
        });
        </script>
        
    </fieldset>
    <?php echo $this->Form->end(__('Registrar')); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<!--
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Ofertascarreras'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
    </ul>
</div>
-->
