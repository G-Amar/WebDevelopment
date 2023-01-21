<!DOCTYPE html>
<!--
  reach page using:
  http://amar530-001-site1.ftempurl.com/lab10a.asp

  Query string is URL?color=VALUE
-->
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ASP</title>
  <style>
      body{
        <%
        color = Request.QueryString("color")
        response.write("background-color: " & color & ";")
        response.write("background-color: #" & color & ";")
        %>
        font-family: sans-serif;
      }

      h2{
        text-align: center;
      }
  </style>
</head>
<body>
<div>
  <h2>
  <%
  response.write("Welcome to my 1st ASP page!")
  %>
  </h2>
  <div>
    <%
      visit = request.cookies("last visit")
      if (visit = "") then
        response.write("Welcome! This is your first visit!")
      else
        response.write("Welcome! Your last visit was " & visit & " (Server Time)")
      end if
      response.cookies("last visit") = now()
    %>
  </div>
</div>
</body>
</html>
