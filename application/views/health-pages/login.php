     <div class="navbar"> 

    <ul>

        <li><a id="" href="<?php echo base_url('myfunctions/index/'); ?>">News & Publication</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/guidelines/'); ?>">Guidelines</a></li>
        <li><a id="" href="">About Us</a></li>
        <li><a id="active" href="<?php echo base_url('myfunctions/login_form/'); ?>">Login</a></li>
    </ul>

        


</div>
<div class="movie-info">
  <form class="form-horizontal" action="<?php echo base_url('myfunctions/login_process'); ?>" method="post" enctype="multipart/form-data" role="form">
    <div class="body-movie1" style="margin-left:250px;">
      <p align='center'><?php echo @$msg; ?></p>        
          <!--div class="form-group">
     
            <div class="col-sm-10">
              <input style="color:black;" type="file" name="userfile" class="file">
           </div>
          </div-->
        
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>Username:</h5><input type="text" class="form-control" id="movie_title" name="username" placeholder="Barangay">
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <h5>Password:</h5><input type="password" class="form-control" id="movie_category" name="password" placeholder="Password" >
            </div>
          </div>

          <div class="body-movie1" >  
                  <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">Login</button>
          </div>
        </div>
       </div>
       </div>
                  
  </form>



      </div>
 
