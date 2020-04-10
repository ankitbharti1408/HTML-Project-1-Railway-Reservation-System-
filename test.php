<?php
$con = $con = mysqli_connect("127.0.0.1","root","","tanay");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"tanay");


$sql="INSERT INTO ticket (name,age,departure,destination,coach,date) VALUES

('$_POST[name]','$_POST[age]','$_POST[departure]','$_POST[destination]','$_POST[coach]','$_POST[date]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Ticket Booked Successfully";
$id=$_POST['name'];
$url = "ticket.php?id=$id";
header("refresh:3; url=$url");
mysqli_close($con)
?>