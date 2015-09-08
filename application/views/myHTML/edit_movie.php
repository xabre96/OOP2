    <p><?php echo @$msg; ?></p>

    <?php 
  
      foreach($movie_data->result() as $row)
      {
        $movie_id = $row->movie_id;
        $movie_title = $row->movie_title;
        $movie_category = $row->movie_category;
        $no_copies = $row->no_copies;
        $movie_pic = $row->userfile;
      } 

    ?>

      <form action="<?php echo base_url('myfunctions/edit_movie_function/'.$movie_id); ?>" method="post" enctype="multipart/form-data">

      <table width='300' border='0' align='center' cellpadding='3' cellspacing='17'>
      <hr/>
      <th align='left'>

      <tr><td><label for="">Movie Title:</label></td>
      <td><input type="text" name="movie_title" placeholder="Movie Title" size="30" value="<?php echo "$movie_title"; ?>"/></th>

      <tr><td><label for="">Movie Category:</label></td>
      <td><input type="text" name="movie_category" placeholder="Movie Category" size="30" value="<?php echo "$movie_category"; ?>" /></td>
            
      <tr><td><label for="">Number of Copies:</label></td>
      <td><input type="number" name="no_copies" placeholder="Number of Copies" size="30" min="1" max="1000" value="<?php echo "$no_copies"; ?>"/></td>
            
      <img src="<?php echo base_url('uploads/'.$movie_pic.''); ?>" width="150" height="150"/></td>


<tr><td><label for="">Picture</label></td>
  <td><input type="file" name="userfile" size="20" /></td>


<tr><td><td><input type="submit" Value="Add Movie" name="submit"></td></td>




      </th>
      </table>
    </form>   