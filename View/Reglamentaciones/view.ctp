<div class="reglamentaciones view">
<h2><?php echo __('Reglamentacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reglamentacione['Reglamentacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegDescripcion'); ?></dt>
		<dd>
			<?php echo h($reglamentacione['Reglamentacione']['RegDescripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegFechaUltActualizacion'); ?></dt>
		<dd>
			<?php echo h($reglamentacione['Reglamentacione']['RegFechaUltActualizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RegAdjunto'); ?></dt>
		<dd>
			<?php echo h($reglamentacione['Reglamentacione']['RegAdjunto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reglamentacione'), array('action' => 'edit', $reglamentacione['Reglamentacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reglamentacione'), array('action' => 'delete', $reglamentacione['Reglamentacione']['id']), array(), __('Are you sure you want to delete # %s?', $reglamentacione['Reglamentacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reglamentaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reglamentacione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
