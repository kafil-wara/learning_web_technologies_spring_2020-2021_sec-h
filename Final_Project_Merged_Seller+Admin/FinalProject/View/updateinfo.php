<?php 
			include ('../model/dbConn.php');
            //get the id of selected user
            $id = $_GET['id'];

            //sql to get the id
            $sql = "SELECT * FROM products WHERE id=$id";

            //execuate the cuery
            $conn = getConnection();
            $res = mysqli_query($conn, $sql);

            //check weather the quary exucation
            if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                
                if($count==1)
                {    
                    $row = mysqli_fetch_assoc($res);
                    $name = $row['name'];
					$vendorname = $row['vendorname'];
                    $catagory = $row['catagory'];                   	
	              	$model = $row['model'];
	            	$price = $row['price'];
                  	$stock = $row['stock'];            
                }
                else
                {
                    
                }
            }
        
?>
		
<form action="../controller/updateproductcheck.php" method="post">
            <table>
                <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="name" id="" value="<?php echo  $name; ?>"></td>
                </tr>
				
				<tr>
                    <td>Vendor Name: </td>
                    <td> <input type="text" name="vendorname" id="" value="<?php echo  $vendorname; ?>"></td>
                </tr>

                <tr>
                    <td>Catagory: </td>
                    <td> <input type="text" name="catagory" id="" value="<?php echo  $catagory; ?>"></td>
                </tr>


                <tr>
                    <td>Model: </td>
                    <td> 
                        <input type="text" name="model" value="<?php echo  $model; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td> <input type="text" name="price" id="" value="<?php echo  $price; ?>"></td>
                </tr>

                <tr>
                    <td>Stock: </td>
                    <td> <input type="text" name="stock" id="" value="<?php echo  $stock; ?>"></td>
                </tr>

                      
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="id" value=" <?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update">
                    </td>
                </tr>

            </table>

        </form>