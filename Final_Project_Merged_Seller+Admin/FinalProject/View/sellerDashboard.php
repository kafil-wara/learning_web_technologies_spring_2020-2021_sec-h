<?php
	$title = "Dashboard";
	include('header.php');
?>
	<form action="">
		<fieldset>
			
			
			
			<table border="5" " width="100%" align="center">
				<tr align="center">
					<td width="100px">
						
					</td>
					<td aligh="left">
					<h1>
						
							Welcome <a href="personalinfo.php"><?php echo $_SESSION['username']?></a>
					
					</h1>
						
					</td>
					
					<td colspan="0" height="80px" align="centert">
						<div> 
							<h2><a href="../controller/logout.php"> Logout</a></h2>
						</div>
					</td>
				</tr>
				<tr align="left" height="500px" width="1000px">
					<td>
						<div class="menu">
							<a href="personalinfo.php"><h4>View Account Information</h4></a> 
							<a href="productinfo.php"><h4>View My Products</h4></a> 
							<a href="ordered.php"><h4>Ordered Product</h4></a> 
							<a href="#"><h4>Pending Orders</h4></a> 
							<a href="#"><h4>View Product Reviews</h4></a> 
							<a href="#"><h4>Contact Admin</h4></a> 
							
							
						  </div>
					</td>
					<td colspan="2"></td>
				</tr>
			
				<tr align="center" >
					<td colspan="3" height="50px">
						<?php
							include('footer.php');
						?>
					</td>
				</tr>
			</table>
	</fieldset>
	</form>
