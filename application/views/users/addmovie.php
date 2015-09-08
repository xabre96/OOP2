
    



<div class="navbar"> 

    <ul>
        <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson.png'); ?>" rel="stylesheet" />

        <li><a id="" href="<?php echo base_url(''); ?>">TRANSACTION</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/FetchData'); ?>">SHOW USERS</a></li>
        <li><a id="active" href="<?php echo base_url('index.php/addmovie'); ?>">ADD MOVIES</a></li>
        <li><a id="" href="<?php echo base_url(''); ?>">LOGIN</a></li>
    </ul>
        


</div>
  
   <div class="login-container">
       <form class="form-horizontal" role="form">
        
        <div class="form-group">
     
      <div class="col-sm-10">
        <input type="file" id="image" class="file">
      </div>
    </div>
        
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" name="title" placeholder="MOVIE TITLE">
      </div>
    </div>
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="category" name="category" placeholder="MOVIE CATEGORY" >
      </div>
    </div>
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="language" name="language" placeholder="LANGUAGE">
      </div>
    </div>
    
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="rating" name="rating" placeholder="RATING">
      </div>
    </div>
           
           
    <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="release_year" name="release_year" placeholder="RELEASE YEAR">
      </div>
    </div>
        <div class="form-group">
      
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="no_copies" name="no_copies" placeholder="NUMBER OF COPIES">
      </div>
    </div>
           
    <div class="form-group">
      
      <div class="col-sm-10">          
          <textarea type="text" class="form-control" id="actors" name="actors" placeholder="ACTORS"></textarea>
      </div>
    </div>
           
    <div class="form-group">
      
      <div class="col-sm-10">          
        <textarea type="text" class="form-control" id="description" name="description" placeholder="MOVIE DESCRIPTION"></textarea>
          
      </div>
    </div>
    <div class="form-group">        
      <div class=" col-sm-10">
        <button type="submit" id="add_movie" class="btn btn-default">ADD MOVIE</button>
      </div>
    </div>
        
  </form>
  


    </div>
    

    
    
    
</div>

		
      
