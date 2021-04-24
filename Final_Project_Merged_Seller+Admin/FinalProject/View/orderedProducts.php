<?php
	
	
    // session_start();
    // if ($_SESSION['type'] != 'admin')
    //     header('location: home.php');
	
	//echo "<a href='admin_home.php'>Back</a>";
	echo"<table border='1' align='center'>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Model</th>
		<th>Vendor Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
		<th>Delivered</th>
	</tr>";

	$connection = mysqli_connect("localhost", "root", "", "project");

	$result = mysqli_query($connection, "SELECT * FROM ordered");

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td align='center'>" . $row['id'] . "</td>";
		echo "<td align='center'>" . $row['name'] . "</td>";
		echo "<td align='center'>" . $row['model'] . "</td>";
		echo "<td align='center'>" . $row['vendorname'] . "</td>";

		echo "<td align='center'>" . $row['price'] . "</td>";
		echo "<td align='center'>" . $row['quantity'] . "</td>";
		echo "<td align='center'>" . $row['total'] . "</td>";
		echo "<td align='center'>" . $row['delivered'] . "</td>";
		
	}

	echo "</table>";




	



?>