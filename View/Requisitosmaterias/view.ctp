<div class="requisitosmaterias view">
<h2><?php echo __('Requisitosmateria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requisitosmateria['Requisitosmateria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RequisitoMateriaCondicion'); ?></dt>
		<dd>
			<?php echo h($requisitosmateria['Requisitosmateria']['RequisitoMateriaCondicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ofertascarreras'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisitosmateria['Ofertascarreras']['id'], array('controller' => 'ofertascarreras', 'action' => 'view', $requisitosmateria['Ofertascarreras']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisitosmateria['Materia']['id'], array('controller' => 'materias', 'action' => 'view', $requisitosmateria['Materia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requisitosmateria'), array('action' => 'edit', $requisitosmateria['Requisitosmateria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requisitosmateria'), array('action' => 'delete', $requisitosmateria['Requisitosmateria']['id']), array(), __('Are you sure you want to delete # %s?', $requisitosmateria['Requisitosmateria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitosmaterias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisitosmateria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
