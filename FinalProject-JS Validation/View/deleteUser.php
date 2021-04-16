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

	<h2 align="center">Deletion is irreversible!</h2>

	<form action="../controller/deleteUser.php" method="POST">
		<table align="center">
			<td>
				Username:
				<input type="text" name="userToDelete">	
				<input type="submit" name="deleteSubmit" value="DELETE!">
			</td>	
		</table>
		
		
		
	</form>


	<?php
		include('../controller/showAllUsers.php');
	?>

</body>
</html>