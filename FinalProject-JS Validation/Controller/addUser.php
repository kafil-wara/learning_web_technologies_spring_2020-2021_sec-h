<?php

	require_once('../model/functions.php');
	if(isset($_POST['addUser']))
	{
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
    	$usertype = $_POST['userType'];
    	$verification = false;
    	$validationChecker = true;



	if($name == "" || $username == "" || $password == "" || $email == "" || $usertype == "")
		echo "Null Submission<br>";
	else
	{
		for($i=0; $i<strlen($name); $i++)
		{
			if(!($name[$i] <= 'Z' && $name[$i] >= 'A' || $name[$i] <= 'z' && $name[$i] >= 'a'))
			{
				echo "Name can only be alphabetical<br>";
				$validationChecker = false;
				break;
				return;
			}
			
		}

		$symbol = false;
		$period = false;
		$symbolLocation = 0;
		$periodLocation = 0;


		for($i=0; $i<strlen($email); $i++)
		{
			if($email[$i] == '@')
			{
				$symbol = true;
				$symbolLocation = $i;
			}

			if($email[$i] == '.')
			{
				$period = true;
				$periodLocation = $i;
			}

		}

		if(!($symbol == true && $period == true && $symbolLocation < $periodLocation))
			{
				$validationChecker = false;

				echo "Invalid Email address<br>";
				//break;
				return;
			}
		


		for($i=0; $i<strlen($username); $i++)
		{
			if(!($username[$i] <= 'Z' && $username[$i] >= 'A' || $username[$i] <= 'z' && $username[$i] >= 'a' && $username[$i] >= '9' || $username[$i] >= '0'))
			{
				echo "Userame can only be alphanumeric<br>";
				$validationChecker = false;
				break;
				return;
			}
			
		}


		$userInfo = [
					'name' => $name,
					'username' => $username,
					'password' => $password,
					'email' => $email,
					'userType' => $usertype,
					'verification' => $verification,
				];

	}
		if($validationChecker != true)
			echo "Please input data correctly<br>";
		else
			addUser($userInfo);




		
	


	}
	

?>