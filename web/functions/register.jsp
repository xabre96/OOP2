
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%
    

//session.putValue("userid",username); 

 Class.forName("org.gjt.mm.mysql.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

String username = request.getParameter("username"); 
String password = request.getParameter("password");
String type = request.getParameter("type"); 
String status = request.getParameter("status"); 
Statement st= con.createStatement(); 
ResultSet rs; 
int i = st.executeUpdate ("INSERT INTO table_user (user_account, user_password, user_type, user_status) values ('"+username+"','"+password+"' ,'"+type+"' ,'"+status+"')"); 


    if ((session.getAttribute("user_account") == null) || (session.getAttribute("user_account") == "")) {
       response.sendRedirect("index.htm");
    } else {

            session.getAttribute("user_account");
            response.sendRedirect("../webpages/register.jsp");

            }
%>
 