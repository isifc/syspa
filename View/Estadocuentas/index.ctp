<div class="estadocuentas index">
	<h2><?php echo __('Estadocuentas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Periodo'); ?></th>
			<th><?php echo $this->Paginator->sort('NroMovimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('TipoMovimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('Importe'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estadocuentas as $estadocuenta): ?>
	<tr>
		<td><?php echo h($estadocuenta['Estadocuenta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estadocuenta['Empresa']['EmpresaRazonSocial'], array('controller' => 'empresas', 'action' => 'view', $estadocuenta['Empresa']['id'])); ?>
		</td>
		<td><?php echo h($estadocuenta['Estadocuenta']['Periodo']); ?>&nbsp;</td>
		<td><?php echo h($estadocuenta['Estadocuenta']['NroMovimiento']); ?>&nbsp;</td>
		<td><?php echo h($estadocuenta['Estadocuenta']['TipoMovimiento']); ?>&nbsp;</td>
		<td><?php echo h($estadocuenta['Estadocuenta']['Importe']); ?>&nbsp;</td>
		<td><?php echo h($estadocuenta['Estadocuenta']['Fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estadocuenta['Estadocuenta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estadocuenta['Estadocuenta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estadocuenta['Estadocuenta']['id']), array(), __('Are you sure you want to delete # %s?', $estadocuenta['Estadocuenta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estadocuenta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
