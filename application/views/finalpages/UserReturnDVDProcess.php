<?php 

        date_default_timezone_set('Asia/Manila');
        $date_return = date('M-d-Y');


      foreach($movie_data->result() as $movies)
      {
        $movie_id = $movies->movie_id;
        $movie_title = $movies->movie_title;
        $movie_category = $movies->movie_category;
        $movie_pic = $movies->userfile;
      }

      foreach($user_data_list->result() as $user)
      {
        $borrow_id = $user->borrow_id;
        $user_id = $user->user_id;
        $firstname = $user->firstname;
        $middlename = $user->middlename;
        $lastname = $user->lastname;
        $no_copies = $user->no_copies;
        $date_rented = $user->date_rented;
        $date_will_return = $user->date_will_return;
      } 

      if($date_will_return > $date_return)

      {
        $penalty = 0;
      }
      else
      {
        $penalty = 100;

      }

     
    ?>

    <div class="navbar"> 

        <ul>
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />

        <li><a id="" href="<?php echo base_url('myfunctions/UserIndexPage/'.$user_id); ?>"><img class="icons" src="<?php echo base_url('assets/images/home-icon.png');?>"/></a></li>

        <li><a id="" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">MOVIE</a></li>

        <li><a id="" href="<?php echo base_url('myfunctions/UserTransactionPage/'.$user_id); ?>">LOGS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">ABOUT US</a></li>
        <li><a id="" href="">FAQ's</a></li>
        <div class="profile">
        <li ><a  id="user" href="<?php echo base_url('myfunctions/UserUpdateAccountPage/'.$user_id); ?>"> <img  class="icons" src="<?php echo base_url('assets/images/user.png');?>">Hi,<?php echo " $firstname"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'><img  class="icons" src="<?php echo base_url('assets/images/logout.png');?>"></a></li>
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
    
    <div class="body-movie1">
    <p align='center'><?php echo @$msg; ?></p>
       <form action="<?php echo base_url('myfunctions/ReturnDVDModel/'.$movie_id.'/'.$borrow_id.'/'.$user_id); ?>" method="post" class="form-horizontal" role="form">
           
    <h3 style="color:white;">Your Information</h3>  
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>" readonly>
      </div>
    </div>
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $middlename; ?>" readonly>
      </div>
    </div>
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>" readonly>
      </div>
    </div>


    <h3 style="color:white;">Movie Information</h3>  
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="movie_title" value="<?php echo $movie_title; ?>" readonly>
      </div>
    </div>
           
               <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="movie_category" value="<?php echo $movie_category; ?>" readonly>
      </div>
    </div>
           
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="no_copies" value="<?php echo $no_copies; ?>" readonly>
      </div>
    </div>
    </div> 

    <div class="body-movie2">
      <h3 style="color:white;">Date Information</h3>  
    <div class="form-group">
      

      <div class="col-sm-10">          
        <input type="text" class="form-control" name="date_rented" value="<?php echo $date_rented; ?>" readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="date_will_return" value="<?php echo $date_will_return; ?>" readonly>
      </div>
    </div>

                <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="address" name="date_return" value="<?php echo $date_return; ?>" readonly>
      </div>
    </div>


    
    
    <div class="form-group">        
      <div class="col-sm-10">
        <button type="submit" class="btn btn-default">Return DVD</button>
        <a style="color: black;"href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>" class="btn btn-default">Back to Home</a>
      </div>
    </div>
        
  </form>
         
    </div>



</div>
    
    
</div>

<br/>