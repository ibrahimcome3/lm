<?php
$host="localhost"; // Host name
$username="u633821528_goodguyng";
$password="PPassword12@"; // Mysql password
$db_name="u633821528_goodguyng"; // Database name




$mysqli =  mysqli_connect("$host","$username","$password", "$db_name")or die("cannot connect");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 


?>