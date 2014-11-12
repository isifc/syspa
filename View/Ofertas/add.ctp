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
            <legend><?php echo __('Agregar Oferta'); ?></legend>
            <br>
           <td><?php echo $this->Form->input('empresa_id');?></td>
            <br> 
            <td>
            	<?php 
                    echo "Vigencia desde: <b>(YYYY-MM-DD)</b> ".$this->Form->inputText('OfertaVigenciaDesde',array(
			'label' => 'OfertaVigenciaDesde',
			'class'=>'datepicker',
			'style'=>"width:76px;"
                                )
                            );
		?>
            </td>    
            <br>
            <br>
            <td>
                <?php 
                    echo "Vigencia hasta: <b>(YYYY-MM-DD)</b> ".$this->Form->inputText('OfertaVigenciaHasta',array(
			'label' => 'OfertaVigenciaHasta',
			'class'=>'datepicker',
			'style'=>"width:76px;"
                                )
                            );
		?>
            </td>
            <br>
            <br>
            <td><?php echo $this->Form->input('OfertaDescripcion',array('label' => 'Descripción','rows' => 3));?></td>
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
