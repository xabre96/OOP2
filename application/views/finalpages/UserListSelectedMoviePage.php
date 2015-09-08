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

        <li><a id="active" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">MOVIE</a></li>

        <li><a id="" href="<?php echo base_url('myfunctions/UserTransactionPage/'.$user_id); ?>">LOGS</a></li>

        <div class="profile">
        <li ><a  id="user" href="<?php echo base_url('myfunctions/UserUpdateAccountPage/'.$user_id); ?>"> <img  class="icons" src="<?php echo base_url('assets/images/user.png');?>">Hi,<?php echo " $firstname"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'><img  height="25" width="25"  src="<?php echo base_url('assets/images/logout.png');?>">LOGOUT</a></li>
        </div>

        
        
        
    
      </ul>

    </div>




<div class="movie-list">
       <div class="movie-categories">


        <h3>Categories</h3>
        <p>--------------------------<p>
        <a href="<?php echo base_url('myfunctions/UserHomePage/'.$user->user_id); ?>">All</a><br/>

        <?php //start here
        $this->load->model('users_model');
        $this->db->group_by('movie_category');
        $movie_data = $this->users_model->fetch_data_function('table_movies', 'movie_category');

        foreach ($movie_data as $genres) :

        ?>

    <a href="<?php echo base_url('myfunctions/UserListSelectedMoviePage/'.$user->user_id.'/'.$genres->movie_category); ?>"><?php echo $genres->movie_category; ?></a></br>
    <?php endforeach; ?>
       
       </div>
<div class="movie-post">
 
    <?php  foreach ($movie_list->result() as $movie) : ?>
        <div class="movie-container">
            <div class="thumbnail">
                <a href="<?php echo base_url('myfunctions/UserMovieInfoPage/'.$movie->movie_id.'/'.$user_id); ?>"><img height="300" width="185"   value="lala" href="Click to show details." src="<?php echo base_url('uploads/'.$movie->userfile.''); ?>"/> </a>
                <div class="caption">
                    <p><?php echo $movie->movie_title ?></p>
                    <p><a href="<?php echo base_url('myfunctions/UserMovieInfoPage/'.$movie->movie_id.'/'.$user_id); ?>" class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-new-window"></span> See more..</a></p>
                </div>
            </div>
        </div>


    <?php endforeach; ?>


    

</div>

</div>
</div>