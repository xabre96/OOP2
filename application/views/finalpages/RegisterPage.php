 
<?php $this->load->view('layouts/header')?>


    <nav class="navbar navbar-default navbar-fixed-top"> 

        <ul >
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />


            <li><a id="" href="<?php echo base_url('myfunctions/index'); ?>"><img class="icons" src="<?php echo base_url('assets/images/home-icon.png');?>"/></a></li>
            <li><a id="" href="<?php echo base_url('myfunctions/GuestMoviePage'); ?>">MOVIES</a></li>
            <li><a id ="" style="margin-left:600px;" id="" href="<?php echo base_url('myfunctions/LoginFormPage'); ?>"><img style="height: 20px; width:20px;"class="icons" src="<?php echo base_url('assets/images/signin.png');?>"/>SIGN IN</a></li>
            <li><a  id="active" href="<?php echo base_url('myfunctions/RegisterPage'); ?>"><img class="icons" src="<?php echo base_url('assets/images/signup.png');?>"/>SIGN UP</a></li>
        </ul>

    </nav>

<div class="signup-wrap">
    <div class="form-box"  >
      <p ><?php echo  @$msg; ?></p>
        <h3> Create Your Account</h3> 
    </div>
   <div class="signup-container">
       <form action="<?php echo base_url('myfunctions/RegistrationProcess'); ?>" method="post" class="form-horizontal" role="form">
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="ENTER FIRSTNAME">
      </div>
    </div>
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="ENTER MIDDLENAME">
      </div>
    </div>
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="ENTER LASTNAME">
      </div>
    </div>


    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" name="email" placeholder="ENTER EMAIL">
      </div>
    
    </div>
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="ENTER CONTACT NUMBER">
      </div>
    </div>
           
               <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="address" name="address" placeholder="ENTER ADDRESS">
      </div>
    </div>
           
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="username" name="username" placeholder="ENTER USERNAME">
      </div>
    </div> 
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" name="password" placeholder="ENTER PASSWORD">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="re_password" name="rtpassword" placeholder="CONFIRM PASSWORD">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-10">
        <button  type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
        
  </form>
  


    </div>
    
</div>
    
    
    
</div>

