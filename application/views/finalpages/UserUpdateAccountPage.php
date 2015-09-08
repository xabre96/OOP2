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
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />

      <li><a id="" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">MOVIE</a></li>

        <li><a id="" href="<?php echo base_url('myfunctions/UserTransactionPage/'.$user_id); ?>">LOGS</a></li>
        <div class="profile">
         <li><img class="icons" src="<?php echo base_url('assets/images/user.png');?>"><a href="<?php base_url('myfunctions/UserUpdateAccountPage');?>" >Hi,<?php echo " $firstname"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/logoutprocess'); ?>'><img class="icons" src="<?php echo base_url('assets/images/logout.png');?>"></a></li>
        </div>

        
        
        
    
      </ul>

    </div>
<div class="login-wrap">
    <div class="signin-box"  >
      <p ><?php echo  @$msg; ?></p>
        <h3> Update Account</h3>  
    </div>
   <div class="login-container">
      
       <form class="form-horizontal" action="<?php echo base_url('myfunctions/UpdateProcess/'.$user_id); ?>" role="form" method="post">
        <p align='center'><?php echo @$msg; ?></p>

        
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="username" value="<?php echo $username; ?>">
      </div>
    </div>
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="ENTER PASSWORD">
      </div>
    </div>

        <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="rtpassword" placeholder="RE-TYPE PASSWORD">
      </div>
    </div>
        <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="UPDATE">
      </div>
    </div>
  </form>
</div>
</div>
</div>