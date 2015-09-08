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
        <li><a  >Hi,<?php echo " $user->username"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'>LOGOUT</a></li>
        
      </ul>

     </div> 
     <br/>  





<div class="movie-list">
       <div class="movie-categories">


       
        <h3>REPORTS</h3>
         <p>--------------------------<p>
        <a href="<?php echo base_url('myfunctions/AdminShowReportPage/'.$user->user_id); ?>">All</a><br/>

        <?php //start here
        $this->load->model('users_model');
        $this->db->group_by('month_rented');
        $movie_data = $this->users_model->fetch_data_function('table_borrowers', 'month_rented');

        foreach ($movie_data as $genres) :

        ?>

    <a href="<?php echo base_url('myfunctions/AdminShowSelectedReportPage/'.$user->user_id.'/'.$genres->month_rented); ?>"><?php echo $genres->month_rented; ?></a></br>
    <?php endforeach; ?>
       
       </div>
<div class="movie-post2">

            <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th colspan="3">Fullname</th>
                    <th colspan="2">Movie Details</th>
                    <th>Copies Rented</th>
                    <th colspan="2">Date Details</th>
                </tr>
            </thead>
            <tbody>
<?php  foreach ($monthly_reports->result() as $monthly_sales) : ?>
                <tr>
                    <td><?php echo $monthly_sales->firstname; ?></td>
                    <td><?php echo $monthly_sales->middlename; ?></td>
                    <td><?php echo $monthly_sales->lastname; ?></td>
                    <td><?php echo $monthly_sales->movie_title; ?></td>
                    <td><?php echo $monthly_sales->movie_category; ?></td>
                    <td><?php echo $monthly_sales->no_copies; ?></td>
                    <td><?php echo $monthly_sales->date_rented; ?></td>
                    <td><?php echo $monthly_sales->date_will_return; ?></td>
                </tr>
    <?php   endforeach; ?>
            </tbody>
        </table>

            <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Total DVD sales for the month of <?php echo $monthly_sales->month_rented; ?></th>
                    <th>Total sales for the month of <?php echo $monthly_sales->month_rented; ?></th>
                </tr>
            </thead>
            <tbody>

<?php         
$result = mysql_query("SELECT SUM(no_copies) FROM table_borrowers WHERE month_rented='".$monthly_sales->month_rented."'");
  while($rw = mysql_fetch_array($result))
  {
    $dvd_sales = $rw['SUM(no_copies)'];
  }
    $total_sales = $dvd_sales * 100;
  ?>

                <tr>
                    <td><center><?php echo $dvd_sales; ?></center></td>
                    <td><center><?php echo $total_sales; ?></center></td>

                </tr>
  
            </tbody>
        </table>

</div>

           
</div></div>


<br/>
