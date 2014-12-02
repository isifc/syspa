<div class="adendas form">
<?php echo $this->Form->create('Adenda'); ?>
	<fieldset>
		<legend><?php echo __('Edit Adenda'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('FechaFirmaConvenioAnterior');
		echo $this->Form->input('AdendaDescripcion');
		echo $this->Form->input('AdendaArchivoAdjunto');
		echo $this->Form->input('NombreArtAnterior');
		echo $this->Form->input('NombreObraSocialAnterior');
		echo $this->Form->input('ImporteObraSocialAnterior');
		echo $this->Form->input('ImporteAsignacionEstimuloAnterior');
		echo $this->Form->input('TutorIdAnterior');
		echo $this->Form->input('FechaAltaObraSocialAnterior');
		echo $this->Form->input('PagaAsignacionEstimuloAnterior');
		echo $this->Form->input('FechaAltaARTAnterior');
		echo $this->Form->input('ImporteARTAnterior');
		echo $this->Form->input('conveniosparticulare_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Adenda.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Adenda.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Adendas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
