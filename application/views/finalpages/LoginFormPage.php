 
<?php $this->load->view('layouts/header')?>



   <nav class="navbar navbar-default navbar-fixed-top"> 

        <ul >
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />


            <li><a id="" href="<?php echo base_url('myfunctions/index'); ?>"><img class="icons" src="<?php echo base_url('assets/images/home-icon.png');?>"/></a></li>
            <li><a id="" href="<?php echo base_url('myfunctions/GuestMoviePage'); ?>">MOVIES</a></li>
            <li><a id="active" style="margin-left:600px;" href="<?php echo base_url('myfunctions/LoginFormPage'); ?>"><img style="height: 20px; width:20px;"class="icons" src="<?php echo base_url('assets/images/signin.png');?>"/>SIGN IN</a></li>
            <li><a  id="" href="<?php echo base_url('myfunctions/RegisterPage'); ?>"><img class="icons" src="<?php echo base_url('assets/images/signup.png');?>"/>SIGN UP</a></li>
        </ul>

    </nav>

<div class="login-wrap">
  <div class="signin-box"  >
      <p ><?php echo  @$msg; ?></p>
        <h3> Login to your Crimson Account</h3>  
    </div>
   <div class="login-container">
       <form class="form-horizontal" action="<?php echo base_url('myfunctions/LoginProcess'); ?>" role="form" method="post">
        <p align='center'><?php echo @$msg; ?></p>

        
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="username" placeholder="ENTER USERNAME">
      </div>
    </div>
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="ENTER PASSWORD">
      </div>
    </div>
    <div class="form-group">
           
    <a href="<?php echo base_url('myfunctions/RegisterPage'); ?>"> Create Your Crimson Leaf Account</a>       
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="LOGIN">
      </div>
    </div>
        
  </form>
  


    </div>
    
</div>
    
    
    
</div>