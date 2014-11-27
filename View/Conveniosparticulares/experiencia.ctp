<table>
	<tr>
		<td class="mitdLeft"><h3><?php echo __('Experiencia del Alumno'); ?></h3></td>
		<td>

    <td class="mitd">
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'conveniosparticulares', 'action' => 'index')); ?>
    </td>
</td>
	</tr>
</table>

	

<?php echo $this->Form->create('Conveniosparticulare'); ?>
<br>
<?php
					echo $this->Form->hidden('id');?>
<table>
<tr>
<td class="mitdLeft">
<dl>
		<dt><?php echo __('Empresa'); ?></dt>
			<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Alumno']['name']); ?>&nbsp;</dd>
		
</dl>
</td>
</tr>
</table>

<fieldset>
<legend>Descripción</legend>


			
			<h4>Experiencia: </h4>	
			<?php
	echo $this->Form->textarea('EvaluacionAlumno');
	 ?>
	
	
	
</fieldset>
<?php echo $this->Form->end('Registrar');
	
?>
<br>
<br>
<br>
<br>
<br>

				