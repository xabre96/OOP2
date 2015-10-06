<%-- 
    Document   : user-home
    Created on : Oct 5, 2015, 10:52:27 AM
    Author     : Alex
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%
    if (session.getAttribute("user_account") == null) {
            response.sendRedirect("../index.jsp");
    } 
    else {
%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User Page</title>
    </head>
    <body>
        <h1>Welcome Peasant!</h1>
        <a href="../functions/logout.jsp">logout</a>
    </body>
</html>
<%}%>
