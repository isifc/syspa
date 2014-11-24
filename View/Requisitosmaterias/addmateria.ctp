<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<<Volver'), 
        array('controller' => 'Requisitosmaterias', 'action' => 'detallematerias',$OfertaId,$OfertasCarrerasId)); ?> 
    </td>
</div>
<div class="requisitosmaterias form">
    <?php echo $this->Form->create('Requisitosmateria'); ?>
	<fieldset>
            <legend><?php echo __('Agregar Materia'); ?></legend>
            <?php
                echo "<br>";
		echo $this->Form->hidden('ofertascarreras_id',array('value' => $OfertasCarrerasId,'default' => $OfertasCarrerasId));
		echo $this->Form->input('materia_id',array('label' => 'Materia','id' => 'materia_id'));
                echo "<br>";
                
                echo $this->Form->input('RequisitoMateriaCondicion', array(
                    'options' => array(1 => "Aprobada" ,
                                       2 => "Regularizada")
                    )
                );
                
            ?>
	</fieldset>
        <script>
            $("#materia_id").select2({
            placeholder: "Seleccione Comuna",
            width:'250px'	
            });
        </script>
    <?php echo $this->Form->end(__('Registrar')); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
