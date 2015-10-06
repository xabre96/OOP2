<%--<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>

<jsp:forward page="Welcome.do"/>--%>


<%@ page import="java.sql.*"%>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Health System</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>


        <link href="css/style.css" rel="stylesheet" type="text/css" type="text/css"/>
        <link href="css/nav-style.css" rel="stylesheet" type="text/css" type="text/css"/>


        <!--[if lt IE 9]>
            <script src="<?php echo base_url('assets/js/html5shiv.min.js'); ?>"></script>
            <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">

            <div class="navbar"> 

                <ul>

                    <li><a id="active" href="index.jsp">News & Publication</a></li>
                    <li><a id="" href="webpages/guidelines.jsp">Guidelines</a></li>
                    <li><a id="" href="webpages/aboutUs.jsp">About Us</a></li>
                    <li><a id="" href="webpages/login.jsp">Login</a></li>

                </ul>

            </div>

            <div class="clear">
                <div id="myCarousel" class="carousel slide carousel-div" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="home-img">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="#"><img id="images" src="images/banner.jpg" alt="Guardians of the Galaxy" class="img-carousel-util" ></a>
                                <div class="carousel-caption">

                                </div>
                            </div>

                            <div class="item">
                                <a href="#"><img id="images" src="images/banner1.jpg" alt="Transformers" class="img-carousel-util" ></a>
                                <div class="carousel-caption">

                                </div>
                            </div>

                            <div class="item">
                                <a href="#"><img id="images" src="images/banner2.jpg" alt="Game of Thrones" class="img-carousel-util" ></a>
                                <div class="carousel-caption">

                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>

                </div>

                <%
                    Class.forName("org.gjt.mm.mysql.Driver");
                    java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
                    Statement st = con.createStatement();
                    ResultSet rs = st.executeQuery("SELECT * FROM table_news WHERE news_status = 'Approve'");
                    while (rs.next()) {
                        String news_title = rs.getString("news_title");
                        String news_content = rs.getString("news_content");
                        String news_author = rs.getString("news_author");

                %>
                <h1><% out.println(news_title); %></h1>
                <h3><% out.println(news_content); %></h3>
                <h6><i>Author: <% out.println(news_author); %></i></h6><hr/>
                <% }%>
            </div>

            <div class="movie-list">
                <div class="movie-categories"></div>
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
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <!--<script type="text/javascript" src="js/npm.js"></script>-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>



</body>
</html>



