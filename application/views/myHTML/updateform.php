    


    <p><?php echo @$msg; ?></p>


<?php 
  
      foreach($user_data->result() as $row)
      {
        $user_id = $row->user_id;
        $firstname = $row->firstname;
        $middlename = $row->middlename;
        $lastname = $row->lastname;
        $username = $row->username;
      } 

    ?>
        
      <form action="<?php echo base_url("myfunctions/update_user_function/".$user_id); ?>" method="post">
      <table width='300' border='0' align='center' cellpadding='3' cellspacing='17'>
      <th align='left'>
      <tr><td><label for="">Update Firstname</label></td>
      <td><input type="text" name="firstname" placeholder="Firstname" size="30" value="<?php echo $firstname; ?>"/></td>
      <br />

      <tr><td><label for="">Update Middlename</label></td>
      <td><input type="text" name="middlename" placeholder="Middlename" size="30" value="<?php echo $middlename; ?>" /></td>
      <br />
            
      <tr><td><label for="">Update Lastname</label></td>
      <td><input type="text" name="lastname" placeholder="Lastname" size="30" value="<?php echo $lastname; ?>"/></td>
      <br />
            
      <tr><td><label for="">Update Username</label></td>
      <td><input type="text" name="username" placeholder="Username" size="30" value="<?php echo $username; ?>"/></td>
      <br />

            

            <tr><td><td><input type="submit" Value="Update" name="submit"></td></td>
          </th>
        </table>

    </form>   