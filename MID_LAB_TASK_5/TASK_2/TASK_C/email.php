<?php

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];

		echo "$email";
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Task 2.A</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"> <br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>