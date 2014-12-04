<div class="postulaciones form">
<?php echo $this->Form->create('Postulacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Postulacione'); ?></legend>
	<?php
		echo $this->Form->input('alumno_id',array('label' => 'Alumno','id' => "alumno_id"));
		echo $this->Form->input('oferta_id');
		echo $this->Form->input('FechaPostulacion');
		echo $this->Form->input('FechaSeleccion');
		echo $this->Form->input('CumpleRequisitosAcademicos');
	?>
	</fieldset>
        <script>
            $("#alumno_id").select2({
                placeHolder: 'Selecciona una localidad',
                minimumInputLength: 3,
                width:'300px'	
                }
            );
        </script>
   
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Postulaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
	</ul>
</div>
