#!/usr/bin/python

import cgi, cgitb 

form = cgi.FieldStorage() 

if form.getvalue('city'):
   city = form.getvalue('city').upper()
else:
   city = "N/A"

if form.getvalue('province'):
   province = form.getvalue('province').upper()
else:
   province = "N/A"

if form.getvalue('country'):
   country = form.getvalue('country').upper()
else:
   country = "N/A"

if form.getvalue('url'):
   url = form.getvalue('url')
else:
   url = "N/A"

print "Content-type:text/html\n\n"

print "<title>Python CGI Script</title></head>"
print "<body style='background-color:#ccffff; font-family:sans-serif;'>"
print "<h1 style='color:blue; font-family:Century Gothic; text-align:center;'>"
print "City: %s, Province/State: %s, Country: %s" %(city, province, country)
print "</h1>"
print "<div style='width:100%; text-align:center;'>"
print "<img src='" + url + "' alt='" + url + "' style='width:80%; height:auto; border: 30px solid red;'>"
print "</div>"
print "</body>"
