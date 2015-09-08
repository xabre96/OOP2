    <p><?php echo @$msg; ?></p>
      <?php echo validation_errors(); ?>
      <form action="<?php echo base_url('myfunctions/registration'); ?>" method="post">

      <table width='300' border='0' align='center' cellpadding='3' cellspacing='17'>
      <hr/>
      <th align='left'>

      <tr><td><label for="">Firstname:</label></td>
      <td><input type="text" name="firstname" placeholder="Firstname" size="30" /></th>

      <tr><td><label for="">Middlename:</label></td>
      <td><input type="text" name="middlename" placeholder="Middlename" size="30" /></td>
            
      <tr><td><label for="">Lastname:</label></td>
      <td><input type="text" name="lastname" placeholder="Lastname" size="30" /></td>
            
      <tr><td><label for="">Username:</label></td>
      <td><input type="text" name="username" placeholder="Username" size="30" /></td>

      <tr><td><label for="">Password:</label></td>
      <td><input type="password" name="password" placeholder="Password" size="30" min="18" max="100" /></td>

      <tr><td><label for="">Re-Type Password:</label></td>
      <td><input type="password" name="rtpassword" placeholder="Password" size="30" min="18" max="100" /></td>
            

            <tr><td><td><input type="submit" Value="Register" name="submit"></td></td>
          </th>
        </table>
    </form>   