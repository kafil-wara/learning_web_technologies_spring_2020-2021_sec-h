<?php
	$title = "Dashboard";
	include ('../model/dbConn.php');
	
?>
	<form action="">
		<fieldset>
			
			
			
			<table border="5" "width="100%" align="center">
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
							<a href="#"><h4>View My Products</h4></a> 
							 
							
						  </div>
					</td>
					<td colspan="0" height="80px" align="center">
				<table border= "1">
						   
                <tr>
                    <th>ID</th>
                    <th>Name </th>
					<th>Vendor Name </th>
                    <th>Catagory </th>                   
                    <th>Model </th>
                    <th>Price </th>
					<th>Stock</th>
					<th>Action </th>
                      
                </tr>

                <?php
                    
                    $sql = "SELECT * FROM products";
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
								$vendorname = $rows['vendorname'];
		                        $catagory = $rows['catagory'];
	                        	$model = $rows['model'];
								$price = $rows['price'];
	                        	$stock = $rows['stock'];
								
                                //display the values in table
                                ?>

                                    <tr>
										<td><?php echo  $sn++; ?></td>
                                        <td><?php echo  $name; ?></td>
										<td><?php echo  $vendorname; ?></td>
                                        <td><?php echo  $catagory; ?> </td>                                       
                                        <td><?php echo  $model; ?></td>
                                        <td><?php echo  $price; ?></td>
                                        <td><?php echo  $stock;?></td>
										

                                        
                                        <td>
                                            <a href="updateinfo.php?id=<?php echo $id; ?>" >Update</a>
                                            <a href="deleteinfo.php?id=<?php echo $id; ?>" >Delete</a>
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
							
