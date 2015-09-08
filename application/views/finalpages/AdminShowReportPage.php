
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
        <li><a id="active" href="<?php echo base_url('myfunctions/AdminShowReportPage/'.$user->user_id); ?>">REPORTS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminMoviePage/'.$user->user_id); ?>">SHOW MOVIES</a></li>
        <div class="profile">
            <li><a  >Hi,<?php echo " $user->username"; ?></a></li>
            <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'>LOGOUT</a></li>
        </div>
        
      </ul>

</div>



  

<div class="movie-list">
       <div class="movie-categories">


       
        <h3>REPORTS</h3>
         <p>--------------------------<p>
        <a href="<?php echo base_url('myfunctions/AdminShowReportPage/'.$user->user_id); ?>">All</a></br>

        <?php //start here
        $this->load->model('users_model');
        $this->db->group_by('month_rented');
        $movie_data = $this->users_model->fetch_data_function('table_borrowers', 'month_rented');

        foreach ($movie_data as $genres) :

        ?>

    <a href="<?php echo base_url('myfunctions/AdminShowSelectedReportPage/'.$user->user_id.'/'.$genres->month_rented); ?>"><?php echo $genres->month_rented; ?></a></br>
    <?php endforeach; ?>
       
       </div>

       <div class="movie-post">

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th colspan="3">Fullname</th>
                    <th colspan="2">Movie Details</th>
                    <th>Rented Copies</th>
                    <th colspan="2">Date Details</th>
                </tr>
            </thead>

            <tbody>
<?php foreach($record as $daily) : ?>
                <tr>
                  <td><?php echo $daily->firstname; ?></td>
                  <td><?php echo $daily->middlename; ?></td>
                  <td><?php echo $daily->lastname; ?></td>
                  <td><?php echo $daily->movie_title; ?></td>
                  <td><?php echo $daily->movie_category; ?></td>
                  <td><?php echo $daily->no_copies; ?></td>
                  <td><?php echo $daily->date_rented; ?></td>
                  <td><?php echo $daily->date_will_return; ?></td>

                </tr>
                  <?php  endforeach; ?>
            </tbody>
        </table>
      



		</div>
    </div>
      
  </div>
  <br/>