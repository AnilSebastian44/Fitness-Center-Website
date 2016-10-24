<!-- form_label(Value, for); -->
<!-- form_input(name, value); -->
<!-- form_submit(name, value); -->



<!-- Name, Number, Email, Message -->

<?php 
	$array = array('name' => 'feedback', 'id' => 'feedback');
	echo form_open('feedback/validate_feedback', $array);
?>
	
	<?php
		$array = array('name' => 'feedbackFieldSet', 'id' => 'feedbackFieldSet');
		echo form_fieldset('Feedback', $array);
	?>
		<?php echo form_error('fullname', '<p class="errors">'); ?>
		<?php echo form_error('contact', '<p class="errors">'); ?>
		<?php echo form_error('email', '<p class="errors">'); ?>
		<?php echo form_error('msg', '<p class="errors">'); ?>
		
		<?php echo form_label('Name: ', 'fullname'); ?>
		<?php 
			$array = array('name' => 'fullname', 'value' => set_value('fullname'), 'id' => 'fullname');
			echo form_input($array);
		?>
		
		<br/>

		<?php echo form_label('Contact Number: ', 'contact'); ?>
		<?php 
			$array = array('name' => 'contact', 'value' => set_value('contact'), 'id' => 'contact');
			echo form_input($array);
		?>
		
		<br/>

		<?php echo form_label('Email: ', 'email'); ?>
		<?php 
			$array = array('name' => 'email', 'value' => set_value('email'), 'id' => 'email');
			echo form_input($array);
		?>
		
		<br/>

		<?php echo form_label('Message: ', 'msg'); ?>
		<?php 
			$array = array('name' => 'msg', 'value' => set_value('msg'), 'id' => 'msg');
			echo form_input($array);
		?>
		
		<br/>

		<?php echo form_submit('submit', 'Submit Feedback',"class='feedback_button'"); ?>

		

	<?php echo form_fieldset_close();?>

<?php echo form_close();?>
