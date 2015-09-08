     <div class="navbar"> 

    <ul>

        <li><a id="active" href="<?php echo base_url('myfunctions/index/'); ?>">News & Publication</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/guidelines/'); ?>">Guidelines</a></li>
        <li><a id="" href="">About Us</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/login_form/'); ?>">Login</a></li>
         
    </ul>

        


</div>

    <div class="clear">
  <div id="myCarousel" class="carousel slide carousel-div" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="home-img">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <a href="#"><img id="images" src="<?php echo base_url('assets/images/banner.jpg'); ?>" alt="Guardians of the Galaxy" class="img-carousel-util" ></a>
              <div class="carousel-caption">
 
              </div>
            </div>

            <div class="item">
              <a href="#"><img id="images" src="<?php echo base_url('assets/images/banner1.jpg'); ?>" alt="Transformers" class="img-carousel-util" ></a>
              <div class="carousel-caption">

              </div>
            </div>
          
            <div class="item">
              <a href="#"><img id="images" src="<?php echo base_url('assets/images/banner2.jpg'); ?>" alt="Game of Thrones" class="img-carousel-util" ></a>
              <div class="carousel-caption">

              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>

        </div>
        <?php   foreach ($news_publication->result() as $content) : ?>
        <h1><?php echo $content->news_title; ?></h1>
        <h3><?php echo $content->news_content; ?></h3>
        <h6><i>Author: <?php echo $content->news_author; ?></i></h6><hr/>
    <?php endforeach; ?>
         </div>



<div class="movie-list">
       <div class="movie-categories">


        <h3>Barangays</h3>
        <hr/>
 
        <?php //start here
        $this->load->model('users_model');
        $this->db->group_by('news_author');
        $municipal = $this->users_model->fetch_data_function('table_news', 'news_author');

        foreach ($municipal as $barangays) :

        ?>

    <a href="<?php echo base_url('myfunctions/selected_barangay/'.$barangays->news_author); ?>"><?php echo $barangays->news_author; ?></a></br>
    <?php endforeach; ?>
      </div>
      </div>
      </div>