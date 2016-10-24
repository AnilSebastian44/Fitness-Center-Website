<!-- Platinum, Gold, Off-Peak, Student, Over 60 -->


<div id="platinum" class="membership">
	<h2>Platinum</h2>
	<?php
		$array = array('name' => 'platinumChoose', 'id' => 'platinumChoose'); 
		echo form_open('membership/plans', $array); 
	?>
		<?php echo form_label('Choose your plan:', ''); ?>
		<?php
			$array = array('1' => '1 Month', '3' => '3 Months', '6' => '6 Months', '12' => '12 Months'); 
			echo form_dropdown('platinumPlan', $array, set_value('platinumPlan')); 
		?>
		<?php echo form_submit('submit', 'Get Membership',"class='membership_button1'"); ?>
	<?php echo form_close(); ?>


	

</div>
<div id="gold" class="membership">
	<h2>Gold</h2>
	<?php
		$array = array('name' => 'platinumChoose', 'id' => 'platinumChoose'); 
		echo form_open('membership/plans', $array); 
	?>
		<?php echo form_label('Choose your plan:', ''); ?>
		<?php
			$array = array('1' => '1 Month', '3' => '3 Months', '6' => '6 Months', '12' => '12 Months'); 
			echo form_dropdown('goldPlan', $array, set_value('goldPlan')); 
		?>
		<?php echo form_submit('submit', 'Get Membership',"class='membership_button2'"); ?>
	<?php echo form_close(); ?>


	
</div>
<div id="offpeak" class="membership">
	<h2>Off-Peak</h2>
	<?php
		$array = array('name' => 'platinumChoose', 'id' => 'platinumChoose'); 
		echo form_open('membership/plans', $array); 
	?>
		<?php echo form_label('Choose your plan:', ''); ?>
		<?php
			$array = array('1' => '1 Month', '3' => '3 Months', '6' => '6 Months', '12' => '12 Months'); 
			echo form_dropdown('offpeakPlan', $array, set_value('offpeakPlan')); 
		?>
		<?php echo form_submit('submit', 'Get Membership',"class='membership_button3'"); ?>
	<?php echo form_close(); ?>


	
</div>
<div id="student" class="membership">
	<h2>Student</h2>
	<?php
		$array = array('name' => 'platinumChoose', 'id' => 'platinumChoose'); 
		echo form_open('membership/plans', $array); 
	?>
		<?php echo form_label('Choose your plan:', ''); ?>
		<?php
			$array = array('1' => '1 Month', '3' => '3 Months', '6' => '6 Months', '12' => '12 Months'); 
			echo form_dropdown('studentPlan', $array, set_value('studentPlan')); 
		?>
		<?php echo form_submit('submit', 'Get Membership',"class='membership_button4'"); ?>
	<?php echo form_close(); ?>


	
</div>
<div id="over60" class="membership">
	<h2>Over 60</h2>
	<?php
		$array = array('name' => 'platinumChoose', 'id' => 'platinumChoose'); 
		echo form_open('membership/plans', $array); 
	?>
		<?php echo form_label('Choose your plan:', ''); ?>
		<?php
			$array = array('1' => '1 Month', '3' => '3 Months', '6' => '6 Months', '12' => '12 Months'); 
			echo form_dropdown('over60Plan', $array, set_value('over60Plan')); 
		?>
		<?php echo form_submit('submit', 'Get Membership',"class='membership_button5'"); ?>
	<?php echo form_close(); ?>
	



	
</div>