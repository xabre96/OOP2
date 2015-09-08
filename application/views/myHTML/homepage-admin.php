
<h1>Hello welcome to your Homepage - <?php echo "$lastname, $firstname"; ?></h1>
<?php $user_id; ?>
<a href='<?php echo base_url('myfunctions/logout'); ?>'>Logout</a>
<a href="<?php echo base_url('myfunctions/add_movies_page'); ?>">Add Movies</a>

<?php foreach ($movie_list as $movie) : ?>
    

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
                    <td><a href="<?php echo base_url('myfunctions/edit_movie/'.$movie->movie_id.''); ?>">Edit Movie</a></td>
                </tr>
                </tbody>
            <?php endforeach; ?>

        </table>    

<hr/>

<h1>List of Renters</h1>
<?php foreach($rent_list as $rent) : ?>
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
                   <!-- <td><a href="<?php echo base_url('myfunctions/return_form/'.$movie_id.'/'.$user_id.''); ?>">Return</a></td> -->
                </tr>
    
                </tbody>
<?php endforeach; ?>
        </table>  
        <hr/>
   
   <h1>List of Renters (RETURNED)</h1>

<?php
    $this->db->where('dvd_status', 'RETURNED');
    $query3 = $this->db->get('table_borrowers');
    foreach ($query3->result() as $rent)
    {

        $firstnamess = $rent->firstname;
        $middlenamess = $rent->middlename;
        $lastnamess = $rent->lastname;
        $movie_title = $rent->movie_title;
        $movie_category = $rent->movie_category;
        $no_copies = $rent->no_copies;
        $date_rented = $rent->date_rented;
        $date_will_return = $rent->date_will_return;

  
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
                </tr>
            </thead>
            <tbody>
                    <tr>
                    <td><?php echo "$firstnamess"; ?></td>
                    <td><?php echo "$middlenamess"; ?></td>
                    <td><?php echo "$lastnamess"; ?></td>
                    <td><?php echo "$movie_title"; ?></td>
                    <td><?php echo "$movie_category"; ?></td>
                    <td><?php echo "$no_copies"; ?></td>
                    <td><?php echo "$date_rented"; ?></td>
                    <td><?php echo "$date_will_return"; ?></td>
                <!-- <td><a href="<?php echo base_url('myfunctions/return_form/'.$movie_id.'/'.$username.''); ?>">Return</a></td> -->
    
                </tbody>
<?php } ?>
        </table>  
         </center>




         </center>

         ?>

