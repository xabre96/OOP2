<%@ page import ="java.sql.*, java.security.*" %>
<%
    if (session.getAttribute("user_account") == null || session.getAttribute("user_id") == null) {
        String message = "You are not currently logged in. Please log in first.";
        response.sendRedirect("../webpages/login.jsp?message=" + message);
    } else {
        Class.forName("org.gjt.mm.mysql.Driver");
        java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");

        String username = request.getParameter("username");
        String salt = "oAsVa2KZMimstDXj";
        String salt2 = "kE7PPKiuo5twOh7MQ|Qs4+UomCaGs3ZSte^miJC%Xa+T^Orh1CdkX8aVD_U";
        String password = "123";
        String user_id = request.getParameter("id");
        MessageDigest digest = MessageDigest.getInstance("SHA-256");
        digest.update(password.getBytes("UTF-8"));
        byte[] hash = digest.digest();
        StringBuffer hexString = new StringBuffer();

        for (int i = 0; i < hash.length; i++) {
            String hex = Integer.toHexString(0xff & hash[i]);
            if (hex.length() == 1) {
                hexString.append('0');
            }
            hexString.append(hex);
        }

        password = salt + hexString.toString() + salt2;
        Statement st = con.createStatement();
        int x = st.executeUpdate("UPDATE table_user SET user_password='"+ password + "' WHERE user_id = '" + user_id + "'");
        if (x == 0) {
            String message = "Error.";
            response.sendRedirect("../webpages/register.jsp?message=" + message);
        } else {
            String message = "Password reset was successful .";
            response.sendRedirect("../webpages/register.jsp?message=" + message);
        }
        st.close();
        con.close();
    }
%>
