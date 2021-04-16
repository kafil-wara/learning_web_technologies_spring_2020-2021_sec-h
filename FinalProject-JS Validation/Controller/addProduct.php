<?php
	


    require_once('../model/functions.php');
    if(isset($_POST['addProduct']))
    {
    	$name = $_POST['name'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];

		if($name == "" || $price == "" || $stock == "")
			echo "null submission...";
		else
		{

			for($i=0; $i<strlen($name); $i++)
			{
				if(!($name[$i] <= 'Z' && $name[$i] >= 'A' || $name[$i] <= 'z' && $name[$i] >= 'a'))
				{
					echo "Name can only be alphabetical<br>";
					//$validationChecker = false;
					break;
					return;
				}
			
			}





			$productInfo = [
								'name' => $name,
								'price' => $price,
								'stock' => $stock,
							];

			addProduct($productInfo);
		}

    }

?>