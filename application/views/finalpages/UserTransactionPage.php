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

        <li><a id="" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">MOVIE</a></li>

        <li><a id="active" href="<?php echo base_url('myfunctions/UserTransactionPage/'.$user_id); ?>">LOGS</a></li>
        <div class="profile">
        <li ><a  id="user" href="<?php echo base_url('myfunctions/UserUpdateAccountPage/'.$user_id); ?>"> <img  class="icons" src="<?php echo base_url('assets/images/user.png');?>">Hi,<?php echo " $firstname"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'><img  height="25" width="25"  src="<?php echo base_url('assets/images/logout.png');?>">LOGOUT</a></li>
        </div>

        
        
        
    
      </ul>

    </div>   
     <p align='center'><?php echo @$msg; ?></p>





<div class="movie-list">

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>

                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Movie Title</th>
                    <th>Movie Category</th>
                    <th>Number of Copies</th>
                    <th>Date Rented</th>
                    <th>Date Will Return</th>
                    <th>DVD Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($record as $rent) : ?>
                    <tr>
                    <td><?php echo $rent->firstname; ?></td>
                    <td><?php echo $rent->middlename; ?></td>
                    <td><?php echo $rent->lastname; ?></td>
                    <td><?php echo $rent->movie_title; ?></td>
                    <td><?php echo $rent->movie_category; ?></td>
                    <td><?php echo $rent->no_copies; ?></td>
                    <td><?php echo $rent->date_rented; ?></td>
                    <td><?php echo $rent->date_will_return; ?></td>
                    <td><?php echo $rent->dvd_status; ?></td>

                    <?php if($rent->dvd_status === 'RETURNED')
                    {
                    echo "<td></td>";
                    }
                    elseif($rent->dvd_status === 'PENDING')
                    {
                    echo "<td></td>";
                    }
                    else
                    {
                    echo "<td><a href=".base_url('myfunctions/UserReturnPending/'.$user_id.'/'.$rent->borrow_id.'/'.$rent->movie_id.'').">Return</a></td>";
                    
                    }
                    ?>
    <?php endforeach; //end here?> 
                </tr>
            </tbody>
                
        </table>  

  </div>