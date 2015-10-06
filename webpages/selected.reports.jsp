
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
        <th>Disease_Name</th>
        <th>DRU_Name</th>
        <th>DRU_Address</th>
        <th>DRU_Province</th>
        <th>DRU_Municipal</th>
        <th>DRU_Type</th>
         <th>Patient_Number</th>
         <th>Patient_Fullname</th>
         <th>Patient_Region</th>
         <th>Patient_District</th>
         <th>Patient_Barangay</th>
         <th>Patient_Province</th>
         <th>Patient_Municipality</th>
         <th>Patient_Sex</th>
         <th>Patient_Birthdate</th>
      </tr>
    </thead>
    
        
 

    <tbody>
              <% 
             Class.forName("org.gjt.mm.mysql.Driver");
             java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
             Statement st= con.createStatement(); 
ResultSet rs  = st.executeQuery("SELECT * FROM table_reports WHERE disease_name='"+request.getParameter("disease_name")+"' && report_author='"+session.getAttribute("user_account")+"' ");
while (rs.next()) {
String disease_name = rs.getString("disease_name"); 
String ru_dru_name = rs.getString("ru_dru_name"); 
String ru_dru_address = rs.getString("ru_dru_address");
String ru_dru_province = rs.getString("ru_dru_province"); 
String ru_dru_municipal = rs.getString("ru_dru_municipal"); 
String ru_type = rs.getString("ru_type"); 
String patient_number = rs.getString("patient_number");
String patient_fullname = rs.getString("patient_fullname"); 
String patient_region = rs.getString("patient_region");
String patient_district = rs.getString("patient_district"); 
String patient_barangay = rs.getString("patient_barangay"); 
String patient_province = rs.getString("patient_province");
String patient_municipality = rs.getString("patient_municipality"); 
String patient_sex = rs.getString("patient_sex");
String patient_dateofbirth = rs.getString("patient_dateofbirth");
            %>
      <tr>
        <td><% out.println(disease_name); %></td>
        <td><% out.println(ru_dru_name); %></td>
        <td><% out.println(ru_dru_address); %></td>
        <td><% out.println(ru_dru_province); %></td>
        <td><% out.println(ru_dru_municipal); %></td>
        <td><% out.println(ru_type); %></td>
        <td><% out.println(patient_number); %></td>
        <td><% out.println(patient_fullname); %></td>
        <td><% out.println(patient_region); %></td>
        <td><% out.println(patient_district); %></td>
        <td><% out.println(patient_barangay); %></td>
        <td><% out.println(patient_province); %></td>
        <td><% out.println(patient_municipality); %></td>
        <td><% out.println(patient_sex); %></td>
        <td><% out.println(patient_dateofbirth); %></td>
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
        
    
        
    