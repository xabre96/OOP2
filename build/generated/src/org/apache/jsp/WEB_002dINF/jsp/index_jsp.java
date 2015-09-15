package org.apache.jsp.WEB_002dINF.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.sql.*;

public final class index_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\r\n");
      out.write("\r\n");
      out.write("<!DOCTYPE html>\r\n");
      out.write("<html lang=\"en\">\r\n");
      out.write("    <head>\r\n");
      out.write("        <meta charset=\"utf-8\">\r\n");
      out.write("        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n");
      out.write("        <title>Health System</title>\r\n");
      out.write("\r\n");
      out.write("        <link href=\"css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" />\r\n");
      out.write("        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>\r\n");
      out.write("        <link href=\"css/bootstrap-theme.css\" rel=\"stylesheet\" type=\"text/css\"/>\r\n");
      out.write("        <link href=\"css/bootstrap-theme.min.css\" rel=\"stylesheet\" type=\"text/css\"/>\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("        <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" type=\"text/css\"/>\r\n");
      out.write("        <link href=\"css/nav-style.css\" rel=\"stylesheet\" type=\"text/css\" type=\"text/css\"/>\r\n");
      out.write("      \r\n");
      out.write("        \r\n");
      out.write("    <!--[if lt IE 9]>\r\n");
      out.write("        <script src=\"<?php echo base_url('assets/js/html5shiv.min.js'); ?>\"></script>\r\n");
      out.write("        <script src=\"<?php echo base_url('assets/js/respond.min.js'); ?>\"></script>\r\n");
      out.write("    <![endif]-->\r\n");
      out.write("    </head>\r\n");
      out.write("    <body>\r\n");
      out.write("        \r\n");
      out.write("        <div class=\"container\">\r\n");
      out.write("            \r\n");
      out.write("      <div class=\"navbar\"> \r\n");
      out.write("\r\n");
      out.write("    <ul>\r\n");
      out.write("\r\n");
      out.write("        <li><a id=\"active\" href=\"\">News & Publication</a></li>\r\n");
      out.write("        <li><a id=\"\" href=\"guidelines.jsp\">Guidelines</a></li>\r\n");
      out.write("        <li><a id=\"\" href=\"\">About Us</a></li>\r\n");
      out.write("        <li><a id=\"\" href=\"login.jsp\">Login</a></li>\r\n");
      out.write("         \r\n");
      out.write("    </ul>\r\n");
      out.write("\r\n");
      out.write("        \r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("</div>\r\n");
      out.write("\r\n");
      out.write("    <div class=\"clear\">\r\n");
      out.write("  <div id=\"myCarousel\" class=\"carousel slide carousel-div\" data-ride=\"carousel\">\r\n");
      out.write("          <ol class=\"carousel-indicators\">\r\n");
      out.write("            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>\r\n");
      out.write("            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>\r\n");
      out.write("            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>\r\n");
      out.write("          </ol>\r\n");
      out.write("          <div class=\"home-img\">\r\n");
      out.write("          <div class=\"carousel-inner\" role=\"listbox\">\r\n");
      out.write("            <div class=\"item active\">\r\n");
      out.write("              <a href=\"#\"><img id=\"images\" src=\"images/banner.jpg\" alt=\"Guardians of the Galaxy\" class=\"img-carousel-util\" ></a>\r\n");
      out.write("              <div class=\"carousel-caption\">\r\n");
      out.write(" \r\n");
      out.write("              </div>\r\n");
      out.write("            </div>\r\n");
      out.write("\r\n");
      out.write("            <div class=\"item\">\r\n");
      out.write("              <a href=\"#\"><img id=\"images\" src=\"images/banner1.jpg\" alt=\"Transformers\" class=\"img-carousel-util\" ></a>\r\n");
      out.write("              <div class=\"carousel-caption\">\r\n");
      out.write("\r\n");
      out.write("              </div>\r\n");
      out.write("            </div>\r\n");
      out.write("          \r\n");
      out.write("            <div class=\"item\">\r\n");
      out.write("              <a href=\"#\"><img id=\"images\" src=\"images/banner2.jpg\" alt=\"Game of Thrones\" class=\"img-carousel-util\" ></a>\r\n");
      out.write("              <div class=\"carousel-caption\">\r\n");
      out.write("\r\n");
      out.write("              </div>\r\n");
      out.write("            </div>\r\n");
      out.write("          </div>\r\n");
      out.write("          <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">\r\n");
      out.write("            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>\r\n");
      out.write("            <span class=\"sr-only\">Previous</span>\r\n");
      out.write("          </a>\r\n");
      out.write("          <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">\r\n");
      out.write("            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>\r\n");
      out.write("            <span class=\"sr-only\">Next</span>\r\n");
      out.write("          </a>\r\n");
      out.write("\r\n");
      out.write("        </div>\r\n");
      out.write("\r\n");
      out.write("        </div>\r\n");
      out.write("        \r\n");
      out.write("        ");
 
             Class.forName("org.gjt.mm.mysql.Driver");
             java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost/health_database", "root", "");
             Statement st= con.createStatement(); 
ResultSet rs  = st.executeQuery("SELECT * FROM table_news");
while (rs.next()) {
    String news_title = rs.getString("news_title");
    String news_content = rs.getString("news_content");
    String news_author = rs.getString("news_author");

            
      out.write("\r\n");
      out.write("        <h1>");
 out.println(news_title); 
      out.write("</h1>\r\n");
      out.write("        <h3>");
 out.println(news_content); 
      out.write("</h3>\r\n");
      out.write("        <h6><i>Author: ");
 out.println(news_author); 
      out.write("</i></h6><hr/>\r\n");
      out.write("   ");
 }
      out.write("\r\n");
      out.write("         </div>\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("<div class=\"movie-list\">\r\n");
      out.write("       <div class=\"movie-categories\">\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("        <h3>Barangays</h3>\r\n");
      out.write("        <hr/>\r\n");
      out.write(" \r\n");
      out.write("        <!--?php //start here\r\n");
      out.write("        $this->load->model('users_model');\r\n");
      out.write("        $this->db->group_by('news_author');\r\n");
      out.write("        $municipal = $this->users_model->fetch_data_function('table_news', 'news_author');\r\n");
      out.write("\r\n");
      out.write("        foreach ($municipal as $barangays) :\r\n");
      out.write("\r\n");
      out.write("        ?-->\r\n");
      out.write("\r\n");
      out.write("    <a href=\"\"></a></br>\r\n");
      out.write("    \r\n");
      out.write("      </div>\r\n");
      out.write("      </div>\r\n");
      out.write("      </div>\r\n");
      out.write("    \r\n");
      out.write("\r\n");
      out.write("    \r\n");
      out.write("            \r\n");
      out.write("            \r\n");
      out.write("            \r\n");
      out.write("            </div>\r\n");
      out.write("<div class=\"footer\">\r\n");
      out.write("    <center>\r\n");
      out.write("        <p> All Rights Reserve 2015 Copyright &copy </p>\r\n");
      out.write("\r\n");
      out.write("    </center>\r\n");
      out.write("\r\n");
      out.write("</div>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/jquery-2.1.3.min.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/jquery-1.11.2.min.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/jquery-1.11.2.min.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/form_validation.js\"></script>\r\n");
      out.write("\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/jquery.cycle.all.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/bootstrap.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/npm.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/jquery.js\"></script>\r\n");
      out.write("    <script type=\"text/javascript\" src=\"js/index.js\"></script>\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("</body>\r\n");
      out.write("</html>\r\n");
      out.write("        \r\n");
      out.write("    \r\n");
      out.write("        \r\n");
      out.write("    ");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
