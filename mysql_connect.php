<?php
$username ="root"; // define(username,root);
$password=""; //define(password,””);
$database="gymapp"; //define(database,”sitename”);
mysql_connect("localhost",$username,$password); //mysql_connect(localhost,username,password);
@mysql_select_db($database) or die ("Unable to select database");
?>