 
<?php $this->load->view('layouts/header')?>


    <div class="navbar"> 

        <ul>
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson.png'); ?>"  />

			<li><a id="active" href="<?php echo base_url('index.php/index'); ?>">HOME</a></li>
        <li><a id="" href="<?php echo base_url('index.php/movie'); ?>">MOVIES</a></li>
        <li><a id="" href="<?php echo base_url('index.php/login'); ?>">LOGIN</a></li>
        
        
		
			</ul>

    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                          <img id="images" src="<?php echo base_url('assets/images/a.jpg'); ?>" alt="Chania" />

            </div>

            <div class="item">
                          <img  id="images" src="<?php echo base_url('assets/images/b.jpg'); ?>" alt="Chania" />

            </div>

            <div class="item">
                          <img  id="images"src="<?php echo base_url('assets/images/c.jpg'); ?>"   alt="Flower"/>

            </div>

            <div class="item">
                          <img id="images" src="<?php echo base_url('assets/images/d.jpg'); ?>"   alt="Flower"/>

            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>



</div>
        

    

    
    
    
</div>

