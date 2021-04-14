<?php
	
	require_once('../model/functions.php');


	$username = $_POST['userToDelete'];

	deleteUser($username);


?>