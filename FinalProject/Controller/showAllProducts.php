<?php
	//session_start()
	
	//require_once('../model/dbConn.php');

	//getConnection();
	//echo "<a href='admin_home.php'>Back</a>";
	echo "<h2 align=center>Inventory</h2>";
	echo"<table border='5' align = center>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
		<th>Available Qauntity</th>
	</tr>";

	$connection = mysqli_connect("localhost", "root", "", "project");

	$result = mysqli_query($connection, "SELECT * FROM products");

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr align='center'>";
		echo "<td width='150' align = center>" . $row['id'] . "</td>";
		echo "<td width='150' align = center>" . $row['name'] . "</td>";
		echo "<td width='150' align = center>" . $row['price'] . "</td>";
		echo "<td width='150' align = center>" . $row['stock'] . "</td>";
		
	}

	echo "</table>";





	// echo "<form action='../controller/deleteProducts.php' method='POST'>
	// 		<td>Name:
	// 		<input type='text' name='name'>
	// 		<input type='submit' name='deleteProductSubmit' value='Delete!'>
	// 		</td>";




	



?>