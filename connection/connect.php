<?php
$connect = mysqli_connect("localhost","root","","gamebugs");
// $connect = mysqli_connect("localhost","root","") or die("unable to connect"); //address of database,the user name ,null
// mysqli_select_db($con,'inventory');//connection object,select the database ame we just created
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>