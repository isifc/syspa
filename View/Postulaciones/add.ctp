<div class="actions" align="right">
    <br>
    <td>
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'Postulaciones', 'action' => 'index')); ?>
    </td>
</div>
<div class="postulaciones form">
<?php echo $this->Form->create('Postulacione'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Postulación'); ?></legend>
        <table>
            <tr> 
                <td class="mitdLeft">
        	<?php
                    echo $this->Form->input('alumno_id',array('label' => 'Alumno','id' => "alumno_id"));
                ?>
            </td>
            </tr>
            <tr>
            <td class="mitdLeft">
                <?php 
                    echo $this->Form->input('oferta_id',array('id' => "oferta_id", 'label'=>"Seleccionar Oferta: "));    
                ?>
            </td>
            </tr>
            <tr>
                <td class="mitdLeft">
                            <?php
                    echo "Fecha Postulación: ".$this->Form->inputText('FechaPostulacion',array(
			'type'=>'date',
                        'value' => null,
                        'dateFormat'=>'d-m-Y',
                        'style'=>"width:130px;",
                            ));
                                ?>
                </td>
            </tr>
        </table>
	</fieldset>
        <script>
            $("#alumno_id").select2({
                placeHolder: 'Selecciona un Alumno',
                minimumInputLength: 3,
                width:'300px'	
                }
            );
            $("#oferta_id").select2({
                placeHolder: 'Selecciona una oferta',
                width:'300px'	
                }
            );
    
        </script>
   
<?php echo $this->Form->end(__('Registrar')); ?>
        <br>
        <br>
        <br>
        <br>
        <br>
</div>
