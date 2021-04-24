<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('../view/login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>