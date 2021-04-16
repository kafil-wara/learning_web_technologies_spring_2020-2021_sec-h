<?php
    session_start();
    if ($_SESSION['type'] != 'admin')
        header('location: home.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>
	<a href='admin_home.php'>Back</a>


	<h2 align="center">Deletion is Irreversible!</h2>

	<form action="../controller/deleteProducts.php" method="POST">
		<table align="center">
			<td>
			Product's ID:
			<input type="number" name="productId">	
			<input type="submit" name="deleteSubmit" value="DELETE!"><br><br><br><br>
		</td>	
		</table>
		
		
		<?php

		include("../controller/showAllProducts.php");
		
		?>
		
	</form>

</body>
</html>