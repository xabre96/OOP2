<div class="navbar"> 

    <ul>
            		<img class="crimson-logo" src="<?php echo base_url('assets/images/dumblr.gif'); ?>" rel="stylesheet" />

			<li><a id="active" href="">Home</a></li>
        <li><a id="" href="">Movie List</a></li>
        
        
		<?php if(!isset($_SESSION['authorid'])){ ?>	
			<li><a href="">Login</a></li>		
		<?php }else{ ?>
			<li><a href=""><?php echo "Hi, " .$_SESSION['firstname']."!"; ?></a></li>
			<li><a href="">Logout</a></li>
		<?php } ?>
			</ul>

</div>