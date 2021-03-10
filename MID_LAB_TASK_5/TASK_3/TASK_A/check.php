<?php

	if (isset($_POST['submit'])) {
		$date = $_POST['date'];

		if ($date == '')
			echo "Null Submission";
		else
			echo "Date: " . $date;
	}

?>