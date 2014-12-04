<div class="actions" align="right">
    <br>
    <td>
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'Ofertas', 'action' => 'index')); ?>
    </td>
</div>
<div class="ofertas form">
    <?php echo $this->Form->create('Oferta'); ?>
	<fieldset>
            <legend><?php echo __('Agregar Oferta de Pasantía'); ?></legend>
            <br>
           <td><?php echo $this->Form->input('empresa_id',array('label' => 'Empresa','id' => "empresa_id"));?></td>
            <script>
               $("#empresa_id").select2({
                placeholder: "Empresa",
                width:'250px'	
            });
        </script>

            <br> 
            <td>
            	<?php 
                    echo "Vigencia desde: ".$this->Form->inputText('OfertaVigenciaDesde',array(
			'id'=>'OfertaVigenciaDesde',
                        'dateFormat'=>'d-m-Y',
                        'class'=>'datepicker',
                        'style'=>"width:76px;",
                            )
                        );
		?>
                <Script> 
                    $("#OfertaVigenciaDesde").datepicker();
                </script>

            </td>    
            <br>
            <br>
            <td>
                <?php 
                    echo "Vigencia hasta: ".$this->Form->inputText('OfertaVigenciaHasta',array(
			'id' => 'OfertaVigenciaHasta',
                        'dateFormat' => 'd-m-Y',
			'class'=>'datepicker',
			'style'=>"width:76px;"
                                )
                            );
		?>
                <Script> 
                    $("#OfertaVigenciaHasta").datepicker();
                </script>

            </td>
            <br>
            <br>
            <td><?php echo $this->Form->input('OfertaDescripcion',array('label' => 'Descripción de la oferta','rows' => 3));?></td>
            <br>
 	</fieldset>
    <?php echo $this->Form->end(__('Registrar')); ?>
    <script>
        $(function() {
        $( "#datepicker" ).datepicker();
        });
    </script>

    <br>
    <br>
    <br>
    <br>
    <br>
</div>
