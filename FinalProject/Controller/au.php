<?php

    require_once('../model/functions.php');
    if(isset($_POST['addUser']))
    {
    	$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['userType'];



		if($name == "" || $username == "" || $password == "" || $email == "" || $type == "")
			echo "null submission...";
		else
		{
			$userInfo = [
								'name' => $name,
								'username' => $username,
								'password' => $password,
								'email' => $email,
								'userType' => $type,
							];

			addUser($userInfo);
		}

    }

?>