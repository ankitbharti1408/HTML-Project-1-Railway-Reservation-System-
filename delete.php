<?php

$con = $con = mysqli_connect("127.0.0.1","root","","railway");

mysqli_select_db($con,"railway");

$id = $_REQUEST['id'];
$sql="DELETE FROM ticket WHERE name='$id'";
$records=mysqli_query($con,$sql);
echo('Cancelling...');
header("refresh:3; url=bookedTicketHistory.php");
mysqli_close($con)
?>
