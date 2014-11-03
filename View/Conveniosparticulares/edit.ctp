<div class="conveniosparticulares form">
<?php echo $this->Form->create('Conveniosparticulare'); ?>
	<fieldset>
		<legend><?php echo __('Editar Convenio particular'); ?></legend>
	
	
						<div id="dialog" title="Lista de alumnos">
								<div class="alumnos index">
	

</div>
</div>
						
<table>	


<tr>
<td class="mitdLeft">
<dl>

		<dt><?php echo __('Empresa'); ?></dt>
			<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
		<dt><?php echo __('Legajo alumno'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Alumno']['name']); ?>&nbsp;</dd>
	
</dl>
</td>
<td class="mitdLeft">
<dl>
	<dt><?php echo __('Carrera'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Carrera']['carrera']); ?>&nbsp;</dd>
		<dt><?php echo __('Fecha del convenio'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaFirmaConvenio']); ?>
			&nbsp;
		</dd>
		</dl>
</td>

</tr>


		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('FechaFirmaConvenio');?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('FechaAltaObraSocial');?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('FechaInicio',array('label'=>'Fecha de inicio: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('FechaFin',array('label'=>'Fecha de fin: '));?>
			</td>
		</tr>
	    <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreObraSocial',array('label'=>'Obra social: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteObraSocial',array('label'=>'Importe obra social: ','min'=>0, 'max'=>5));?>
			</td>
		</tr>
		 <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreART',array('label'=>'ART: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteArt',array('label'=>'Importe ART: ','min'=>0, 'max'=>5));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('PagaAsignacionEstumulo',array('label'=>'Paga asignacion estimulo: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteAsignacionEstimulo',array('label'=>'Importe asignacion estimulo: ','min'=>0, 'max'=>5));?>
			</td>
		</tr>
			
				
	</table>
	
	<?php
	
		echo $this->Form->hidden('id');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Conveniosparticulare.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Conveniosparticulare.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutores'), array('controller' => 'tutores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutore'), array('controller' => 'tutores', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
