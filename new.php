<?php

$con = $con = mysqli_connect("127.0.0.1","root","","tanay");

mysqli_select_db($con,"tanay");

$sql="SELECT * FROM ticket";

$records=mysqli_query($con,$sql);

?>

<html>
	<head>
		<title>Booked Tickets</title>
		<center><font color="white" size="7"><u>Your &nbsp Ticket &nbsp Details</u></font></center>
	</head>
	
	<body background="train2.jpg">
	<center>
	<br><br>
	<pre>
		<table width="600" border="4" cellpadding="3" cellspacing="3" style="color:white" bgcolor="grey">
			<font color="white">
			<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Departure</th>
			<th>Destination</th>
			<th>Coach</th>
			<th>Date</th>
			<th><table bgcolor="blue">Cancel Ticket</table></th>
			</th>
			</font>
		
		<?php
		while($rowvalue=mysqli_fetch_array($records))
		{
		echo "<tr>";		
		echo "<td>".$rowvalue['name']."</td>";
		echo "<td>".$rowvalue['age']."</td>";
		echo "<td>".$rowvalue['departure']."</td>";
		echo "<td>".$rowvalue['destination']."</td>";
		echo "<td>".$rowvalue['coach']."</td>";
		echo "<td>".$rowvalue['date']."</td>";
		$id=$rowvalue['name'];
		echo "<td>"."<form action='delete.php'><input type='hidden' name='id' value='$id' /><input type='submit' value='Cancel Ticket'></form>"."</td>";
		}
		?>
		</table>
	</pre>
	</center>
	</body>
</html>