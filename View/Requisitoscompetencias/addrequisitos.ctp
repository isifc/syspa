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
            <?php
                echo $this->Form->input('oferta_id',array('value' => $OfertaId,'default' => $OfertaId));
                echo $this->Form->input('competencia_id');
            ?>
	</fieldset>
    <?php echo $this->Form->end(__('Registrar')); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
