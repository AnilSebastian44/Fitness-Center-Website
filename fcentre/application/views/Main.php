<p>
	<?php 
		if(isset($username) && $username != ''){
			echo $username . anchor('logout', 'Logout');
		}
		

	 ?>

</p>

	 <div id="carousel-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-generic" data-slide-to="1"></li>
    <li data-target="#carousel-generic" data-slide-to="2"></li>
    <li data-target="#carousel-generic" data-slide-to="3"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img href="#" src="<?php echo base_url(); ?>Image/Swimming pool.jpg" style="width:1250px;height:500px;"alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>Image/Treadmill.jpg" style="width:1250px;height:500px;" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>Image/Weights.jpg" style="width:1250px;height:500px;"alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>Image/Working out.jpg" style="width:1250px;height:500px;" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-generic" style="height:500px;" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-generic" style="height:500px;" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->


</div>


<fieldset class="twitter">
<a class="twitter-timeline" href="https://twitter.com/legacyfitness3" data-widget-id="721492676835721216">Tweets by @legacyfitness3</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</fieldset>

<fieldset class="feedback_display">

<div>
<legend> Testimonials </legend>
<?php 
  foreach ($feedback as $key) {
    # code...
    echo "<p style='font-style: italic;'>".$key->name  . ' : '.'<br/>'.'<br/>' . $key->message . '<br/>'.'<br/>'.'<br/>';

  }
 ?>
</div>
</fieldset>


<fieldset>
</fieldset>