<%@page import="java.util.ArrayList" %>
<html>
    <body>

<!-- copied from w3schools: PHP Forms -->
<form action="index.jsp" method="POST">
Task: <input type="text" name="task"><br>
<input type="submit">
</form>
<% //get todo list from session
    ArrayList<String> list = 
		(ArrayList<String>) session.getAttribute("list"); //$_SESSION['list'}
     
	 //if not found => create
	 if (list == null) {
		 list = new ArrayList<String>();
	 }
	 
	 //save task in todo list
	 String task = request.getParameter("task"); //$task = $_GET["task"];
	 if (task != null) {
		 list.add(task);
	 }
	 //save list back to session
	 session.setAttribute("list", list);
	 %>
        
		<hr/>

        <%
			//out.println(list);
            //display all tasks in list
            out.println("<ul>");
			for (String todo : list) {
				out.println("<li>" + todo + "</li>");
			}
            out.println("</ul>");

        %>
    </body>
</html>

