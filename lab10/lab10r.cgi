#!/usr/local/bin/ruby -w
puts "Content-type: text/html\n\n"

require 'cgi'
cgi = CGI.new
city =  cgi['city'].capitalize
province =  cgi['province'].capitalize
country = cgi['country'].capitalize
url = cgi['url']

if (city == "")
  city = "N/A"
end

if (province == "")
  province = "N/A"
end

if (country == "")
  country = "N/A"
end

if (url == "")
  url = "N/A"
end

puts "<title>Ruby CGI Script</title></head>"
puts "<body style='background-color:#ffccff; font-family:sans-serif;'>"
puts "<h1 style='color:purple; font-family:Century Gothic; text-align:center;'>"
puts "City: " + city.to_s + ", Province/State: " + province.to_s + ", Country: " + country.to_s
puts "</h1>"
puts "<div style='width:100%; text-align:center;'>"
puts "<img src='" + url.to_s + "' alt='" + url.to_s + "' style='width:100%; height:auto;'>"
puts "</div>"
puts "</body>"
