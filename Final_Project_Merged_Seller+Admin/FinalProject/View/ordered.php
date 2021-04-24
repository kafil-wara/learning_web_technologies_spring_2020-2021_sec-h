<?php
	$title = "Dashboard";
	include ('../model/dbConn.php');
	
?>

	<form action="">
		<fieldset>
			
			
			
			<table border="5"  width="100%" align="center">
				<tr align="center">
					<td width="100px">
						
					</td>
			
					<td colspan="0" height="80px" align="right">
						<div> 
							<h2><a href="sellerDashboard.php"> Back</a></h2>
						</div>
					</td>
				</tr>
				<tr align="left" height="500px" width="1000px">
					<td>
						<div class="menu">
							<a href="#"><h4>Sold Items</h4></a> 
							 
							
						  </div>
					</td>
					<td colspan="0" height="80px" align="center">
				<table border= "1">
						   
                <tr>
                    <th>ID </th>
                    <th>Name </th>
                    <th>Model </th>
                    <th>Vendor Name </th>                   
                    <th>Price </th>
                    <th>Quantity</th>
					<th>Total</th>
					<th>Delivered</th>
					<th>Action </th>
                      
                </tr>

                <?php
                    
                    $sql = "SELECT * FROM ordered";
                    $conn = getConnection();
                    $res = mysqli_query($conn, $sql);
                    
                    
                    if($res==TRUE)
                    {
                       
                        $count = mysqli_num_rows($res);

                        
                        $sn=1; 

                        
                        if($count>0)
                        {
                            
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                
                                $id = $rows['id'];
                                $name = $rows['name'];
								$model = $rows['model'];
								$vendorname = $rows['vendorname'];		                       								                        	
								$price = $rows['price'];
	                        	$quantity = $rows['quantity'];
								$total = $rows['total'];
								$delivered = $rows['delivered'];
                                //display the values in table
                                ?>

                                    <tr>
										<td><?php echo  $id; ?></td>
                                        <td><?php echo  $name; ?></td>
										<td><?php echo  $model; ?></td>
                                        <td><?php echo  $vendorname; ?> </td>                                                                               
                                        <td><?php echo  $price; ?></td>
                                        <td><?php echo  $quantity; ?></td>
										<td><?php echo  $total; ?></td>
										<td><?php echo  $delivered; ?></td>
										
                                        
                                        <td>
                                            <a href="updateorderinfo.php?id=<?php echo $id; ?>" >Mark As Delivered</a>
                                            
                                        </td>
                
                                    </tr>

                                <?php
                            }
                        }
                        else
                        {
                            
                        }

                    }
                
								?>
            </table>
					
					</td>
				</tr>
			
				<tr align="center" >
					<td colspan="3" height="50px">
						
						
					</td>
				</tr>
			</table>
	</fieldset>
	</form>