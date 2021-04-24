<?php

	require_once('../model/functions.php');
	if(isset($_POST['registration'])){

		//$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
    	$usertype = $_POST['userType'];
    	$verification = false;


		if($username == "" || $email == "" || $password == "" || $repass == "" || $usertype == "" || $gender == "")
			echo "null submission...";
		else
		{
			if($password == $repass)
			{

				
				for($i=0 ; $i<strlen($name) ; $i++)
        		{
            		if(!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122)) && !((ord($name[$i]) >= 65 && ord($name[$i]) <= 90)) && !(ord($name[$i]) == 32))
            		{
                		echo 'Name can only be alphabetical';
                		break;
                		return;
            		}
        		}

        		$atSymbol=false;
        		$atSymbolLocation = 0;
        		$period=false;
        		$periodLocation = 0;

        		for($i=0 ; $i<strlen($email) ; $i++)
        		{
            		if($email[$i] == '@')
            		{
                		$atSymbol = true;
                		$atSymbolLocation = $i;
            		}
            		if($email[$i] == '.')
            		{
               		 	$period = true;
                		$periodLocation = $i;
            		}
        		}
        		if(!($atSymbol == true && $period == true && $atSymbolLocation < $periodLocation))
        		{
           			echo "Email must contain a '@' and '.'";
            		return;
        		}


        		for($i=0 ; $i<strlen($username) ; $i++)
        		{
            		if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)))
            		{
                		echo 'Username can be only alphanumeric';break;
                		return;
            		}
        		}


        		


				$userInfo = [
								//'name' => $name,
								'username' => $username,
								'password' => $password,
								'email' => $email,
								'gender' => $gender,
								'userType' => $usertype,
								'verification' => $verification,
								
				      		];

				addUser($userInfo);


				// $currentData = file_get_contents('userInfo.json');
				// $arrayData = json_decode($currentData, true);
				// $extra = array(
				// 	'name' => $_POST['name'],
				// 	'username' => $_POST['username'],
				// 	'pass' => $_POST['pass'],
				// 	'repass' => $_POST['repass'],
				// 	'email' => $_POST['email']
				// 	);
				// $arrayData[] = $extra;
				// $final_data = json_encode($arrayData);
				// if(file_put_contents('userInfo.json', $final_data))
				// 	$message = "File appended successfully";

				// $inp = file_get_contents('../model/userInfo.json');
				// $tempArray = json_decode($inp);
				// array_push($tempArray, $userInfo);
				// $jsonData = $json_encode($tempArray);
				// file_put_contents('../model/userInfo.json', $jsonData);

				// $allData = json_encode($userInfo);
				// $userData = fopen("../model/userInfo.json", "w");
				// fwrite($userData, $allData);
				// fclose($userData);
				header('location: ../view/login.html');



			}
			else
				echo "password & confirm password mismatch..";
	
		}

	}
?>