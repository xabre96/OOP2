
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%
    

 Class.forName("org.gjt.mm.mysql.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
String username = request.getParameter("username"); 
String password = request.getParameter("password"); 

Statement st = con.createStatement();
    ResultSet rs;
    int admin = 1;
    int user = 0;
    rs = st.executeQuery("SELECT * FROM table_user WHERE user_account='" + username + "' && user_password='"+ password +"'");

    if (rs.next() && Integer.parseInt(rs.getString("user_type")) == 1) {
        session.setAttribute("user_account",username);
        //out.println("welcome " + userid);
        //out.println("<a href='logout.jsp'>Log out</a>");
        response.sendRedirect("../webpages/activity.jsp");
        
    } else if(rs.next() && Integer.parseInt(rs.getString("user_type")) == 0) {
        session.setAttribute("user_account",username);
        //out.println("welcome " + userid);
        //out.println("<a href='logout.jsp'>Log out</a>");
        response.sendRedirect("../webpages/guidelines.jsp");
        
    } else {
        response.sendRedirect("../index.htm");
    }



   
 
%>