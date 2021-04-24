<?php include('../model/dbConn.php'); ?>
<?php 
	
    if(isset($_POST['submit']))
	{
        $id = '';
		$name = $_POST['name'];
		$catagory = $_POST['catagory'];
		$vendorname = $_POST['vendorname'];
		//$entrydate = $_POST['entrydate'];
		$model = $_POST['model'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];


		//$discount = $_POST['discount'];
		//$status = $_POST['status'];
		

		$sql = "UPDATE products SET
			
			id = '',
			name = '$name',
			vendorname = '$vendorname'
			catagory = '$catagory',
			model = '$model',
			price = '$price',
			stock = '$stock',
			
            WHERE id='$id'
		";
		
		//Executing quary and saving data into data base
		$conn = getConnection();
		$res = mysqli_query($conn, $sql);

		if($res==TRUE)
		{
			echo "data inserted";			
		}
		else
		{
			echo "data not updated";
		}


	}

?>