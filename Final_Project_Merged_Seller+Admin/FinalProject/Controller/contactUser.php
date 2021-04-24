<?php

	if(isset($_POST['contactUser'])){

		$subject = $_POST['subject'];
		$message = $_POST['message'];
		

		if($subject == "" || $message == "")
			echo "null submission...";
		else
			echo "Message sent!";
	}

?>