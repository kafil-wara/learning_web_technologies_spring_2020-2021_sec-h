<?php 

	//connection
	$conn = mysqli_connect('localhost', 'root', '', 'Users');

	/*if($conn){
		echo "success";
	}else{
		die('DB error');
	}*/

	$sql = 'select * from table1';
	$result = mysqli_query($conn, $sql);

	echo "<table border=1> 
			<tr>
				
				<td>Username</td>
				<td>Email</td>
				
			</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		
		echo 	"<tr>
					
					<td>{$row['Username']}</td>
					<td>{$row['Email']}</td>
					
				</tr>";
	}
	echo "</table>";

	//$sql = "select * from users where username='' and password=''"; 
	
	//query
	//$sql = "SELECT * FROM table1"; 


	//array
	//$result = mysqli_query($conn, $sql);
	//print_r($result);


	//close
	mysqli_close($conn)

?>