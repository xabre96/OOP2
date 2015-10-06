
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
        <li><a id="" href="../webpages/disease.jsp">Diseases</a></li>
        <li><a id="" href="../webpages/activity.jsp">Add Activity</a></li>
        <li><a id="active" href="../webpages/reports.jsp">Reports</a></li>
        <li id=""><a id="" href="../functions/logout.jsp">Logout</a></li>
       
    </ul>

        
      </div>

            <div class="user-table" style="margin: 100px;">

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Disease Name</th>
        <th>Total Affected</th>
        <th>Posted By</th>
        <th>Action</th>
   
      </tr>
    </thead>
    
        
 

    <tbody>
               <% 
             Class.forName("org.gjt.mm.mysql.Driver");
             java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
             Statement st= con.createStatement(); 
ResultSet rs  = st.executeQuery("SELECT disease_name, SUM(numbers_affected) AS 'total', report_author FROM table_reports WHERE report_author='"+session.getAttribute("user_account")+"' GROUP BY disease_name");
while (rs.next()) {
String disease_name = rs.getString("disease_name"); 
String total_affected = rs.getString("total"); 
String report_author = rs.getString("report_author");

            %>
      <tr>
        <td><% out.println(disease_name); %></td>
        <td><% out.println(total_affected); %></td>
        <td><% out.println(report_author); %></td>
        
       <form action="../webpages/selected.reports.jsp" method="POST">
            <input type="hidden" name="report_author" value="<% out.println(report_author); %>" />
             <input type="hidden" name="disease_name" value="<% out.println(disease_name); %>" />
            <td> <input type="submit" name="show" value="Show All" /></td>
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
        
    
        
    