<!DOCTYPE html>
<html lang="en">
<head>
	<div class="background-image"></div>
	<meta charset="UTF-8"/>
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<?php echo $map['js']; ?>

	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" />
	<script src="https://code.jquery.com/jquery-2.2.2.js" integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE=" crossorigin="anonymous"></script>
</head>
<div id="container">
<body>
<header>
		<a href="<?php echo base_url(); ?>index.php/main"><i class="logo"><img src="<?php echo base_url(); ?>/Image/Logo.png" style="width:70px;height:70px;"/></i><span> Legacy Fitness Club</span></a>
</header>
<div class="navbar navbar-inverse" "navbar-static-top">
	<div class="container">
		
		<button class="navbar-toggle" data-toggle="collapse" data-target =".navHeaderCollapse">
		<a href="#"><i class="nav_image"><img src="<?php echo base_url(); ?>/Image/nav_image1.png" style="width:50px;height:50px;"/></i></a>

		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">

<nav class="nav navbar-nav navbar-right">
			
		
				<li><a href="<?php echo base_url(); ?>index.php/main"> Home </a></li>
				<li><a href="<?php echo base_url(); ?>index.php/classes"> Classes </a></li>
				<li><a href="<?php echo base_url(); ?>index.php/gallery"> Gallery </a></li>
				<li><a href="<?php echo base_url(); ?>index.php/feedback"> Feedback </a></li>
				<li><a href="<?php echo base_url(); ?>index.php/about"> About Us </a></li>
				<li><a href="<?php echo base_url(); ?>index.php/admin_login"> Administration </a></li>
				<?php 
					if(isset($username) && $username != ''){
						
				 ?>
				<li><a href="<?php echo base_url(); ?>index.php/logout"> Logout </a></li>

				<?php 

					} else {

					 
				?>
				<li><a href="<?php echo base_url(); ?>index.php/member"> Login | Signup </a></li>
				<?php 

					}

					 
				?>

			
			
		</nav>
		</div>

	</div>
</div>