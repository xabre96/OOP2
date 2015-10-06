<%@ page import ="java.sql.*" %>
<%
    if (session.getAttribute("user_account") == null || session.getAttribute("user_id") == null) {
        String message = "You are not currently logged in. Please log in first.";
        response.sendRedirect("../webpages/login.jsp?message=" + message);
    } else {

        Class.forName("org.gjt.mm.mysql.Driver");
        java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

        String user_id = request.getParameter("id");
        String user_status = request.getParameter("status");
        Statement st = con.createStatement();
        int x = st.executeUpdate("UPDATE table_user SET user_status=" + user_status + " WHERE user_id = '" + user_id + "'");
        if (x == 0) {
            String message = "Error.";
            response.sendRedirect("../webpages/register.jsp?message=" + message);
        } else {
            String message = "User was successfully Activated/Deactivated.";
            response.sendRedirect("../webpages/register.jsp?message=" + message);
        }
        st.close();
        con.close();
    }
%>
