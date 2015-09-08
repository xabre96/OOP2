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
        <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>" rel="stylesheet" />

        <li><a id="" href="<?php echo base_url('myfunctions/AdminTransactionPage/'.$user->user_id); ?>">LOGS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowUsersPage/'.$user->user_id); ?>">SHOW USERS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowReportPage/'.$user->user_id); ?>">REPORTS</a></li>
        <li><a id="active" href="<?php echo base_url('myfunctions/AdminMoviePage/'.$user->user_id); ?>">SHOW MOVIES</a></li>
        <div class="profile">
            <li><a  >Hi,<?php echo " $user->username"; ?></a></li>
            <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'>LOGOUT</a></li>
        </div>
        
      </ul>

</div>  


<div class="movie-list">
       <div class="movie-categories">


            <h3>MOVIES</h3>
            <p>--------------------------</p>
            <a href="<?php echo base_url('myfunctions/AdminAddMoviePage/'.$user->user_id); ?>">Add New Movies</a>
            <p>--------------------------<p>
            <h3>Category</h3>
            <a href="<?php echo base_url('myfunctions/AdminMoviePage/'.$user->user_id); ?>">All</a><br/>

            <?php //start here
            $this->load->model('users_model');
            $this->db->group_by('movie_category');
            $movie_data = $this->users_model->fetch_data_function('table_movies', 'movie_category');

            foreach ($movie_data as $genres) :?>
                <a href="<?php echo base_url('myfunctions/AdminListSelectedMoviePage/'.$user->user_id.'/'.$genres->movie_category); ?>"><?php echo $genres->movie_category; ?></a></br>
            <?php endforeach; ?>
       
       </div>
<div class="movie-post">
 
    <?php  foreach ($movie_list->result() as $movie) : ?>
        <div class="movie-container">
            <div class="thumbnail">
                <a href="<?php echo base_url('myfunctions/AdminMovieInfoPage/'.$movie->movie_id.'/'.$user_id); ?>"><img height="300" width="185"   value="lala" href="Click to show details." src="<?php echo base_url('uploads/'.$movie->userfile.''); ?>"/> </a>
                <div class="caption">
                    <p><?php echo $movie->movie_title ?></p>
                    <p><a href="<?php echo base_url('myfunctions/AdminMovieInfoPage/'.$movie->movie_id.'/'.$user_id); ?>" class="btn btn-info btn-sm" role="button"><span ></span> See more..</a></p>
                </div>
            </div>
        </div>


    <?php endforeach; ?>


    

</div>
</div>
</div>
