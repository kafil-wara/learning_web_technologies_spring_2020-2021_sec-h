<?php
	
	//require_once('../model/dbConn.php');

	//getConnection();
	//echo "<a href='admin_home.php'>Back</a>";
	echo"<table border='1' align='center'>";
	echo "<h2 align='center'>User List</h2>;

	<tr>
		<th>ID</th>
		<th>Username</th>
		
		<th>Gender</th>
		<th>Email</th>
		<th>User Type</th>
		<th>Verification</th>
	</tr>";

	$connection = mysqli_connect("localhost", "root", "", "project");

	$result = mysqli_query($connection, "SELECT * FROM users");

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr align='center'>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		//echo "<td>" . $row['password'] . "</td>";
		echo "<td>" . $row['gender'] . "</td>";

		echo "<td>" . $row['email'] . "</td>";
		echo "<td>" . $row['type'] . "</td>";
		echo "<td>" . $row['verification'] . "</td>";

	}

	echo "</table>";


	



?>