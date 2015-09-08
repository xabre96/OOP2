 
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
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
        </div>
      </div>
  </div> 
    
  
   
    <form enctype="multipart/form-data" action="<?php echo base_url('myfunctions/EditDVDModel/'.$movie_id.'/'.$user_id); ?>" method="post" class="form-horizontal" role="form">
      <div class="body-movie1">
          <h3 style="color:white;">Edit this Movie</h3>
          <p align='center'><?php echo @$msg; ?></p> 

          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="firstname" name="movie_title" placeholder="Movie Title" size="30" value="<?php echo "$movie_title"; ?>"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="middlename" name="movie_category" placeholder="Movie Category" size="30" value="<?php echo "$movie_category"; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="language" name="language" placeholder="Language" size="30" value="<?php echo "$language"; ?>">
            </div>
          </div>
          <div class="form-group">     
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating" size="30" value="<?php echo "$rating"; ?>">
            </div>
          </div>
          <div class="form-group">     

            <div class="col-sm-10">
              <input type="text" class="form-control" id="release_year" name="release_year" placeholder="Release Year" size="30" value="<?php echo "$release_year"; ?>">
            </div>
          </div>
          <div class="form-group">
            
            <div class="col-sm-10">          
              <input type="number" class="form-control" id="lastname" name="no_copies" placeholder="Number of Copies" size="30" min="1" max="1000" value="<?php echo "$no_copies"; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">          
              <input type="file" class="form-control" name="userfile">
            </div>
          </div>
      </div>
      <div class="body-movie1" style="margin-top: 50px">
        <div class="form-group" >
          <div class="col-sm-10">
            <textarea style=" margin-bottom:10px;" cols="100" rows="15" type="text" class="form-control" id="movie_description" name="movie_description" size="30" ><?php echo "$movie_description"; ?></textarea>
          </div>
        </div><br><br>
        <div class="form-group">        
          <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Edit Movie</button>
        </div>

      </div>
    </div>
  </form>

</div>




</div><br/>
  

    

