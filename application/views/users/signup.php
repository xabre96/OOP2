 
<?php $this->load->view('layouts/header')?>


<div class="navbar"> 

    <ul>
        <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson.png'); ?>" rel="stylesheet" />

        <li><a id="" href="<?php echo base_url('index.php/index'); ?>">HOME</a></li>
        <li><a id="" href="<?php echo base_url('index.php/movie'); ?>">MOVIES</a></li>
        <li><a id="" href="<?php echo base_url('index.php/login'); ?>">LOGIN</a></li>
    </ul>
        


</div>
  
   <div class="login-container">
       <form action="<?php echo base_url('myfunctions/registration'); ?>" method="post" class="form-horizontal" role="form">
           
    <h3 style="color:white;"> Create Your Account</h3>  
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
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
        
  </form>
  


    </div>
    

    
    
    
</div>

