    <p><?php echo @$msg; ?></p>
      <form action="<?php echo base_url('myfunctions/add_movies'); ?>" method="post" enctype="multipart/form-data">

      <table width='300' border='0' align='center' cellpadding='3' cellspacing='17'>
      <hr/>
      <th align='left'>

      <tr><td><label for="">Movie Title:</label></td>
      <td><input type="text" name="movie_title" placeholder="Movie Title" size="30" /></th>

      <tr><td><label for="">Movie Category:</label></td>
      <td><input type="text" name="movie_category" placeholder="Movie Category" size="30" /></td>
            
      <tr><td><label for="">Number of Copies:</label></td>
      <td><input type="number" name="no_copies" placeholder="Number of Copies" size="30" min="1" max="1000"/></td>
            
      


<tr><td><label for="">Picture</label></td>
  <td><input type="file" name="userfile" size="20" /></td>


<tr><td><td><input type="submit" Value="Add Movie" name="submit"></td></td>




      </th>
      </table>
    </form>   