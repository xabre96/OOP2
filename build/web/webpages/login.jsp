
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Health System</title>

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>


        <link href="../css/style.css" rel="stylesheet" type="text/css" type="text/css"/>
        <link href="../css/nav-style.css" rel="stylesheet" type="text/css" type="text/css"/>


        <!--[if lt IE 9]>
            <script src="<?php echo base_url('assets/js/html5shiv.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">

            <div class="navbar"> 

                <ul>

                    <li><a id="" href="../index.jsp">News & Publication</a></li>
                    <li><a id="" href="guidelines.jsp">Guidelines</a></li>
                    <li><a id="" href="aboutUs.jsp">About Us</a></li>
                    <li><a id="active" href="login.jsp">Login</a></li>

                </ul>




            </div>


            <div class="movie-info">
                <form class="form-horizontal" action="../functions/login.jsp" method="post">
                    <div class="body-movie1" style="margin-left:250px;">
                        <p align='center'></p>        
                        <!--div class="form-group">
                   
                          <div class="col-sm-10">
                            <input style="color:black;" type="file" name="userfile" class="file">
                         </div>
                        </div-->

                        <div class="form-group">

                            <div class="col-sm-10">
                                <h5>Username:</h5><input type="text" class="form-control" id="movie_title" name="username" placeholder="Username" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-sm-10">          
                                <h5>Password:</h5><input type="password" class="form-control" id="movie_category" name="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="body-movie1" >  
                            <div class="form-group">        
                                <div class=" col-sm-10">
                                    <button type="submit" id="add_movie" class="btn btn-default">Login</button>
                                    <p style="color: red;">${param.message}</p>      
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



            </div>

        </div>
        <div class="footer">
            <center>
                <p> All Rights Reserve 2015 Copyright &copy </p>


            </center>

        </div>
        <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/form_validation.js"></script>

        <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/npm.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/index.js"></script>



    </body>
</html>



