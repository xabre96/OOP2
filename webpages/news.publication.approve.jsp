
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
        
         <li><a id="" href="../webpages/news.publication.pending.jsp">Pending Reports</a></li>
        <li><a id="active" href="../webpages/news.publication.approve.jsp">Approved Reports</a></li>
        <li><a id="" href="../webpages/register.jsp">Add User</a></li>
        <li id=""><a id="" href="../functions/logout.jsp">Logout</a></li>
       
    </ul>

        
      </div>

            <div class="user-table" style="margin: 100px;">
                <h1><b><i>Approved Reports</i></b></h1>
                    
  <table class="table table-hover">
    <thead>
      <tr>
        
        <th>News Title</th>
        <th>News Content</th>
        <th>News Author</th>
        <th>News Status</th>
        <th>Action</th>
      </tr>
    </thead>
    
        
 

    <tbody>
               <% 
           Class.forName("org.gjt.mm.mysql.Driver");
             java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
             Statement st= con.createStatement();   
ResultSet rs  = st.executeQuery("SELECT * FROM table_news WHERE news_status = 'Approve'");
while (rs.next()) {
    
String news_id_approve = rs.getString("news_id"); 
String news_title_approve = rs.getString("news_title"); 
String news_content_approve = rs.getString("news_content"); 
String news_author_approve = rs.getString("news_author");
String news_status_approve = rs.getString("news_status"); 


            %>
      <tr>
        <td><% out.println(news_title_approve); %></td>
        <td><% out.println(news_content_approve); %></td>
        <td><% out.println(news_author_approve); %></td>
        <td><% out.println(news_status_approve); %></td>
        
            
       <form action="../functions/delete.status.jsp" method="POST">
            <input type="hidden" name="news_id" value="<% out.println(news_id_approve); %>" />
            <td><input type="submit" name="approve" value="Delete" /></td>
            
        </form>
 
      <% } %>
      
        
    </tr>
    </tbody>
  </table>

      </div>   </div>
    

    
            
            
            
   
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
        
    
        
    