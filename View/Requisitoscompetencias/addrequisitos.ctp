<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<<Volver'), 
        array('controller' => 'Requisitoscompetencias', 'action' => 'detallerequisitos',$OfertaId)); ?> 
    </td>
</div>
<div class="requisitoscompetencias form">
    <?php echo $this->Form->create('Requisitoscompetencia'); ?>
	<fieldset>
            <legend><?php echo __('Agregar Requisito'); ?></legend>
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
                echo $this->Form->hidden('oferta_id',array('value' => $OfertaId,'default' => $OfertaId));
                echo $this->Form->input('competencia_id',array('label'=>'Seleccione una Competencia','id' => "competencia_id"));
            ?>
            <script>
                $("#competencia_id").select2({
                    placeholder: "Seleccione una competencia",
                    width:'200px'	
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
