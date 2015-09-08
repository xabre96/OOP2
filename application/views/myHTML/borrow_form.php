    
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

    ?>


    <p><?php echo @$msg; ?></p>

        <div class="container-fluid">
        <div class="form-create ">
            <form action="<?php echo base_url('myfunctions/holder/'.$movie_id.'/'.$user_id); ?>" method="post">
   
                <label>Borrower's First Name:</label>
                <input type="hidden" name="user_id" value="<?php '$user_id'; ?>" >
                <input type="text"  name="firstname" value="<?php echo $firstname; ?>" readonly><br/>

                <label>Borrower's Middle Name:</label>
                <input type="text" name="middlename" value="<?php echo $middlename; ?>" readonly><br/>
   
                <label>Borrower's Last Name:</label>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>" readonly><br/>


                <label>Movie Title:</label>
                <input type="text" name="movie_title" value="<?php echo $movie_title; ?>" readonly><br/>

      
                <label>Movie Category:</label>
                <input type="text"  name="movie_category" value="<?php echo $movie_category; ?>" readonly><br/>
             

              
                <label>Number of Copies to be rented: (Maximum is 5) </label>
                <input type="number" name="no_copies" min="1" max="5"/>
              


              <button type="submit" class="btn btn-default">Show Total Payment</button>
            </form>
        </div>
    </div>


