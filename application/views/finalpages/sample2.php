    <div class="navbar"> 

        <ul>
            <img class="crimson-logo" src="<?php echo base_url('assets/images/crimson4.png'); ?>"  />

			<li><a id="" href="<?php echo base_url('myfunctions/UserHomePage/'.$user_id); ?>">HOME</a></li>

        <li><a id="" href="<?php echo base_url('myfunctions/UserTransactionPage/'.$user_id); ?>">LOGS</a></li>
        <li><a id="" href="">FAQ's</a></li>
        <div class="profile">
        <li><a  >Hi,<?php echo " $firstname"; ?></a></li>
        <li id="logout"><a id="logout" href='<?php echo base_url('myfunctions/LogoutProcess'); ?>'>LOGOUT</a></li>
        </div>

        
        
        
		
			</ul>

    </div>