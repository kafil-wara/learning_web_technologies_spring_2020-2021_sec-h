<?php
	//session_start();
	$title = "Home Page";
	include('header.php');
?>
	<form action="" method="">
		<fieldset>
				
			<table border="5"  width="100%" align="center">
				<tr align="center">
					<td width="100px">
						
					</td>
					
					<td colspan="0" height="80px" align="right">
						<div align="right"> 
							<h1 align="center">Welcome <?php echo $_SESSION['username']?></a></h1> <a href="sellerDashboard.php"> <h2> Dashboard </h2></a> 
						
						</div>
					</td>
				</tr>
				<tr align="left" height="500px" width="1000px">
					<td>
						<div class="menu">
                        <a href="verification.php"><h4>Add product</h4></a>
							<a href="#"><h4>Top Rated Products</h4></a>
							<a href="#"><h4>Television</h4></a> 
							<a href="#"><h4>Mobile</h4></a> 
							<a href="#"><h4>Home Appliances</h4></a> 
							<a href="#"><h4>Kitchen Appliances</h4></a> 
							<a href="#"><h4>Fan</h4></a>
							<a href="#"><h4>Camera</h4></a>
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
