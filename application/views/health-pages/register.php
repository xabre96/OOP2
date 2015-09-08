    <?php
          foreach($user_data->result() as $user)
      {
        $user_id = $user->user_id;
        $username = $user->user_account;
      } 

    ?> 


     <div class="navbar"> 

    <ul>

        <li><a id="active" href="<?php echo base_url('myfunctions/register/'.$user_id); ?>">Add User</a></li>
        <li id=""><a id="" href="<?php echo base_url('myfunctions/logout'); ?>">Logout</a></li>
       
    </ul>

        


</div>
<div class="movie-info">
  <form class="form-horizontal" action="<?php echo base_url('myfunctions/register_process/'.$user_id); ?>" method="post" enctype="multipart/form-data" role="form">
    <div class="body-movie1" style="margin-left:250px;">
      <p align='center'><?php echo @$msg; ?></p>        
          <!--div class="form-group">
     
            <div class="col-sm-10">
              <input style="color:black;" type="file" name="userfile" class="file">
           </div>
          </div-->
        
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>Username:</h5><input type="text" class="form-control" id="movie_title" name="username" placeholder="Zip Code">
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <h5>Password:</h5><input type="password" class="form-control" id="movie_category" name="password" placeholder="Password" >
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <h5>Password:</h5><input type="password" class="form-control" id="movie_category" name="rtpassword" placeholder="Re-type Password" >
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <h5>User Type:</h5><select name="user_type" class="form-control">
                <option value="0">User</option>
                <option value="1">Admin</option>
              </select>
            </div>
          </div>
    
        <div class="form-group">
      
            <div class="col-sm-10">   
            <h5>User Status:</h5>       
              <select name="user_status" class="form-control">
                <option value="0">Not Active</option>
                <option value="1">Active</option>
              </select>
            </div>
          </div>
<div class="body-movie1" >  
                  <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">Add User</button>
          </div>
        </div>
       </div>
                  
  </form>





  
</div>
    
</div>

       <div class="user-table">

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Account</th>
                    <th>User Type</th>
                    <th>Status</th>
                    <th>Action</th>
                 
                </tr>
            </thead>
            <tbody>
    <?php   foreach ($records->result() as $person) : ?>
                <tr>
                    <td><?php echo $person->user_id; ?></td>
                    <td><?php echo $person->user_account; ?></td>
                    <td><?php echo $person->user_type; ?></td>
                    <td><?php echo $person->user_status; ?></td>
                    <td><a href="<?php echo base_url('myfunctions/delete_user/'.$person->user_id.'/'.$user_id.''); ?>">Delete</a></td>

                </tr>
    <?php   endforeach; ?>
            </tbody>
        </table>



    </div>
    
   
</div>
