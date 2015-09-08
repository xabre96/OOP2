 


    <?php 

      foreach($user_data->result() as $user)
      {
        $user_id = $user->user_id;
        $firstname = $user->firstname;
        $middlename = $user->middlename;
        $lastname = $user->lastname;
      } 


  
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

<div class="navbar"> 

    <ul>
        <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>" rel="stylesheet" />

        <li><a id="" href="<?php echo base_url('myfunctions/AdminTransactionPage/'.$user->user_id); ?>">LOGS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowUsersPage/'.$user->user_id); ?>">SHOW USERS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowReportPage/'.$user->user_id); ?>">REPORTS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminMoviePage/'.$user->user_id); ?>">SHOW MOVIES</a></li>
        <div class="profile">
            <li><a  >Hi,<?php echo " $user->username"; ?></a></li>
            <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'>LOGOUT</a></li>
        </div>
        
      </ul>

</div>  


<div class="movie-info">
    <div class="poster">
       <img  class="movie-info-poster" height="400" width="300" src="<?php echo base_url('uploads/'.$movie_pic.''); ?>"  /> 
                 
        <center>
            <div style="margin-left:25px; margin-top:5px;" class="btn-group" role="group" aria-label="...">
              
                <a href="<?php echo base_url('myfunctions/AdminEditMoviePage/'.$movie_id.'/'.$user_id); ?>"  class="btn btn-default btn-cart">Edit Movie Details</a>
                <a href="<?php echo base_url('myfunctions/DeleteMovieProcess/'.$movie_id.'/'.$user_id); ?>" class="btn btn-default btn-cart">Delete Movie</a>

            </div>
        </center>
      
    
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




