<?php

	if (isset($_POST['submit'])) {
		$date = $_POST['date'];

		echo "$date";
	}

	$_POST = array();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Task 2.A</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DOB</legend>
			<input type="date" name="date" value="<?php if(isset($_POST['date'])) echo $_POST['date']; ?>"> <br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>