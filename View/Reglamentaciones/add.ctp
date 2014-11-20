<div class="reglamentaciones form">
<?php echo $this->Form->create('Reglamentacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Reglamentacione'); ?></legend>
	<?php
		echo $this->Form->input('RegDescripcion');
		echo $this->Form->input('RegFechaUltActualizacion');
		echo $this->Form->input('RegAdjunto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reglamentaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
