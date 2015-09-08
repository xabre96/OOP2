   

   <?php 

      foreach($movie_data->result() as $row)
      {
        $movie_id = $row->movie_id;
        $movie_title = $row->movie_title;
        $movie_category = $row->movie_category;
        $language = $row->language;
        $rating = $row->rating;
        $movie_description = $row->movie_description;
        $release_year = $row->release_year;
        $no_copies = $row->no_copies;
        $movie_pic = $row->userfile;
      } 

    ?>



    <nav class="navbar navbar-default navbar-fixed-top"> 

        <ul >
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />


            <li><a id="" href="<?php echo base_url('myfunctions/index'); ?>"><img class="icons" src="<?php echo base_url('assets/images/home-icon.png');?>"/></a></li>
            <li><a id="" href="<?php echo base_url('myfunctions/GuestMoviePage'); ?>">MOVIES</a></li>
            <li><a id ="" style="margin-left:600px;" id="" href="<?php echo base_url('myfunctions/LoginFormPage'); ?>"><img style="height: 20px; width:20px;"class="icons" src="<?php echo base_url('assets/images/signin.png');?>"/>SIGN IN</a></li>
            <li><a  id="" href="<?php echo base_url('myfunctions/RegisterPage'); ?>"><img class="icons" src="<?php echo base_url('assets/images/signup.png');?>"/>SIGN UP</a></li>
        </ul>

    </nav>


<div class="movie-info">
    <div class="poster">
       <img  id="movie-info-poster"  src="<?php echo base_url('uploads/'.$movie_pic.''); ?>"  /> 
           <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      </div>
    </div>
    </div> 

    <div class="body-movie1">
         <h3> Title: <i><b><?php echo $movie_title; ?></b></i></h3> 
        <p> Rating: <?php echo $rating; ?></p>
        <p>Category: <?php echo $movie_category; ?></p>
        <p>Language: <?php echo $language; ?></p>
        <p>Release year: <?php echo $release_year; ?></p>
        <p>Current Number of Copies: <?php echo $no_copies; ?></p>
         
    </div>
    <div class="body-movie2">
            <h1>Summary:</h1><p> <?php echo $movie_description; ?></p>
   

         
    </div>




</div>
</div>
