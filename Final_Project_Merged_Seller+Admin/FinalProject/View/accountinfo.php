<?php
	$title = "Dashboard";
	include ('../db/db.php');
	
?>

	<form action="">
		<fieldset>
			
			<table border="5" " width="100%" align="center">
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
							
							<a href="#"><h4>View Account Information</h4></a> 
							 	
						</div>
					</td>
					<td colspan="0" height="80px" align="center">
				<table border="1">
                <tr>
                    <th>ID </th>
                    <th>Name </th>
                    <th>Password </th>
                    <th>Date of Birth </th>
                    <th>Gender </th>
                    <th>Email </th>
                    <th>Phone </th>
                    <th>Address </th>
                    
                </tr>

                <?php
                    //Quary to get user
                    $sql = "SELECT * FROM alluser";
                    //Execute the quary
                    $res = mysqli_query($conn, $sql);
                    
                    //check the query 
                    if($res==TRUE)
                    {
                        //count Rows to check the data base
                        $count = mysqli_num_rows($res);

                        //create a variable
                        $sn=1; 

                        //Check the nymber of rows
                        if($count>0)
                        {
                            //we have data in databae
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                                            
                                $id = $rows['id'];
                                $name = $rows['name'];
		                        $password = $rows['password'];
	                        	$dob = $rows['dob'];
	                        	$gender = $rows['gender'];
								$email = $rows['email'];
	                        	$phone = $rows['phone'];
	                        	$address = $rows['address'];
                             
                ?>              	
                                    <tr>
                                        <td><?php echo  $id; ?></td>
                                        <td><?php echo  $name; ?> </td>
                                        <td><?php echo  $password; ?></td>
                                        <td><?php echo  $dob;    ?></td>
                                        <td><?php echo  $gender; ?></td>
                                        <td><?php echo  $email;  ?></td>
                                        <td><?php echo  $phone;  ?></td>
                                        <td><?php echo  $address; ?></td>
                                        <td>
                                            
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
							
