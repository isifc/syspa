<div class="tutores view">
<h2><?php echo __('Tutor'); ?></h2>
<br>
<dl>
<table>
<tr>
<td class="mitdLeft">
		<dt><?php echo __('CUIL'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['CUIL']); ?>
			&nbsp;
		</dd>
		</td>
</tr>
	
		<tr>
			<td class="mitdLeft">
				<dt><?php echo __('TutorEmail'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['TutorEmail']); ?>
			&nbsp;
		</dd>
			</td>

		</tr>
		<tr>
			<td class="mitdLeft">
				<dt><?php echo __('TutorTelefono'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['TutorTelefono']); ?>
			&nbsp;
		</dd>
			</td>
		</tr>
		<tr>
			<td class="mitdLeft">
				<dt><?php echo __('TutorCargo'); ?></dt>
			<dd>
			<?php echo h($tutore['Tutore']['TutorCargo']); ?>
			&nbsp;
		</dd>
			</td>

		</tr>
		<tr>
		<td class="mitdLeft">
				<dt><?php echo __('ApellidoNombre'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['ApellidoNombre']); ?>
			&nbsp;
		</dd>
		</td>
		</tr>
		
	</dl>
</div>

</table>
	

<div class="related">
	<h3><?php echo __('Convenios a cargo'); ?></h3>
	<?php if (!empty($tutore['Conveniosparticulare'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Alumno '); ?></th>
		<th><?php echo __('FechaInicio'); ?></th>
		<th><?php echo __('FechaFin'); ?></th>
		<th><?php echo __('Empresa '); ?></th>
		
	</tr>
	<?php foreach ($tutore['Conveniosparticulare'] as $conveniosparticulare): ?>
		<tr>
			<td><?php echo $conveniosparticulare['alumno_id']; ?></td>
			<td><?php echo $conveniosparticulare['FechaInicio']; ?></td>
			<td><?php echo $conveniosparticulare['FechaFin']; ?></td>
			
			<td><?php echo $conveniosparticulare['empresa_id']; ?></td>
			
			
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
