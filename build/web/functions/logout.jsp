<%
session.setAttribute("user_account", null);
session.invalidate();
response.sendRedirect("../index.htm");
%>