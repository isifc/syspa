<?php
/**
 * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="users index">
<div id="tabs">
 <ul>
    <p>Login</p>
    
  </ul>
	<h3><?php echo __d('users', 'Login'); ?></h3>
	<?php echo $this->Session->flash('auth');?>
	<?php  echo $this->Form->create($model, array(
				'action' => 'login',
				'id' => 'LoginForm')); ?>
		<table>
			<tr>
			
				<?php 	echo " ".$this->Form->input('email', array(
				'label' => __d('users', 'Email'))); ?>
			
				<td class="mitd">
					
				</td>
			</tr>
			<tr>
			
				<?php 	echo $this->Form->input('password',  array(
				'label' => __d('users', 'Password'))); ?>
			
				
			</tr>
			<tr>
				<?php echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))) . '</p>'; ?>
			</tr>
			<tr>
			<?php
						echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';

			echo $this->Form->hidden('User.return_to', array(
				'value' => $return_to));
						 echo $this->Form->end(__d('users', 'Submit')); ?>
					
				</tr>
			<table>
			<table>
				
			</table>
			
			
			
			
		</table>
		<?php

			
		
			
		?>
</div>
</div>
<br>
<br>
<br>
<script>
	$("button").button();
	
</script>
<script>
    $( "#tabs" ).tabs();
  </script>