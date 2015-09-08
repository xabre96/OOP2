 
<?php $this->load->view('layouts/header')?>

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
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />

      <li><a id="" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">MOVIE</a></li>

        <li><a id="" href="<?php echo base_url('myfunctions/UserTransactionPage/'.$user_id); ?>">LOGS</a></li>

        <div class="profile">
         <li ><a  id="user" href="<?php echo base_url('myfunctions/UserUpdateAccountPage/'.$user_id); ?>"> <img  class="icons" src="<?php echo base_url('assets/images/user.png');?>">Hi,<?php echo " $firstname"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/logoutProcess'); ?>'>LOGOUT</a></li>
        </div>

        
        
        
    
      </ul>

    </div>


<div class="movie-info">
    <div class="poster">
       <img   id="movie-info-poster" src="<?php echo base_url('uploads/'.$movie_pic.''); ?>"  /> 
           <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url('myfunctions/UserRentDVDProcess/'.$movie_id.'/'.$user_id.''); ?>"  class="btn btn-default btn-cart">Rent DVD</a>
      
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


