    <p><?php echo @$msg; ?></p>
        
        <form action="<?php echo base_url('users/create'); ?>" method="post">
			<table width='300' border='0' align='center' cellpadding='3' cellspacing='17'>
			<th align='left'>
			<tr><td><label for="">Firstname</label></td>
			<td><input type="text" name="firstname" placeholder="Firstname" size="30" /></td>
			<br />
            
            <tr><td><label for="">Lastname</label></td>
			<td><input type="text" name="lastname" placeholder="Lastname" size="30" /></td>
			<br />
            
            <tr><td><label for="">Age</label></td>
			<td><input type="number" name="age" placeholder="age" size="30" min="18" max="100" /></td>
			<br />
            

            <tr><td><td><input type="submit" Value="Create" name="submit"></td></td>
        	</th>
    		</table>
		</form>   