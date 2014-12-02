<div class="adendas view">
<h2><?php echo __('Adenda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaFirmaConvenioAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['FechaFirmaConvenioAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AdendaDescripcion'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['AdendaDescripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AdendaArchivoAdjunto'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['AdendaArchivoAdjunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreArtAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['NombreArtAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NombreObraSocialAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['NombreObraSocialAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ImporteObraSocialAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['ImporteObraSocialAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ImporteAsignacionEstimuloAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['ImporteAsignacionEstimuloAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TutorIdAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['TutorIdAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaAltaObraSocialAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['FechaAltaObraSocialAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PagaAsignacionEstimuloAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['PagaAsignacionEstimuloAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaAltaARTAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['FechaAltaARTAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ImporteARTAnterior'); ?></dt>
		<dd>
			<?php echo h($adenda['Adenda']['ImporteARTAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conveniosparticulare'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adenda['Conveniosparticulare']['id'], array('controller' => 'conveniosparticulares', 'action' => 'view', $adenda['Conveniosparticulare']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adenda'), array('action' => 'edit', $adenda['Adenda']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adenda'), array('action' => 'delete', $adenda['Adenda']['id']), array(), __('Are you sure you want to delete # %s?', $adenda['Adenda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Adendas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adenda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
