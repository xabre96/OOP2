<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Update</title>
	</head>
	<body>
        <p><?php echo @$msg; ?></p>
        
        <form action="<?php echo base_url('users/update'); ?>" method="post">
			<label for="">Update Firstname</label>
			<input type="text" name="fname" placeholder="Firstname" size="30" />
			<br />
            
            <label for="">Update Lastname</label>
			<input type="text" name="lname" placeholder="Lastname" size="30" />
			<br />
            
            <label for="">Update Age</label>
			<input type="number" name="a" placeholder="age" size="30" min="18" max="100" />
			<br />
            
            <button type="submit">Update Record</button>
		</form>       
	</body>
</html>