


<!-- Gallery -->

    <div class="Gallery_container">

 
        <br>


    <div class="row">
    <?php foreach ($image as $key) {
        # code...
    ?>
        
            <div class="col-md-4 gallery">
                <a href="#"><img class="img-responsive" src="<?php echo base_url() . $key->imagepath; ?>" style="width:400px;height:200px;" alt="">
                    <!-- http://www.herbertonleisure.ie/gallery/ -->
                </a>
                
            </div>
           
        
    <?php } ?>    
    <br></div>
            
        
</div>


<?php 

    



 ?>


