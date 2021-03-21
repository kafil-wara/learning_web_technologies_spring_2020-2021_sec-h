<?php

	$conn = mysqli_connect('localhost', 'root', '', 'product_db');

	
	$name = $_POST['name'];
	$buying_price = $_POST['bp'];
	$selling_price = $_POST['sp'];
	$displayable = $_POST['display'];
	if ($displayable != 'Yes')
		$displayable = 'No';

	$sql = "INSERT INTO products (name, buying_price, selling_price, displayable) VALUES ('$name', '$buying_price', '$selling_price', '$displayable')";

	if(mysqli_query($conn, $sql))
    	echo "Records added successfully.";
 	else
    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

	mysqli_close($conn);

?>