
 
<?php $this->load->view('layouts/header')?>

<?php 


      foreach($movie_data->result() as $movies)
      {
        $movie_id = $movies->movie_id;
        $movie_title = $movies->movie_title;
        $movie_category = $movies->movie_category;
        $movie_pic = $movies->userfile;
      }

      foreach($user_data->result() as $user)
      {
        $user_id = $user->user_id;
        $firstname = $user->firstname;
        $middlename = $user->middlename;
        $lastname = $user->lastname;
        $username = $user->username;
      } 

        date_default_timezone_set('Asia/Manila');
        $date_rented = date('M-d-Y');
        
        $month = date('M');
        $day = date('d')+3;
        $year = date('Y');

        $date_will_return = $month."-".$day."-".$year; 

        $payment = 100*$no_copies;
     
    ?>


<div class="navbar"> 

        <ul>
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />

        <li><a id="" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">MOVIE</a></li>

        <li><a id="" href="<?php echo base_url('myfunctions/UserTransactionPage/'.$user_id); ?>">LOGS</a></li>
        <div class="profile">
        <li ><a  id="user" href="<?php echo base_url('myfunctions/UserUpdateAccountPage/'.$user_id); ?>"> <img  class="icons" src="<?php echo base_url('assets/images/user.png');?>">Hi,<?php echo " $firstname"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'><img  height="25" width="25" src="<?php echo base_url('assets/images/logout.png');?>">LOGOUT</a></li>
        </div>

        
        
        
    
      </ul>

    </div>

    <div class="movie-info">
    <div class="poster">
       <img id="movie-info-poster" src="<?php echo base_url('uploads/'.$movie_pic.''); ?>"  /> 
           <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      </div>
    </div>
    </div> 
    
    <div class="body-movie1">
    
      
       <form action="<?php echo base_url('myfunctions/RentDVDModel/'.$movie_id.'/'.$user_id); ?>" method="post" class="form-horizontal" role="form">
           
    <h3 > Your Personal information</h3>  
    <div class="form-group">
    
      
      <div class="col-sm-10">
           First Name :
        <input type="text" class="form-control"  id="firstname" name="firstname" value="<?php echo $firstname; ?>" readonly>
      </div>
    </div></br>
    <div class="form-group">
     
      <div class="col-sm-10">
        Middle Name:
        <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $middlename; ?>" readonly>
      </div>
    </div></br>
    <div class="form-group">
      
      <div class="col-sm-10"> 
         Last Name :         
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>" readonly>
      </div>
    </div>

</div>
<div class=" body-movie2">
    <h5 style="color: red; font-weight:bold; padding-left:30px;"><?php echo @$msg; ?></h5>
    <h3 style=" padding-left:30px">Your Rental Information</h3>  
    <div class="form-group">
      
      <div class="col-sm-10">  
        Movie Title:        
        <input type="text" class="form-control" name="movie_title" value="<?php echo $movie_title; ?>" readonly>
      </div>
    </div><br>
           
    <div class="form-group">
      
      <div class="col-sm-10">  
        Movie Category:        
        <input type="text" class="form-control" name="movie_category" value="<?php echo $movie_category; ?>" readonly>
      </div>
    </div><br>
           
    <div class="form-group">

      
      <div class="col-sm-10"> 
      No. of Copies:         
        <input type="text" class="form-control" name="no_copies" value="<?php echo $no_copies; ?>" readonly>
      </div>
    </div> <br>
    <div class="form-group">
      
      <div class="col-sm-10"> 
        Date Rented:         
        <input type="text" class="form-control" name="date_rented" value="<?php echo $date_rented; ?>" readonly>
      </div>
    </div><br>
    <div class="form-group">
      <div class="col-sm-10">     
        Date Return:
        <input type="text" class="form-control" name="date_will_return" value="<?php echo $date_will_return; ?>" readonly>
      </div>
    </div><br>

        <div class="form-group">
      <div class="col-sm-10"> 
        Payment:         
        <input type="text" class="form-control" name="payment" style="color:red;" value="<?php echo $payment; ?>" readonly>
      </div>,
    </div> <br><br>
   
    <div class="form-group"> 
          <div class="col-sm-10">
      <label>Your Payment</label><br>
      *You Must enter the exact amount.          
        <input type="number" style=" width:80px; color: black"class="form-control" name="to_pay">
          </div>
    </div> <br><br><br>

    
    
    <div class="form-group" >        
      <div class="col-sm-10">

        <button type="submit" class="btn btn-default">Rent DVD</button>
        <a style="color: black;"href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>" class="btn btn-default">Back to Home</a>
      </div>
    </div>
        
  </form>
         
    </div>
</div>


</div>
    
    
</div>

<br/>



