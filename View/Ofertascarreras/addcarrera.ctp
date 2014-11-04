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
        <?php
            echo "<br>";
            echo $this->Form->input('oferta_id',array('value'=>$OfertaId,'default'=>$OfertaId));
            echo "<br>";
            echo $this->Form->input('carrera_id');
            echo "<br>";
        ?>
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
