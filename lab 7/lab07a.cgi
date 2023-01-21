#!/usr/bin/perl -wT 

#Can reach this page via: https://www2.scs.ryerson.ca/~a44gupta/cgi-bin/lab07a.cgi

use CGI ':standard';
use CGI::Carp qw(warningsToBrowser fatalsToBrowser); 

use strict;
print "Content-type: text/html\n\n";

print "<!DOCTYPE html>";
print "<html><head>";
print qq(<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">);
print "<title>My 1st Perl Page</title></head>";
print "<body>";
print qq(<p style="text-align:center;color:purple;font-size:8em;font-family:'Chakra Petch',sans-serif;">); 
print "This is my first Perl program\n";
print "</p></body></html>";
