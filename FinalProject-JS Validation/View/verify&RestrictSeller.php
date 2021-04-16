<?php
    session_start();
    if ($_SESSION['type'] != 'admin')
        header('location: home.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Seller verification</title>


</head>
<body align="center">
	<p align="left"><a href="admin_home.php">Back</a></p>
	<form action="../controller/verifySeller.php" method="POST">
		<table>
			<tr>
				Seller Username:
				<input type="text" name="sellerUserName"><br><br>
			</tr>
			<tr>
				<input type="submit" name="sellerVerify" value="Verify!">
				<input type="submit" name="sellerRestrict" value="Restrict!"><br><br>	
			</tr>
			
		</table>
	</form>

	<?php
		include('../controller/showAllSellers.php');
	?>
</body>
</html>