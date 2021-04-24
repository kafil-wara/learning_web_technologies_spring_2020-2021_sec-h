<?php 

	include ('../model/dbConn.php');
    if(isset($_POST['create'])){
        if(empty($_POST['name']) || empty($_POST['vendorname']) || empty($_POST['catagory']) || empty($_POST['model']) || empty($_POST['price'])){
            echo"Plaese fill out all the field";
        }
        else{
         
				$name= $_POST['name'];
				$vendorname= $_POST['vendorname'];
				$catagory= $_POST['catagory'];              
                $model=$_POST['model'];
                $price= $_POST['price'];
				$stock= $_POST['stock'];				
                
              
				 $sql = "INSERT INTO products SET

                    id = '',

                    name = '$name',
					
					vendorname = '$vendorname',
					
					catagory = '$catagory',                

                    model = '$model',

                    price = '$price',
					
					stock = '$stock'
										

                    ";



                    //Executing quary and saving data into data base
                    $conn = getConnection();
                    $res = mysqli_query($conn, $sql) or die(mysqli_error());

                    

                    //check whether the data 

    

                    if($res==TRUE)

                    {

                        echo "data inserted";
    

                    }

                    else

                    {

                        echo "failed";

                    }
              

           

            
        }
    }

?>