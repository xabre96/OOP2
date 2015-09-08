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

        <li><a id="active" href="<?php echo base_url('myfunctions/AdminTransactionPage/'.$user->user_id); ?>">LOGS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowUsersPage/'.$user->user_id); ?>">SHOW USERS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminShowReportPage/'.$user->user_id); ?>">REPORTS</a></li>
        <li><a id="" href="<?php echo base_url('myfunctions/AdminMoviePage/'.$user->user_id); ?>">SHOW MOVIES</a></li>
        <div class="profile">
            <li><a  >Hi,<?php echo " $user->username"; ?></a></li>
            <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'>LOGOUT</a></li>
        </div>
        
      </ul>

</div> 


<div class="movie-list">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Movie Title</th>
                    <th>Movie Category</th>
                    <th>Rented Copies</th>
                    <th>DVD Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
    <?php   foreach ($record->result() as $person) : ?>
                <tr>
                    <td><?php echo $person->firstname; ?></td>
                    <td><?php echo $person->middlename; ?></td>
                    <td><?php echo $person->lastname; ?></td>
                    <td><?php echo $person->movie_title; ?></td>
                    <td><?php echo $person->movie_category; ?></td>
                    <td><?php echo $person->no_copies; ?></td>
                    <td><?php echo $person->dvd_status; ?></td>
                   
                    <?php

                    if($person->dvd_status === 'PENDING')
                    {
                        echo "<td><a href='" . base_url('myfunctions/UserReturnDVDProcess/'.$person->borrow_id.'/'.$user_id.'/'.$person->movie_id.'') . "'>ACCEPTED</a></td>";
                    }
                    elseif($person->dvd_status === 'RETURNED')
                    {
                        echo "<td></td>";
                    }
                    elseif($person->dvd_status === 'CURRENTLY BORROWED')
                    {
                        echo "<td></td>";
                    }
                    ?>
                </tr>
                     <?php   endforeach; ?>
            </tbody>
        </table>

<br/>

</div>