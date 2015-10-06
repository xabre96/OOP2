
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%
    

//session.putValue("userid",username); 

 Class.forName("org.gjt.mm.mysql.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

String news_title = request.getParameter("news_title"); 
String news_author = request.getParameter("news_author");
String news_content = request.getParameter("news_content");
String news_status = "Pending";

Statement st= con.createStatement(); 
ResultSet rs; 
int i = st.executeUpdate ("INSERT INTO table_news (news_title, news_content, news_author, news_status) values ('"+news_title+"','"+news_content+"' ,'"+news_author+"', '"+news_status+"')"); 
response.sendRedirect("../webpages/activity.jsp");


%>
 