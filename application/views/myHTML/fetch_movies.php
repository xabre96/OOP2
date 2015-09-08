<?php
    $query = $this->db->get('table_movies');
    foreach ($query->result() as $movie)
    {
    ?>

        <center>
        <table border="1" cellpadding="10" cellspacing="0">
        	<thead>
        		<tr>
        			<th>Movie Title</th>
        			<th>Movie Category</th>
        			<th>Number of Copies</th>
                    <th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
                    <tr>
        			<td><?php echo $movie->movie_title; ?></td>
        			<td><?php echo $movie->movie_category; ?></td>
                    <td><?php echo $movie->no_copies; ?></td>
                    <td><a href="<?php echo base_url('myfunctions/delete_movies/'.$movie->movie_id.''); ?>">Delete</a>|
                        <a href="<?php echo base_url('myfunctions/borrow_dvd/'.$movie->movie_id.''); ?>">Borrow</a></td>
        		</tr>
                <?php } ?>
            	</tbody>

        </table>   
         </center>