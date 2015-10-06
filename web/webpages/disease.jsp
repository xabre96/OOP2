<%@ page import="java.sql.*"%>

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
        <li><a id="active" href="../webpages/disease.jsp">Diseases</a></li>
        <li><a id="" href="../webpages/activity.jsp">Add Activity</a></li>
        <li><a id="" href="../webpages/reports.jsp">Reports</a></li>
        <li id=""><a id="" href="../functions/logout.jsp">Logout</a></li>
       
    </ul>

        


</div>
<div class="movie-info">
  <!--form class="form-horizontal" action="../functions/activity.jsp" method="post">
    <div class="body-movie1" style="margin-left:250px;">
      <p align='center'></p>        
    
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>News Title:</h5>
              <input type="text" class="form-control" id="movie_title" name="news_title" placeholder="Title">
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">    
            <h5>News Author:</h5>      
              <input type="text" class="form-control" id="movie_category" value="<%=session.getAttribute("user_account")%>" name="news_author" readonly >
            </div>
          </div>
      </div>  
      <div class="body-movie1"  >      
        <div class="form-group">
      
          <div class="col-sm-10"> 
          <h5>Content:</h5>         
            <textarea style=" margin-bottom:10px;" cols="100" rows="15" type="text" class="form-control" id="movie_description" name="news_content" Placeholder="..." size="30" ></textarea>
          </div>
        </div>

        <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">Post News</button>
          </div>
       </div>
    </div>
  </form-->

  
<div class="category1" style="margin-left: 140px;
    background-color: darkseagreen;
    width: 1105px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    padding: 43px;
    float: left;
    clear: right;
    /* height: 96px; */
    word-wrap: break-word;
    margin-bottom: 30px;
    ">
    <h3>List of Disease</h3>
             <% 
             Class.forName("org.gjt.mm.mysql.Driver");
             java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
             Statement st= con.createStatement(); 
ResultSet rs  = st.executeQuery("SELECT * FROM table_disease");
while (rs.next()) {
    String news_title = rs.getString("disease_name");

            %>
            <form action="../webpages/disease.form.jsp" method="post">
                <input type="hidden" name="disease" value="<% out.println(news_title); %> " />
                <button><% out.println(news_title); %></button>
            </form>
   <% }%>
    
 

</div>
  
  
</div>


<div class="activity-content">
    
  




</div>





  
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
        
    