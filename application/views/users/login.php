 
<?php $this->load->view('layouts/header')?>


<div class="navbar"> 

    <ul>
        <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson.png'); ?>" rel="stylesheet" />

        <li><a id="" href="<?php echo base_url('index.php/index'); ?>">HOME</a></li>
        <li><a id="" href="<?php echo base_url('index.php/movie'); ?>">MOVIES</a></li>
        <li><a id="active" href="<?php echo base_url('index.php/login'); ?>">LOGIN</a></li>
    </ul>
        


</div>
  
   <div class="login-container">
       <form class="form-horizontal" action="<?php echo base_url('myfunctions/login'); ?>" role="form" method="post">
        
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
           
    <a href="<?php echo base_url('index.php/signup'); ?>"> Create Your Crimson Leaf Account</a>       
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="LOGIN">
      </div>
    </div>
        
  </form>
  


    </div>
    

    
    
    
</div>

