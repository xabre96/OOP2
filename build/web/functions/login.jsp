
<%@ page import ="java.sql.*, java.security.*" %>
<%

    if (session.getAttribute("user_account") != null || session.getAttribute("user_id") != null) {
        String message = "You are already logged in!";
        response.sendRedirect("../webpages/login.jsp?message=" + message);
    } 
    else if(request.getParameter("username")==null || request.getParameter("password")==null){
        response.sendRedirect("../webpages/login.jsp");
    }
    else {

        Class.forName("org.gjt.mm.mysql.Driver");
        java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
        String username = request.getParameter("username");
        String password = request.getParameter("password");
        String salt = "oAsVa2KZMimstDXj";
        String salt2 = "kE7PPKiuo5twOh7MQ|Qs4+UomCaGs3ZSte^miJC%Xa+T^Orh1CdkX8aVD_U";

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
        ResultSet rs = null;
        rs = st.executeQuery("SELECT * FROM table_user WHERE user_account='" + username + "' && user_password='" + password + "'");

        if (rs.isBeforeFirst()) {
            rs.next();
            String status = rs.getString("user_status");
            if (Integer.parseInt(status) == 0) {
                String message = "User is not yet activated. Please contact the administrator.";
                response.sendRedirect("../webpages/login.jsp?message=" + message);
            } else {
                if (Integer.parseInt(rs.getString("user_type")) == 1) {

                    session.setAttribute("user_account", rs.getString("user_account"));
                    session.setAttribute("user_id", rs.getInt("user_id"));
                    response.sendRedirect("../webpages/register.jsp");
                } else {
                    session.setAttribute("user_account", rs.getString("user_account"));
                    session.setAttribute("user_id", rs.getInt("user_id"));
                    response.sendRedirect("../webpages/user-home.jsp");
                }
            }
        } else {
            String message = "Username and Password is incorrect.";
            response.sendRedirect("../webpages/login.jsp?message=" + message);
        }

        rs.close();
        st.close();
        con.close();
    }
%>