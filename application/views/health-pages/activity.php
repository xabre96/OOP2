    <?php 
          foreach($user_data->result() as $user)
      {
        $user_id = $user->user_id;
        $username = $user->user_account;
      } 

    ?> 


     <div class="navbar"> 

    <ul>

        <li><a id="active" href="<?php echo base_url('myfunctions/register/'.$username); ?>">Add Activity</a></li>
        <li id=""><a id="" href="<?php echo base_url('myfunctions/logout'); ?>">Logout</a></li>
       
    </ul>

        


</div>
<div class="movie-info">
  <form class="form-horizontal" action="<?php echo base_url('myfunctions/post_activity/'.$user_id); ?>" method="post" enctype="multipart/form-data" role="form">
    <div class="body-movie1" style="margin-left:250px;">
      <p align='center'><?php echo @$msg; ?></p>        
    
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>News Title:</h5>
              <input type="text" class="form-control" id="movie_title" name="news_title" placeholder="Title">
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">    
            <h5>News Author:</h5>      
              <input type="text" class="form-control" id="movie_category" value='<?php echo "$username" ?>' name="news_author" readonly >
            </div>
          </div>
      </div>  
      <div class="body-movie1"  >      
        <div class="form-group">
      
          <div class="col-sm-10"> 
          <h5>Content:</h5>         
            <textarea style=" margin-bottom:10px;" cols="100" rows="15" type="text" class="form-control" id="movie_description" name="news_content" Placeholder="..." size="30" ></textarea>
          </div>
        </div>

        <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">Post News</button>
          </div>
       </div>
    </div>
  </form>

  
</div>


<div class="activity-content">


<?php

        $query = mysql_query("SELECT * from table_news WHERE news_author = '$username'");
    while($r=mysql_fetch_array($query)){
        echo "<h1>".$r['news_title']."</h1>";
        echo "<h3>".$r['news_content']."</h3>";

        echo "<h6><i>Posted by: Barangay ".$r['news_author']."</i></h6>";
        ?>
        <a href='<?php echo base_url('myfunctions/update_activity/'.$r['news_id'].'/'.$r['news_author'].'/'.$user_id.''); ?>'>Update Activity</a> |
        <a href='<?php echo base_url('myfunctions/delete_activity/'.$r['news_id'].'/'.$r['news_author'].'/'.$user_id.''); ?>'>Delete Activity</a><hr/>
              <?php  } ?>

    
                  
</div>





  
</div>
    
</div>

    
   
</div>
