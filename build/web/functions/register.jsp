<%@ page import ="java.sql.*, java.security.*" %>
<%
    if (session.getAttribute("user_account") == null || session.getAttribute("user_id") == null) {
        String message = "You are not currently logged in. Please log in first.";
        response.sendRedirect("../webpages/login.jsp?message=" + message);
    } else {
        Class.forName("org.gjt.mm.mysql.Driver");
        java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
        String username = request.getParameter("username");
        Statement st = con.createStatement();
        ResultSet rs = null;
        rs = st.executeQuery("SELECT * FROM table_user WHERE user_account='" + username + "'");
        if (rs.isBeforeFirst()) {
            String message = "Username already exists.";
            response.sendRedirect("../webpages/register.jsp?message=" + message);
        } else {
            String salt = "oAsVa2KZMimstDXj";
            String salt2 = "kE7PPKiuo5twOh7MQ|Qs4+UomCaGs3ZSte^miJC%Xa+T^Orh1CdkX8aVD_U";
            String password = "123";
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

            String type = request.getParameter("type");
            String status = request.getParameter("status");

            st.executeUpdate("INSERT INTO table_user (user_account, user_password, user_type, user_status) values ('" + username + "','" + password + "' ,'" + type + "' ,'" + status + "')");

            String message = "User successfully created.";
            response.sendRedirect("../webpages/register.jsp?message=" + message);
            st.close();
            con.close();
        }
    }
%>
