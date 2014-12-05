<div class="tutores form">
		
<table>
	<tr>
		<td class="mitdLeft"><h3><?php echo __('Editar Tutor'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'tutores', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>
	
	<?php echo $this->Form->create('Tutore'); ?>
	<?php
					echo $this->Form->hidden('id');


					
				?>
	<fieldset>
		<legend><?php echo __('Datos del Tutor'); ?></legend>
	<table>
		<tr>
		<td class="mitd">
	
		<?php echo $this->Form->input('ApellidoNombre', array('label'=>'Apellido y Nombre: '));?>
		</td>
		<td class="mitd">
	
		<?php echo $this->Form->input('TutorCargo', array('label'=>'Cargo: '));?>
		</td>
	</tr>
	<tr>
	<td class="mitd">	
		<?php	echo $this->Form->input('TutorTelefono',array('label'=>'Telefono: '));?>
	</td>
	<td class="mitd">	
		<?php	echo $this->Form->input('TutorEmail',array('label'=>'E-mail: '));?>
	</td>
	</tr>
	<tr>
		<td class="mitd">
			<?php echo $this->Form->input('CUIL',array('label'=>'Cuil: ','style'=>"width:107px;"));?>
		</td>
		<td class="mitd"></td>
	</tr>

</table>
	</fieldset>
<?php echo $this->Form->end(__('Registrar')); ?>




<br>
<br>
<br>
<br>
<br>
</div>


<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tutore.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tutore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tutores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
