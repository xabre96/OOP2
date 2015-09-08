
<h1>Hello welcome to your Homepage - <?php echo "$lastname, $firstname"; ?></h1>

<a href='<?php echo base_url('myfunctions/logout'); ?>'>Logout</a>

<?php 
$user_id;

foreach ($movie_list as $movie) :

    ?>
    

        <center>
            
                

            <p><?php echo @$msg; ?></p>
        <table border="1" cellpadding="10" cellspacing="0">
        	<thead>
        		<tr>
        			<th>Movie Title</th>
        			<th>Movie Category</th>
        			<th>Number of Copies</th>
                    <th>Movie Picture</th>
                    <th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
                    <tr>
        			<td><?php echo "$movie->movie_title"; ?></td>
        			<td><?php echo "$movie->movie_category"; ?></td>
                    <td><?php echo "$movie->no_copies"; ?></td>
                    <td><img src="<?php echo base_url('uploads/'.$movie->userfile.''); ?>" width="150" height="150"/></td>
                    <td><a href="<?php echo base_url('myfunctions/borrow_dvd/'.$movie->movie_id.'/'.$user_id.''); ?>">Rent DVD</a></td>
        		</tr>
            	</tbody>
            <?php endforeach; ?>

        </table>   

<?php

    $query2 = $this->db->query("SELECT * FROM table_borrowers
                                WHERE user_id = '$user_id' && dvd_status != 'RETURNED'");
    foreach ($query2->result() as $rent)
    {
    ?>


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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                    <td><?php echo "$rent->firstname"; ?></td>
                    <td><?php echo "$rent->middlename"; ?></td>
                    <td><?php echo "$rent->lastname"; ?></td>
                    <td><?php echo "$rent->movie_title"; ?></td>
                    <td><?php echo "$rent->movie_category"; ?></td>
                    <td><?php echo "$rent->no_copies"; ?></td>
                    <td><?php echo "$rent->date_rented"; ?></td>
                    <td><?php echo "$rent->date_will_return"; ?></td>
                    <td><a href="<?php echo base_url('myfunctions/return_form/'.$rent->movie_id.'/'.$rent->borrow_id.''); ?>">Return</a></td>
                </tr>
    <?php } ?>
                </tbody>
        </table>  
         </center>



