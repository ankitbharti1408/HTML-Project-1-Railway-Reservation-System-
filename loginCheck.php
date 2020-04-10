<?php

$con = $con = mysqli_connect("127.0.0.1","root","","railway");

mysqli_select_db($con,"railway");

$user=$_REQUEST['user'];
$pwd=$_REQUEST['pwd'];
$sql="SELECT * FROM user";

$records=mysqli_query($con,$sql);

while($rowvalue=mysqli_fetch_array($records))
{	

if($rowvalue['username']==$user && $rowvalue['password']==$pwd)
{
		echo("redirecting...");
		header("refresh:2; url=select.html");
		break;
}

else
{
		echo('<br><br> <h1 align="center" style="color:red">INVALID &nbsp USERNAME &nbsp OR &nbsp PASSWORD <br><br> Enter correct details</h1>');
		header("refresh:3; url=login.html");
		break;
}
}
?>
