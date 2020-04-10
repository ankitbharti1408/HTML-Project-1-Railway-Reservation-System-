<?php
$con = $con = mysqli_connect("127.0.0.1","root","","railway");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"railway");


$sql="INSERT INTO user (username,password) VALUES 

('$_REQUEST[user]','$_REQUEST[pwd]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "User Registered Successfully";
header("refresh:3; url=login.html");

mysqli_close($con)
?>

