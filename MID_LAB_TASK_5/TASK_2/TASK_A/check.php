<?php

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];

		if ($email == '')
			echo "Null Submission";
		else
			echo "Email: " . $email;
	}

?>