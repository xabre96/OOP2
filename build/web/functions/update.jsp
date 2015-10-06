
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%
    

//session.putValue("userid",username); 

 Class.forName("org.gjt.mm.mysql.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

String news_id = request.getParameter("news_id"); 
String news_title = request.getParameter("news_title"); 
String news_author = request.getParameter("news_author");
String news_content = request.getParameter("news_content");

Statement st= con.createStatement(); 
ResultSet rs; 
int i = st.executeUpdate ("UPDATE table_news SET news_title = '"+request.getParameter("news_title")+"', news_content = '"+request.getParameter("news_content")+"', news_author = '"+request.getParameter("news_author")+"' WHERE news_id = '"+request.getParameter("news_id")+"'"); 
response.sendRedirect("../webpages/activity.jsp");

  
%>
 