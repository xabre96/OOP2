<%@ page import="java.sql.*"%>

<%
    if (session.getAttribute("user_account") == null) {
        response.sendRedirect("../index.jsp");
    } else {
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

                    <li><a id="" href="../webpages/news.publication.pending.jsp">Pending Reports</a></li>
                    <li><a id="" href="../webpages/news.publication.approve.jsp">Approved Reports</a></li>
                    <li><a id="active" href="../webpages/register.jsp">Users</a></li>
                    <li id=""><a id="" href="../functions/logout.jsp">Logout</a></li>

                </ul>

            </div>

            <div class="movie-info">
                <form class="form-horizontal" action="../functions/register.jsp" method="get">
                    <div class="body-movie1" style="margin-left:250px;">
                        <p align="center"></p>    
                        <div class="form-group">

                            <div class="col-sm-10">
                                <h5>Username:</h5><input type="text" class="form-control" id="movie_title" name="username" placeholder="Username" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-sm-10">          
                                <h5>User Type:</h5><select name="type" class="form-control" required>
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-sm-10">   
                                <h5>User Status:</h5>       
                                <select name="status" class="form-control" required>
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

                <table class="table table-hover table-bordered">
                    <thead>
                    <h2><span class="glyphicon glyphicon-user"></span> Users</h2>
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
                            Statement st = con.createStatement();
                            ResultSet rs = st.executeQuery("SELECT * FROM table_user");
                            while (rs.next()) {
                                String user_id = rs.getString("user_id");
                                String user_account = rs.getString("user_account");
                                String user_type = "";
                                String user_status = "";
                                if (rs.getInt("user_type") == 1) {
                                    user_type = "Admin";
                                } else {
                                    user_type = "User";
                                }
                                if (rs.getInt("user_status") == 1) {
                                    user_status = "Activated";
                                } else {
                                    user_status = "Deactivated";
                                }
                        %>

                        <tr>
                            <%
                                Integer sid = (Integer) session.getAttribute("user_id");
                                if (rs.getInt("user_id") == sid) {

                                } else {
                            %>
                            <td><% out.println(user_id); %></td>
                            <td><% out.println(user_account); %></td>
                            <td><% out.println(user_type); %></td>
                            <td>
                                <%if (rs.getInt("user_status") == 1) { %>
                                <a href="../functions/userStatus.jsp?id=<% out.println(user_id); %>&&status=0" class="btn btn-danger" type="button">Deactivate</a>
                                <% } else { %>
                                <a href="../functions/userStatus.jsp?id=<% out.println(user_id); %>&&status=1" class="btn btn-success" type="button"><span class=""></span>Activate</a>
                                <% } %>
                            </td>
                            <td>
                                <a href="../webpages/updateUser.jsp?id=<% out.println(user_id); %>" class="btn btn-primary" type="button">Update</a>
                                <a href="../functions/delete.user.jsp?id=<% out.println(user_id); %>" class="btn btn-danger" type="button">Delete</a>
                                <a href="../functions/resetPass.jsp?id=<% out.println(user_id); %>" class="btn btn-info" type="button">Reset Password</a>

                            </td>
                            <%
                                    }
                                }
                                rs.close();
                                st.close();
                                con.close();
                            %>
                        </tr>

                    </tbody>
                </table>
                <h3 style="color: red;">${param.message}</h3>   

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
%>


