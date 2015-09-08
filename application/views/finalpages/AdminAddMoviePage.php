
<?php
          foreach($user_data->result() as $user)
      {
        $user_id = $user->user_id;
        $firstname = $user->firstname;
        $middlename = $user->middlename;
        $lastname = $user->lastname;
        $username = $user->username;
      } 

    ?>


<div class="navbar"> 

    <ul>
        <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>" rel="stylesheet" />

        <li><a id="" href="<?php echo base_url('myfunctions/AdminTransactionPage/'.$user->user_id); ?>">LOGS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowUsersPage/'.$user->user_id); ?>">SHOW USERS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowReportPage/'.$user->user_id); ?>">REPORTS</a></li>
        <li><a id="action" href="<?php echo base_url('myfunctions/AdminMoviePage/'.$user->user_id); ?>">SHOW MOVIES</a></li>
        
        <div class="profile">
            <li><a  >Hi,<?php echo " $user->username"; ?></a></li>
            <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'>LOGOUT</a></li>
        </div>
    </ul>

        


</div>

  


<div class="movie-info">
  <form class="form-horizontal" action="<?php echo base_url('myfunctions/AddMovieProcess/'.$user_id); ?>" method="post" enctype="multipart/form-data" role="form">
    <div class="body-movie1" style="margin-left:250px;">
      <p align='center'><?php echo @$msg; ?></p>        
          <div class="form-group">
     
            <div class="col-sm-10">
              <input style="color:black;" type="file" name="userfile" class="file">
           </div>
          </div>
        
          <div class="form-group">
     
            <div class="col-sm-10">
              <input type="text" class="form-control" id="movie_title" name="movie_title" placeholder="MOVIE TITLE">
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="movie_category" name="movie_category" placeholder="MOVIE CATEGORY" >
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="language" name="language" placeholder="LANGUAGE">
            </div>
          </div>
    
          <div class="form-group">    
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="rating" name="rating" placeholder="RATING">
            </div>
          </div>
                   
         <div class="form-group">
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="release_year" name="release_year" placeholder="RELEASE YEAR">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="no_copies" name="no_copies" placeholder="NUMBER OF COPIES">
          </div>
        </div>
      </div>  
      <div class="body-movie1"  >      
        <div class="form-group">
      
          <div class="col-sm-10">          
            <textarea style=" margin-bottom:10px;" cols="100" rows="15" type="text" class="form-control" id="movie_description" name="movie_description" Placeholder="MOVIE DESCRIPTION" size="30" ></textarea>
          </div>
        </div>

        <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">ADD MOVIE</button>
          </div>
       </div>
    </div>
  </form>

  
</div>
    
</div>
    
   
</div>

		
      
