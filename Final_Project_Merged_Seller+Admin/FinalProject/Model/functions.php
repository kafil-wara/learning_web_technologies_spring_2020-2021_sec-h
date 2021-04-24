<?php
	
	require_once('dbConn.php');

	

	function addUser($user){

		$conn = getConnection();
		$sql = "insert into users values('{$user['']}','{$user['username']}', '{$user['password']}', '{$user['gender']}' , '{$user['email']}', '{$user['userType']}', '{$user['verification']}')";
		
		if(mysqli_query($conn, $sql))
			//echo "Records added Successfully!";
			header('location: ../view/addUser.php');

		else
    		echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type={$user['type']} ";
		
		if(mysqli_query($conn, $sql))
			return true;
		else
    		echo "ERROR: Could to execute $sql. " . mysqli_error($conn);
	}

	function deleteUser($username){
		$conn = getConnection();
		$sql = "delete from users where username='{$username}'";
		
		if(mysqli_query($conn, $sql))
			header('location: ../view/deleteUser.php');
			//echo "Deletion Successful!";
		else
    		echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
	}



	function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		// $type = mysqli_query($conn, "SELECT type FROM users WHERE username='{$username}'");
		// if($type == 'admin')
		// 	header("location: ../view/admin_home.php");
		// else
		// 	header("location: ../view/home.html");

		if(count($row) > 0)
			return true;
		else
			return false;
		
	}

	function getUserById($username){

		$conn = getConnection();

		$sql = "select * from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	// function getAllUser(){
	// 	$conn = getConnection();
	// 	$sql = "select * from users";
	// 	$result = mysqli_query($conn, $sql);
	// 	$users =[];

	// 	while($row = mysqli_fetch_assoc($result)){
	// 		array_push($users, $row); 
	// 	}

	// 	return $users;
	// }



	function addProduct($product){

		$conn = getConnection();
		$sql = "insert into products values('{$product['id']}','{$product['name']}', '{$product['price']}', '{$product['stock']}')";
		
		if(mysqli_query($conn, $sql))
			header('location: ../view/addProduct.php');
			//echo "Records added Successfully!";
		else
    		echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
	}


	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from products where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			//echo "Deletion Successful!";
			header('location: ../view/deleteProduct.php');
		}
		else
    		echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
	}

	function verifySeller($seller) {
		$conn = getConnection();
		$sql = "UPDATE users SET verification=1 WHERE type='seller' AND username='{$seller}'";

		if(mysqli_query($conn, $sql))
			header('location:../view/verify&RestrictSeller.php');
			//echo "verification successful!";
		else
			echo "ERROR: Could not execute $sql. " . mysqli_error($conn);

	}

	function restrictSeller($seller) {
		$conn = getConnection();
		$sql = "UPDATE users SET verification=0 WHERE type='seller' AND username='{$seller}'";

		if(mysqli_query($conn, $sql))
			header('location:../view/verify&RestrictSeller.php');
			//echo "Restriction successful!";
		else
			echo "ERROR: Could not execute $sql. " . mysqli_error($conn);

	}

	function refundOrder($id) {
		$conn = getConnection();
		$sql = "UPDATE ordered SET delivered=0 WHERE id='{$id}'";

		if(mysqli_query($conn, $sql))
			header('location:../view/refund.php');
			//echo "Refund successful!";
		else
			echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
	}


	function deliverOrder($id) {
		$conn = getConnection();
		$sql = "UPDATE ordered SET delivered=1 WHERE id='{$id}'";

		if(mysqli_query($conn, $sql))
			header('location:../view/refund.php');
			//echo "Refund successful!";
		else
			echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
	}


?>