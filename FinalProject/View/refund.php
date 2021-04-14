<?php
    session_start();
    if ($_SESSION['type'] != 'admin')
        header('location: home.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Refund</title>
</head>
<body align="center">
	<p align="left"><a href='admin_home.php'>Back</a></p>

	<form action="../controller/refund.php" method="POST">
		<table>
			<tr>
				Order ID:
				<input type="number" name="id"><br><br>
				<input type="submit" name="refund" value="Refund!">
				<input type="submit" name="delivered" value="Mark As Delivered"><br><br>
			</tr>
		</table>
	</form>

	<?php
		include ('orderedProducts.php');
	?>
</body>
</html>