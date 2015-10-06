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
        <li id=""><a id="" href="../functions/logout.jsp">Logout</a></li>
       
    </ul>

        


</div>

            
            <%  
 Class.forName("org.gjt.mm.mysql.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

String disease_name = request.getParameter("disease_name");
String region_dru = request.getParameter("region_dru"); 
String name_dru = request.getParameter("name_dru"); 
String address_dru = request.getParameter("address_dru");
String province_dru = request.getParameter("province_dru");
String municipal_dru = request.getParameter("municipal_dru");
String type_dru = request.getParameter("type_dru");


%>


<div class="movie-info">
    
    <h1 align="center"><b><i><% out.println(disease_name); %></i></b></h1>
   
    <form class="form-horizontal" action="../functions/disease.jsp" method="post">
    <div class="body-movie1" style="margin-left:250px;">
      <p align="center"></p>    
      
    <input type="hidden" name="disease_name" value="<% out.println(disease_name); %>">
    <input type="hidden" name="ru_dru_region" value="<% out.println(region_dru); %>">
    <input type="hidden" name="ru_dru_name" value="<% out.println(name_dru); %>">
    <input type="hidden" name="ru_dru_address" value="<% out.println(address_dru); %>">
    <input type="hidden" name="ru_dru_province" value="<% out.println(province_dru); %>">
    <input type="hidden" name="ru_dru_municipal" value="<% out.println(municipal_dru); %>">
    <input type="hidden" name="ru_type" value="<% out.println(type_dru); %>">
 

          <!--div class="form-group">
     
            <div class="col-sm-10">
              <input style="color:black;" type="file" name="userfile" class="file">
           </div>
          </div-->
        
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>Patient Number:</h5><input type="text" class="form-control" id="movie_title" name="patient_number" placeholder="..." required>
            </div>
          </div>
          <div class="form-group">
     
            <div class="col-sm-10">
                <h5>Full Name:</h5><input class="form-control" id="movie_title" name="patient_fullname" placeholder="..." required/>
                    
            </div>
          </div>
          <div class="form-group">
     
            <div class="col-sm-10">
              <h5>Region:</h5><input type="text" class="form-control" id="movie_title" name="patient_region" placeholder="..." required>
            </div>
          </div>

          
 

          
          <div style="    width: auto;
    height: auto;
    float: left;
    margin-left: 379px;
    margin-top: -208px;">
              
                       <div class="form-group">
         <div class="col-sm-10">
              <h5>Barangay</h5><input type="text" class="form-control" id="movie_title" name="patient_barangay" placeholder="..." required>
            </div>
          </div>
          
          <div class="form-group">
 <div class="col-sm-10">
              <h5>Province</h5><input type="text" class="form-control" id="movie_title" name="patient_province" placeholder="..." required>
            </div>
          </div>
                    <div class="form-group">
 <div class="col-sm-10">
              <h5>Municipality/City:</h5><input type="text" class="form-control" id="movie_title" name="patient_municipality" placeholder="..." required>
            </div>
          </div>
                    <div class="form-group">
            <div class="col-sm-10">
                <h5>Sex:</h5><select class="form-control" id="movie_title" name="patient_sex" placeholder="..." required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
          </div>
                    <div class="form-group">
 <div class="col-sm-10">
              <h5>Date of Birth:</h5><input type="date" class="form-control" id="movie_title" name="patient_dateofbirth" placeholder="Zip Code">
            </div>
          </div>
                        <div class="form-group">
           <div class="col-sm-10">
              <h5>District</h5><input type="text" class="form-control" id="movie_title" name="patient_district" placeholder="..." required>
            </div>
          </div>
              
        
          </div>
          
          
          
          
      
          
          
          
          
          

         
<div class="body-movie1" >  
                  <div class="form-group">        
          <div class=" col-sm-10">
            <button type="submit" id="add_movie" class="btn btn-default">Add Patient</button>
          </div>
        </div>
       </div>
         </div>         
  </form>
    
    





  

        </div>
    

  



    </div-->
    
   
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
        
    
 
