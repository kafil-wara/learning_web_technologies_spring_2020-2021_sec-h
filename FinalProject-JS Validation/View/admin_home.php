<?php
	session_start();
	if ($_SESSION['type'] != 'admin')
		header('location: home.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<div align="right"><a href="../controller/logout.php">Log Out</a></div>

</head>
<body>

	<h1 align="center">Admin Dashboard</h1>
	<h2 align="center"><p class="welcome">Welcome, <b><?php echo $_SESSION['username']; ?></b></p></h2>

	<table width="100%">
		

		<tr align="center" height="500px" width="1000px">
					<td>
						<div class="menu">
							<a href="../controller/showAllProducts.php">Show All Products</a><br>
							<a href="addProduct.php">Add Products</a><br>
							<a href="deleteProduct.php">Delete Products</a><br><br><br>
							<a href="../controller/showAllUsers.php">Show All Users</a><br>
							<a href="deleteUser.php">Delete Users</a><br>
							<a href="addUser.php">Add User</a><br>
							<a href="contactUser.html">Contact User</a><br><br><br>
							<a href="home.php">Home Page</a><br>
							<a href="verify&RestrictSeller.php">Verify/Restrict seller</a><br>
							<a href="orderedProducts.php">Show ordered Products</a><br>
							<a href="complaints.html">Check Complaints</a><br>
							<a href="refund.php">Refund</a><br>

						  </div>
					</td>
					
				</tr>
	</table>


</body>

<footer>
	
            
            <ul align="middle">
                <a href="#">Home | </a> <a href="#">Services | </a> <a href="#">About | </a> <a href="#">Terms | </a> <a href="#">  Privacy Policy</a>
                            </ul>
            <p align="middle">Electronic Shop © 2021</p>
        
</footer>

</html>




