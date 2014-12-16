<div class="actions" align="right">
    <br>
    <td>
        <?php echo $this->Html->link(__('<<Volver'), 
            array('controller' => 'competencias', 'action' => 'index')); ?>
    </td>
    <br>
</div>
<div class="competencias form">
    <?php echo $this->Form->create('Competencia');?>
        <fieldset>
            <legend><?php echo __('Agregar Competencia'); ?></legend>
            <table>
                <br>
                <tr><?php echo $this->Form->input('CompetenciaNombre',array('label' => 'Nombre'));?></tr>
                <br>
                <tr><?php echo $this->Form->input('area_id',array('label' => 'Area','id' => "area_id"));?></tr>
            </table>
            <script>
               $("#area_id").select2({
                placeholder: "Area",
                width:'250px'	
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
