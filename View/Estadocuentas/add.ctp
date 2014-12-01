<div class="estadocuentas form">
<?php echo $this->Form->create('Estadocuenta'); ?>
	<fieldset>
		<legend><?php echo __('Add Estadocuenta'); ?></legend>
	<?php
		echo $this->Form->input('empresa_id',array('value'=>$empresa_id,'default'=>$empresa_id));
		//echo $this->Form->input('Periodo');

		 
				echo "Período".$this->Form->inputText('Periodo',array(					
					'id'=>'periodo',
					'dateFormat'=>'m-Y',
					'class'=>'datepicker',
					'style'=>"width:76px;",
					));
				?>
				<Script> 
					$("#periodo").datepicker();
				</script>
<?php  
		echo $this->Form->hiden('NroMovimiento',array('value'=>1,'default'=>1));
		echo $this->Form->hiden('TipoMovimiento',array('value'=>'P','default'=>'P'));
		echo $this->Form->hiden('Importe',array('value'=>20000,'default'=>20000));
		echo $this->Form->input('Fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estadocuentas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
