<?php
	
	
    // session_start();
    // if ($_SESSION['type'] != 'admin')
    //     header('location: home.php');
	
	//echo "<a href='admin_home.php'>Back</a>";
	echo"<table border='1' align='center'>
	<tr>
		<th>ID</th>
		<th>Name</th>
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
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['price'] . "</td>";
		echo "<td>" . $row['quantity'] . "</td>";
		echo "<td>" . $row['total'] . "</td>";
		echo "<td>" . $row['delivered'] . "</td>";
		
	}

	echo "</table>";




	



?>