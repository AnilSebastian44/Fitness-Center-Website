<?php 
	$array = array('name' => 'signupForm', 'id' => 'signupForm');
	echo form_open('member/signup_validate', $array);
?>
	
	<!-- form_label(Value, for); -->
	<!-- form_input(name, value); -->
	<!-- form_submit(name, value); -->
	

	<?php $array = array('id' => 'signupFieldSet', 'name' => 'signupFieldSet');?>
	<?php echo form_fieldset('Sign Up', $array); ?>

		<?php echo form_error('firstname', '<p class="errors">');?>
		<?php echo form_error('lastname', '<p class="errors">');?>
		<?php echo form_error('mobile', '<p class="errors">');?>
		<?php echo form_error('email', '<p class="errors">');?>
		<?php echo form_error('signupusername', '<p class="errors">');?>
		<?php echo form_error('signuppassword', '<p class="errors">');?>
		<?php echo form_error('gender', '<p class="errors">');?>
		<?php echo form_error('dob', '<p class="errors">');?>
		<?php echo form_error('address', '<p class="errors">');?>
		<?php echo form_error('membershipplan', '<p class="errors">');?>
	
		<?php echo form_label('Firstname: ', 'firstname'); ?>
		<?php $array = array('name' => 'firstname', 'value' => set_value('firstname'), 'id' => 'firstname');
			echo form_input($array); 
		?>
	
		<br/>
	
		<?php echo form_label('Lastname: ', 'lastname'); ?>
		<?php $array = array('name' => 'lastname', 'value' => set_value('lastname'), 'id' => 'lastname');
			echo form_input($array); 
		?>
		
		<br/>
	
		<?php echo form_label('Mobile Number: ', 'mobile'); ?>
		<?php $array = array('name' => 'mobile', 'value' => set_value('mobile'), 'id' => 'mobile');
			echo form_input($array); 
		?>
	
		<br/>
	
		<?php echo form_label('Email: ', 'email'); ?>
		<?php $array = array('name' => 'email', 'value' => set_value('email'), 'id' => 'email');
			echo form_input($array); 
		?>
	
		<br/>
	
		<?php echo form_label('Username: ', 'signupusername'); ?>
		<?php $array = array('name' => 'signupusername', 'value' => set_value('signupusername'), 'id' => 'signupusername');
			echo form_input($array); 
		?>
	
		<br/>
	
		<?php echo form_label('Password: ', 'signuppassword'); ?>
		<?php $array = array('name' => 'signuppassword', 'value' => set_value('signuppassword'), 'id' => 'signuppassword');
			echo form_password($array); 
		?>

		<br/>

		<?php echo form_label('Male ', 'male'); ?>
		<?php $array = array('name' => 'gender', 'value' => 'male', 'id' => 'male', 'checked' => set_radio('gender', 'male'));
			echo form_radio($array); 
		?>
		
		<?php echo form_label('Female ', 'female'); ?>
		<?php $array = array('name' => 'gender', 'value' => 'female', 'id' => 'female', 'checked' => set_radio('gender', 'female'));
			echo form_radio($array); 
		?>
		<br/>

		<?php echo form_label('Date of Birth: ', 'dob'); ?>
		<?php $array = array('name' => 'dob', 'value' => set_value('dob'), 'id' => 'dob', 'placeholder' => 'yyyy/mm/dd');
			echo form_input($array); 
		?>
		
		<br/>

		<?php echo form_label('Address: ', 'address'); ?>
		<?php $array = array('name' => 'address', 'value' => set_value('address'), 'id' => 'lastname', 'rows' => '8', 'cols' => '70');
			echo form_textarea($array); 
		?>
		
		<br/>

		<?php echo form_label('Membership plan: ', 'membershipplan'); ?>
		<?php $array = array('3a' => '3 Months Adult', '3s' => '3 Months Student', '6a' => '6 Months Adult', '6s' => '6 Months Student', '1a' => '1 Year Adult', '1s' => '1 Year Student', 'life' => 'Lifetime');
			echo form_dropdown('membershipplan', $array, set_value('membershipplan')); 
		?>
		
		<br/>
		<?php echo form_submit('submit', 'Submit',"class='signup_button'"); ?>


		

	<?php echo form_fieldset_close();?>

	


<?php echo form_close();?>

<?php 
	$array = array('name' => 'loginForm', 'id' => 'loginForm');
	echo form_open('member/login_validate', $array); 
?>


	<?php $array = array('name' => 'loginFieldSet', 'id' => 'loginFieldSet');?>
	<?php echo form_fieldset('Login', $array); ?>
		<?php echo form_label('Username: ', 'loginusername'); ?>
		<?php $array = array('name' => 'loginusername', 'value' => set_value('loginusername'), 'id' => 'loginusername');
			echo form_input($array); 
		?>
		
		<br/>

		<?php echo form_label('Password: ', 'loginpassword'); ?>
		<?php $array = array('name' => 'loginpassword', 'value' => set_value('loginpassword'), 'id' => 'loginpassword');
			echo form_password($array); 
		?>
		
		<br/>

		<?php echo form_submit('login', 'Login',"class='login_button'"); ?>

		<?php echo form_error('loginusername', '<p class="errors">');?>
		<?php echo form_error('loginpassword', '<p class="errors">');?>
	<?php echo form_fieldset_close(); ?>

	

<?php form_close(); ?>