<?php
	//session_start();
	require_once('../model/functions.php');
	require_once('../model/dbConn.php');

	if(isset($_POST['submit'])){


		if($_POST['username'] == "" || $_POST['password'] == "")
			echo "null submission";
		else
		{
			session_start();
			$currUser = getUserById($_POST['username']);
			$username = $currUser['username'];
			$password = $currUser['password'];
			$type = $currUser['type'];
			$verification = $currUser['verification'];
			$check = false;

			if($username == $_POST['username'] && $password == $_POST['password'])
			{
				$check = true;
				session_start();
				$_SESSION['username'] = $username;
				if($type == 'admin')
				{
					$_SESSION['type'] = 'admin';
					header('location: ../view/admin_home.php');
				}
				else
				{
					session_start();
					$_SESSION['username'] = $username;
					$_SESSION['type'] = $type;
					$_SESSION['verification'] = $verification;

					header('location: ../view/seller.php');
				}
			}
		}

		// $userFile = fopen("../model/userInfo.json", "r");
		// $userData = fread($userFile, filesize('../model/userInfo.json'));
		// $userInfoAll = json_decode($userData, true);

		// $username = $userInfoAll['username'];
		// $password = $userInfoAll['pass'];

		// $username = $_POST['username'];
		// $password = $_POST['password'];
		// validateUser($username, $password);

		// $status = validateUser($username, $password);
		// if($status)
		// {
		// 	$user = getUserById($username);
		// 	if($user['type'] == "admin")
		// 		header('location: ../view/admin_home.php');
		// 	else
		// 		header('location: ../view/home.html');
		// }
		

		// $_SESSION['name'] = $username;
		// setcookie('flag', true, time()+3600, '/');
		// header('location: ../view/admin_home.php');

		// if($username == "" || $password == ""){
		// 	echo "null submission...";
		// }else{

		// 	if($username == $_POST['username'] && $password == $_POST['password']){
		// 		$_SESSION['flag'] = true;
		//header('location: ../view/admin_home.html');
		// 	}else{
		// 		echo "invalid user";
		// 	}
		// }

	}
?>