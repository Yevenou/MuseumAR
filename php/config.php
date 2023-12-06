<?php

//Database connection.
$con = MySQLi_connect(
   "HOST", //Server host name.
   "USERNAME", //Database username.
   "PASSWORD", //Database password.
   "DATABASE" //Database name or anything you would like to call it.

);

//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}

?>