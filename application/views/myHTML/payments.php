<?php 


      foreach($movie_data->result() as $movies)
      {
        $movie_id = $movies->movie_id;
        $movie_title = $movies->movie_title;
        $movie_category = $movies->movie_category;
      }

      foreach($user_data->result() as $user)
      {
        $user_id = $user->user_id;
        $firstname = $user->firstname;
        $middlename = $user->middlename;
        $lastname = $user->lastname;
        $username = $user->username;
      } 

        date_default_timezone_set('Asia/Manila');
        $date_rented = date('M-d-Y');
        
        $month = date('M');
        $day = date('d')+3;
        $year = date('Y');

        $date_will_return = $month."-".$day."-".$year; 

        $payment = 100*$no_copies;
     
    ?>

<div class="container-fluid">
        <div class="form-create ">
            <form action="<?php echo base_url('myfunctions/borrow_dvd_function2/'.$movie_id.'/'.$user_id); ?>" method="post">
              <div class="form-group">
  
                <label>Borrower's Full Name:</label><br/>
                <?php echo "$user_id"; ?>
                <input type="text"  name="firstname" value="<?php echo $firstname; ?>" readonly>
                <input type="text"  name="middlename" value="<?php echo $middlename; ?>" readonly>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>" readonly>
                <hr/>
              


                <label >Movie Title:</label>
                <input type="text" name="movie_title" value="<?php echo $movie_title; ?>" readonly><br/>

        
         
                <label for="exampleInputEmail1">Movie Category:</label>
                <input type="text"  name="movie_category" value="<?php echo $movie_category; ?>" readonly><br/>
       

           
                <label>Number of Copies to be rented: (Maximum is 5) </label>
                <input type="number"  name="no_copies" min="1" max="5" value="<?php echo $no_copies; ?>" readonly/><br/>
           

                <label>Date Rented:</label>
                <input type="text"  name="date_rented" value="<?php echo $date_rented; ?>" readonly><br/>
 
                <label>Date it will be Returned:</label>
                <input type="text"  name="date_will_return" value="<?php echo $date_will_return; ?>" readonly><br/>

         
                <label>Cost:</label>
                <input type="text"  name="payment" value="<?php echo $payment; ?>" readonly><br/>

              <button type="submit" class="btn btn-default">Rent Now</button>
            </form>
        </div>
    </div>