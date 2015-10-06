
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%
    

//session.putValue("userid",username); 

 Class.forName("org.gjt.mm.mysql.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

String disease_name = request.getParameter("disease_name"); 
String ru_dru_name = request.getParameter("ru_dru_name"); 
String ru_dru_address = request.getParameter("ru_dru_address");
String ru_dru_province = request.getParameter("ru_dru_province"); 
String ru_dru_municipal = request.getParameter("ru_dru_municipal"); 
String ru_type = request.getParameter("ru_type"); 
String patient_number = request.getParameter("patient_number");
String patient_fullname = request.getParameter("patient_fullname"); 
String patient_region = request.getParameter("patient_region");
String patient_district = request.getParameter("patient_district"); 
String patient_barangay = request.getParameter("patient_barangay"); 
String patient_province = request.getParameter("patient_province");
String patient_municipality = request.getParameter("patient_municipality"); 
String patient_sex = request.getParameter("patient_sex");
String patient_dateofbirth = request.getParameter("patient_dateofbirth");
Statement st= con.createStatement(); 
ResultSet rs; 
int i = st.executeUpdate ("INSERT INTO table_reports (report_author, disease_name, ru_dru_name, ru_dru_address, ru_dru_province, ru_dru_municipal, ru_type, patient_number, patient_fullname, patient_region, patient_district, patient_barangay, patient_province, patient_municipality, patient_sex, patient_dateofbirth) values ('"+session.getAttribute("user_account")+"', '"+disease_name+"', '"+ru_dru_name+"','"+ru_dru_address+"' ,'"+ru_dru_province+"' ,'"+ru_dru_municipal+"' ,'"+ru_type+"' ,'"+patient_number+"' ,'"+patient_fullname+"' ,'"+patient_region+"' ,'"+patient_district+"' ,'"+patient_barangay+"' ,'"+patient_province+"' ,'"+patient_municipality+"' ,'"+patient_sex+"' ,'"+patient_dateofbirth+"')"); 


            response.sendRedirect("../webpages/reports.jsp");

            
%>
 