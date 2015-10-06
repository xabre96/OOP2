
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%   
String news_id = request.getParameter("news_id");
String news_title = request.getParameter("news_title"); 
String news_author = request.getParameter("news_author");
String news_content = request.getParameter("news_content");
%>

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

        <li><a id="active" href="">Add Activity</a></li>
        <li id=""><a id="" href="../functions/logout.jsp">Logout</a></li>
       
    </ul>

        


</div>
<div class="movie-info">
  <form class="form-horizontal" action="../functions/update.jsp" method="post">
    <div class="body-movie1" style="margin-left:250px;">
      <p align='center'></p>       
      
 
              <input type="hidden" class="form-control" id="movie_title" name="news_id" value="<% out.println(news_id); %>" placeholder="...">
 
    
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>News Title:</h5>
              <input type="text" class="form-control" id="movie_title" name="news_title" value="<% out.println(news_title); %>" placeholder="..." required>
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">    
            <h5>News Author:</h5>      
              <input type="text" class="form-control" id="movie_category" value="<% out.println(news_author); %>" name="news_author" readonly >
            </div>
          </div>
      </div>  
      <div class="body-movie1"  >      
        <div class="form-group">
      
          <div class="col-sm-10"> 
          <h5>Content:</h5>         
            <textarea style=" margin-bottom:10px;" cols="100" rows="15" type="text" class="form-control" id="movie_description" name="news_content" Placeholder="..." value="<% out.println(news_content); %>" size="30" required ></textarea>
          </div>
        </div>

        <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">Update News</button>
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
        
    