

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.sql.*"%>
<%
    if (session.getAttribute("user_account") == null || session.getAttribute("user_id") == null) {
        String message = "You are not currently logged in. Please log in first.";
        response.sendRedirect("../webpages/login.jsp?message=" + message);
    } else {
        Class.forName("org.gjt.mm.mysql.Driver");
        java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
        Statement st = con.createStatement();
        ResultSet rs = st.executeQuery("SELECT * FROM table_user where user_id=" + request.getParameter("id"));
        if (!rs.isBeforeFirst()) {
            String message = "User does not exist.";
            response.sendRedirect("../webpages/register.jsp?message=" + message);
        } else {
            while (rs.next()) {
                String username = rs.getString("user_account");
                int type = rs.getInt("user_type");
                int status = rs.getInt("user_status");

%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css" type="text/css"/>
        <link href="../css/nav-style.css" rel="stylesheet" type="text/css" type="text/css"/>
    </head>
    <body>
        <div class="movie-info">
            <form class="form-horizontal" action="../functions/update.user.jsp" method="get">
                <input type="text" hidden="" value="<%out.println(rs.getInt("user_id"));%>" name="id"/>
                <div class="body-movie1" style="margin-left:250px;">
                    <p align="center"></p>    
                    <div class="form-group">

                        <div class="col-sm-10">
                            <h5>Username:</h5><input type="text" value=<%out.println(username);%> class="form-control" id="movie_title" name="username" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-sm-10">          
                            <h5>User Type:</h5><select name="type" class="form-control" required>
                                <%if (type == 0) {%>
                                <option value="0" selected>User</option>
                                <option value="1">Admin</option>
                                <%} else {%>
                                <option value="0">User</option>
                                <option value="1" selected>Admin</option>
                                <%}%>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-sm-10">   
                            <h5>User Status:</h5>       
                            <select name="status" class="form-control" required>
                                <%if (status == 0) {%>
                                <option value="0" selected="">Not Active</option>
                                <option value="1">Active</option>
                                <%} else {%>
                                <option value="0">Not Active</option>
                                <option value="1" selected="">Active</option>
                                <%}%>
                            </select>
                        </div>
                    </div>
                    <div class="body-movie1" >  
                        <div class="form-group">        
                            <div class=" col-sm-10">
                                <button type="submit" id="add_movie" class="btn btn-default">Update</button>
                            </div>
                            <a href="register.jsp" class="btn btn-info">Cancel</a>
                        </div>
                    </div>
                </div>   
                <h3 style="color: red;">${param.message}</h3>   

            </form>
            <script type="text/javascript" src="../js/jquery-2.1.3.min.js"></script>
            <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            <!--<script type="text/javascript" src="../js/form_validation.js"></script>-->

            <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
            <script type="text/javascript" src="../js/bootstrap.js"></script>
            <!--<script type="text/javascript" src="../js/npm.js"></script>-->
            <script type="text/javascript" src="../js/jquery.js"></script>
            <script type="text/javascript" src="../js/index.js"></script>
    </body>
</html>
<%
            }
        }
    }
%>