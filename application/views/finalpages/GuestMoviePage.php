

   <nav class="navbar navbar-default navbar-fixed-top"> 

        <ul >
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />


            <li><a id="" href="<?php echo base_url('myfunctions/index'); ?>"><img class="icons" src="<?php echo base_url('assets/images/home-icon.png');?>"/></a></li>
            <li><a id="active" href="<?php echo base_url('myfunctions/GuestMoviePage'); ?>">MOVIES</a></li>
            <li><a style="margin-left:600px;" id="" href="<?php echo base_url('myfunctions/LoginFormPage'); ?>"><img style="height: 20px; width:20px;"class="icons" src="<?php echo base_url('assets/images/signin.png');?>"/>SIGN IN</a></li>
            <li><a  id="" href="<?php echo base_url('myfunctions/RegisterPage'); ?>"><img class="icons" src="<?php echo base_url('assets/images/signup.png');?>"/>SIGN UP</a></li>
        </ul>

    </nav>


<div class="movie-list">
       <div class="movie-categories">


        <h3>Categories</h3>
        <a href="<?php echo base_url('myfunctions/GuestMoviePage/'); ?>">All</a><br/>

        <?php //start here
        $this->load->model('users_model');
        $this->db->group_by('movie_category');
        $movie_data = $this->users_model->fetch_data_function('table_movies', 'movie_category');

        foreach ($movie_data as $genres) :

        ?>
    <a href="<?php echo base_url('myfunctions/GuestSelectedCategoryPage/'.$genres->movie_category); ?>">
    <?php echo $genres->movie_category; ?></a></br>
    <?php endforeach; ?>
       
       </div>
<div class="movie-post">

<?php $movie_list = $this->users_model->fetch_data_function('table_movies', 'movie_category'); ?>
  <?php  foreach ($movie_list as $movie) : ?>         

                        <div class="movie-container">
                            <div class="thumbnail">
                               <a href="<?php echo base_url('myfunctions/GuestSelectedMoviePage/'.$movie->movie_id); ?>"><img img height="300" width="185"  value="lala" href="Click to show details." src="<?php echo base_url('uploads/'.$movie->userfile.''); ?>"/> </a>
                                <div class="caption">
                                    <p><?php echo $movie->movie_title ?></p>
                                    <p><a href="<?php echo base_url('myfunctions/GuestSelectedMoviePage/'.$movie->movie_id); ?>" class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-new-window"></span> See more..</a></p>
                                </div>
                            </div>
                        </div>
 <?php endforeach; ?>

</div>

</div>
</div>