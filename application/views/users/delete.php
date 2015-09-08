<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Delete</title>
	</head>
	<body>
        <p><?php echo @$msg; ?></p>
        
        <form action="<?php echo base_url('users/delete'); ?>" method="get">        
            <button type="submit">Delete Record</button>
		</form>       
	</body>
</html>