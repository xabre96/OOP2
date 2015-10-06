
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%
    

//session.putValue("userid",username); 

 Class.forName("org.gjt.mm.mysql.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

String news_id = request.getParameter("news_id"); 
String approve = "Approve";

Statement st= con.createStatement(); 
ResultSet rs; 
int i = st.executeUpdate ("UPDATE table_news SET  news_status = '"+approve+"' WHERE news_id = '"+request.getParameter("news_id")+"'"); 
response.sendRedirect("../webpages/news.publication.pending.jsp");

  
%>
 