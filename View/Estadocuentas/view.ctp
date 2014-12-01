<div class="estadocuentas view">
<h2><?php echo __('Estadocuenta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estadocuenta['Estadocuenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estadocuenta['Empresa']['EmpresaRazonSocial'], array('controller' => 'empresas', 'action' => 'view', $estadocuenta['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo'); ?></dt>
		<dd>
			<?php echo h($estadocuenta['Estadocuenta']['Periodo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NroMovimiento'); ?></dt>
		<dd>
			<?php echo h($estadocuenta['Estadocuenta']['NroMovimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TipoMovimiento'); ?></dt>
		<dd>
			<?php echo h($estadocuenta['Estadocuenta']['TipoMovimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Importe'); ?></dt>
		<dd>
			<?php echo h($estadocuenta['Estadocuenta']['Importe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($estadocuenta['Estadocuenta']['Fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estadocuenta'), array('action' => 'edit', $estadocuenta['Estadocuenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estadocuenta'), array('action' => 'delete', $estadocuenta['Estadocuenta']['id']), array(), __('Are you sure you want to delete # %s?', $estadocuenta['Estadocuenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadocuentas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadocuenta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
