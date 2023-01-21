#!/usr/bin/perl -wT 
use strict; 
use CGI ':standard';
use CGI::Carp qw ( fatalsToBrowser ); 
use File::Basename; 

# my $query = new CGI; 
my $upload_dir = "/home/a44gupta/public_html/pictures"; 


print "Content-type: text/html\n\n";

print "<!DOCTYPE html>";
print "<html><head>";
print qq(<meta http-equiv="Content-Type" content="text/html; charset=utf-8">);
print "<title>Form Submission</title></head>";
print qq(<body style="background-color:aquamarine;font-family:sans-serif;font-weight:bold">);

print qq(<h2 style="text-align:center;color:purple;">); 
print "Submitted Info\n";
print "</h2>";

my $fn = param("first"); 
my $ln = param("last");
my $street = param("street"); 
my $city = param("city"); 
my $postal = param("postal"); 
my $province = param("province"); 
my $phone = param("phone"); 
my $email = param("email"); 

print qq(<p style="text-align:center;">); 
print qq(Name: $fn $ln);
print "</p>";

if ($postal =~ m/^[a-zA-z][0-9][a-zA-z] [0-9][a-zA-z][0-9]$/) {
  print qq(<p style="text-align:center;">); 
  print qq(Address: $street, $city, $province, $postal);
  print "</p>";
}
else {
  print qq(<p style="text-align:center;color:red;">); 
  print qq(Invalid Postal Code!);
  print "</p>";

  print qq(<p style="text-align:center;">); 
  print qq(Address: $street, $city, $province);
  print "</p>";
}

if ($phone =~ m/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/) {
  print qq(<p style="text-align:center;">); 
  print qq(Phone #: $phone);
  print "</p>";
}
else {
  print qq(<p style="text-align:center;color:red">); 
  print qq(Invalid Phone Number!);
  print "</p>";
}

# email regex given in slides L5 slide 76
if ($email =~ m/^[\w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,63}$/) {
  print qq(<p style="text-align:center;">); 
  print qq(Email: $email);
  print "</p>";
}
else {
  print qq(<p style="text-align:center;color:red">); 
  print qq(Invalid Email Address!);
  print "</p>";
}

my $filename = param("picture"); 

if ( !$filename ) { 
  print qq(<p style="text-align:center;color:red">); 
  print qq(There was a problem uploading your picture.);
  print "</p>";
}
else {
  my $upload_filehandle = upload("picture"); 
  open ( UPLOADFILE, ">$upload_dir/$filename" ) or die "$!"; binmode UPLOADFILE; 
  while ( <$upload_filehandle> ) { print UPLOADFILE; } 
  close UPLOADFILE; 

  print qq(<p style="text-align:center;">); 
  print qq(Your picture:);
  print qq(<p><img src="https://www2.scs.ryerson.ca/~a44gupta/pictures/$filename" alt="Photo"></p>);
  print "</p>";
}

print "</body></html>";