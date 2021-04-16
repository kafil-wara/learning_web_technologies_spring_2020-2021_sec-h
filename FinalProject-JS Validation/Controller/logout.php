<?php

	session_start();
	unset($_SESSION['type']);
	unset($_SESSION['username']);
	setcookie('flag', true, time()-3600, '/');
	header('location: ../view/login.html');

?>