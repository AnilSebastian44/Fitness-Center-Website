<footer class="footer">

	<div class="footer-left">

		<h3>Legacy Fitness Club<span>  </span></h3>

			<p class="footer_links">
					<a href="Home.php">Home · </a>
					<a href="feedback.php"> Contact Us · </a>
					<a href="#"> Opening Times · </a>
					<a href="#">Map</a>
					
			</p>

				<div class="footer-icons">
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"><img src="<?php echo base_url(); ?>Logo/F_logo.png" style="width:30px;height:30px;"/></i></a>
					<a href="https://twitter.com/"><i class="fa fa-twitter"><img src="<?php echo base_url(); ?>Logo/T_logo.png" style="width:30px;height:30px;"/></i></a>
					<a href="https://www.instagram.com/"><i class="fa fa-instagram"><img src="<?php echo base_url(); ?>Logo/I_logo.png" style="width:30px;height:30px;"/></i></a>
					<a href="https://plus.google.com/collections/featured"><i class="fa fa-google+"><img src="<?php echo base_url(); ?>Logo/G_logo.png" style="width:30px;height:30px;"/></i></a>
				</div>
				<p class="company_name">Legacy Fitness Club &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="address"></i>
					<p><span>39 Kevin Street,</span> Dublin, Ireland.</p>
				</div>
				<div>
					<i class="phone"></i>
					<p>+353 45 849 029</p>
				</div>
				<div>
					<i class="email"></i>
					<p><a href="mailto:legacyfitness3@gmail.com">legacyfitness3@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">

				<?php echo $map['html']; ?>


			</div>
		</footer>

</div>
</body>
</html>