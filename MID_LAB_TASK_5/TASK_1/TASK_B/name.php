<?php 
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];

		
			echo "$name";
	}

 	$_POST = array();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Task 1.B</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>"> <br>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>