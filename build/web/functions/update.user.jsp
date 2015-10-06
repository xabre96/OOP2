<%@ page import ="java.sql.*" %>
<%
    if (session.getAttribute("user_account") == null || session.getAttribute("user_id") == null) {
        String message = "You are not currently logged in. Please log in first.";
        response.sendRedirect("../webpages/login.jsp?message=" + message);
    } else {
        Class.forName("org.gjt.mm.mysql.Driver");
        java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

        String user_id = request.getParameter("id");
        String username = request.getParameter("username");
        String status = request.getParameter("status");
        String type = request.getParameter("type");

        if (user_id == null || username == null || status == null || type == null) {
            String message = "Please complete the required fields.";
            response.sendRedirect("../webpages/updateUser.jsp?message=" + message);
        } else {
            Statement st = con.createStatement();
            int x = st.executeUpdate("UPDATE table_user SET user_account='" + username + "', user_type='" + type + "', user_status='" + status + "' WHERE user_id = '" + user_id + "'");
            if (x == 0) {
                String message = "Error.";
                response.sendRedirect("../webpages/register.jsp?message=" + message);
            } else {
                String message = "User Account was successfully updated.";
                response.sendRedirect("../webpages/register.jsp?message=" + message);
            }
            st.close();
            con.close();
        }
    }
%>
