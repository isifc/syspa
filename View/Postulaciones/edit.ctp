<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('action' => 'index')); ?> </td>
</div>
<div class="postulaciones form">
<?php echo $this->Form->create('Postulacione'); ?>
    <fieldset>
        <legend><?php echo __('Editar Postulación'); ?></legend>
	<?php
            echo $this->Form->hidden('id');
            echo $this->Form->input('alumno_id',array('disabled' => true));
            echo "<br>";
            echo $this->Form->input('oferta_id',array('disabled' => true));
            echo "<br>";
                   
            echo "Fecha Postulación: ".$this->Form->inputText('FechaPostulacion',array(
                'type' => 'date',
                'dateFormat' => 'd-m-Y',
                'style' => "width:130px;",
                'disabled' => true
                )
            );
            echo "<br>";
            echo "<br>";
            echo "Fecha Selección".$this->Form->inputText('FechaSeleccion',array(
                'type' => 'date',
                'dateFormat' => 'd-m-Y',
                'style' => "width:130px;"
                )
            );
            echo $this->Form->hidden('CumpleRequisitosAcademicos');
	?>
    </fieldset>
<?php echo $this->Form->end(__('Registrar')); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
