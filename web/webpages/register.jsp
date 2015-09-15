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

        <li><a id="active" href="">Add User</a></li>
        <li id=""><a id="" href="../functions/logout.jsp">Logout</a></li>
       
    </ul>

        


</div>
            
<%
    if ((session.getAttribute("user_account") == null) || (session.getAttribute("user_account") == "")) {
       response.sendRedirect("index.htm");
    } else {
%>
Welcome <%=session.getAttribute("user_account")%>
<a href='logout.jsp'>Log out</a>
<%
    }
%>

<div class="movie-info">
   
    <form class="form-horizontal" action="../functions/register.jsp" method="post">
    <div class="body-movie1" style="margin-left:250px;">
      <p align="center"></p>        
          <!--div class="form-group">
     
            <div class="col-sm-10">
              <input style="color:black;" type="file" name="userfile" class="file">
           </div>
          </div-->
        
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>Username:</h5><input type="text" class="form-control" id="movie_title" name="username" placeholder="Zip Code">
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <h5>Password:</h5><input type="password" class="form-control" id="movie_category" name="password" placeholder="Password" >
            </div>
          </div>

          <div class="form-group">
      
            <div class="col-sm-10">          
              <h5>User Type:</h5><select name="type" class="form-control">
                <option value="0">User</option>
                <option value="1">Admin</option>
              </select>
            </div>
          </div>
    
        <div class="form-group">
      
            <div class="col-sm-10">   
            <h5>User Status:</h5>       
              <select name="status" class="form-control">
                <option value="0">Not Active</option>
                <option value="1">Active</option>
              </select>
            </div>
          </div>
<div class="body-movie1" >  
                  <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">Add User</button>
          </div>
        </div>
       </div>
         </div>         
  </form>





  

        </div>
    


       <div class="user-table">

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Account</th>
                    <th>User Type</th>
                    <th>Status</th>
                    <th>Action</th>
                 
                </tr>
            </thead>
            <tbody>
           <% 
             Class.forName("org.gjt.mm.mysql.Driver");
             java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
             Statement st= con.createStatement(); 
ResultSet rs  = st.executeQuery("SELECT * FROM table_user");
while (rs.next()) {
    String user_id = rs.getString("user_id");
    String user_account = rs.getString("user_account");
    String user_type = rs.getString("user_type");
    String user_status = rs.getString("user_status");
    
            %>
 
  
                <tr>
                    <td><% out.println(user_id); %></td>
                    <td><% out.println(user_account); %></td>
                    <td><% out.println(user_type); %></td>
                    <td><% out.println(user_status); %></td>
                    <td><a href="">Delete</a></td>
 <% }%>
                </tr>
  
            </tbody>
        </table>



    </div>
    
   
</div>

 
            
                        </div>
<div class="footer">
    <center>
        <p> All Rights Reserve 2015 Copyright &copy </p>

    </center>

</div>
    <script type="text/javascript" src="../js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/form_validation.js"></script>

    <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/npm.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>



</body>
</html>
        
    
 
