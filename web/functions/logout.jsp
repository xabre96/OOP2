<%
session.setAttribute("user_account", null);
session.setAttribute("user_id", null);
session.invalidate();
response.sendRedirect("../index.jsp");
%>