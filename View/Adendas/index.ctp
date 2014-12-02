<div class="adendas index">
	<h2><?php echo __('Adendas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaFirmaConvenioAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('AdendaDescripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('AdendaArchivoAdjunto'); ?></th>
			<th><?php echo $this->Paginator->sort('NombreArtAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('NombreObraSocialAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('ImporteObraSocialAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('ImporteAsignacionEstimuloAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('TutorIdAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaAltaObraSocialAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('PagaAsignacionEstimuloAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaAltaARTAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('ImporteARTAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('conveniosparticulare_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($adendas as $adenda): ?>
	<tr>
		<td><?php echo h($adenda['Adenda']['id']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['FechaFirmaConvenioAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['AdendaDescripcion']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['AdendaArchivoAdjunto']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['NombreArtAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['NombreObraSocialAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['ImporteObraSocialAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['ImporteAsignacionEstimuloAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['TutorIdAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['FechaAltaObraSocialAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['PagaAsignacionEstimuloAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['FechaAltaARTAnterior']); ?>&nbsp;</td>
		<td><?php echo h($adenda['Adenda']['ImporteARTAnterior']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adenda['Conveniosparticulare']['id'], array('controller' => 'conveniosparticulares', 'action' => 'view', $adenda['Conveniosparticulare']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adenda['Adenda']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adenda['Adenda']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adenda['Adenda']['id']), array(), __('Are you sure you want to delete # %s?', $adenda['Adenda']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Adenda'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
