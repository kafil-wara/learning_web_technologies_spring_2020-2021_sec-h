<?php

	if (isset($_POST['degree'])) 
	{
		$degree = $_POST['degree'];

		
			echo "degree: " . $degree;

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Task 5.B</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="degree" value="SSC">
			<label for="SSC">SSC</label>

			<input type="checkbox" name="degree" value="HSC">
			<label for="HSC">HSC</label>

			<input type="checkbox" name="degree" value="BSc">
			<label for="BSc">BSc</label>

			<input type="checkbox" name="degree" value="MSc">
			<label for="MSc">MSc</label>

			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>