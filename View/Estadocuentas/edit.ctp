<div class="estadocuentas form">
<?php echo $this->Form->create('Estadocuenta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estadocuenta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('empresa_id');
		echo $this->Form->input('Periodo');
		echo $this->Form->input('NroMovimiento');
		echo $this->Form->input('TipoMovimiento');
		echo $this->Form->input('Importe');
		echo $this->Form->input('Fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Estadocuenta.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Estadocuenta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estadocuentas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
