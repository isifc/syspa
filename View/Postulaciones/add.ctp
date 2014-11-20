<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<<Volver'), 
        array('controller' => 'postulaciones', 'action' => 'index')); ?> 
    </td>
</div>
<div class="postulaciones form">
    <?php echo $this->Form->create('Postulacione'); ?>
	<fieldset>
            <legend><?php echo __('Agregar Postulación'); ?></legend>
            <?php
                echo "<br>";
                echo $this->Form->hidden('oferta_id');
                echo "<br>";
                echo $this->Form->input('alumno_id',array('label'=>'Seleccione un Alumno','id' => "alumno_id"));
                echo "<br>";
		echo "Fecha Postulación: ".$this->Form->inputText('FechaPostulacion',array(
                    'id'=>'FechaPostulacion',
                    'dateFormat'=>'d-m-Y',
                    'class'=>'datepicker',
                    'style'=>"width:76px;",
                        )
                    );                
		echo "<br>";
                echo "<br>";
                echo "Fecha Selección: ".$this->Form->inputText('FechaSeleccion',array(
                    'id'=>'FechaSeleccion',	
                    'dateFormat' => 'd-m-Y',
                    'class'=>'datepicker',
                    'style'=>"width:76px;"
                                )
                            );
                echo "<br>";
                echo "<br>";
                echo "Cumple Requisitos Académicos ".$this->Form->checkbox('CumpleRequisitosAcademicos');
            ?>
	</fieldset>
        <Script> 
                $("#FechaPostulacion").datepicker();
                $("#FechaSeleccion").datepicker();
        </script>

        <script>
            $("#alumno_id").select2({
                placeholder: "Seleccione Comuna",
                width:'150px'	
        });
        </script>
    
    <?php echo $this->Form->end(__('Registrar')); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
