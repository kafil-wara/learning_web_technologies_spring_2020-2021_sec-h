<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
</head>
<body>
	<form method="post" action="../controller/addProductCheck.php" enctype="multipart/form-data" onsubmit = "return checkproduct()">
		


		<fieldset>
			
			
			<table  width="100%" align="center">
				<tr align="center">
					<td width="100px">
						
					</td>
					<td colspan="2" height="80px" align="right">		
					</td>
				</tr>
				<tr align="left" height="300px">
					<td colspan="3">
						
							<legend align="center"><h1><u>Add new product</u></h1></legend>
							<table align="center">
								<tr>
									<td><span>Product name</span> </td>
									<td><input type="text" name="name" id="name" value="" placeholder="Product name"></td>
									
								</tr>
								
								<tr>
									<td><span>Vendor name</span> </td>
									<td><input type="text" name="vendorname" id="vendorname" value="" placeholder="Vendor name"></td>
									
								</tr>
								
								<tr>
									<td><span>Catagory</span></td>
									<td>
									<select name="catagory" id="catagory">
										<option value="Television">Television</option>
										<option value="Mobile">Mobile</option>
										<option value="Home Appliances">Home Appliances</option>
										<option value="Kitchen Appliances">Kitchen Appliances</option>
										<option value="Fan">Fan</option>
										<option value="Camera">Camera</option>
									 </select>
									 </td>
									
									
								</tr>
								
								<tr>
									<td>Model</td>
									<td> <input type="text" name="model" id="model" value="" placeholder="Model"> </td>
								</tr>
								
								<tr>
									<td>Price</td>
									<td><input type="text" name="price" id="price" value="" placeholder="Price"></td>
								</tr>
								
								<tr>
									<td>Stock</td>
									<td><input type="text" name="stock" id="stock" value="" placeholder="Stock Amount"></td>
								</tr>
							
									
								<tr>
									<td>___________</td>
									<td>______________________</td>
								
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" name="create" value="Create"> 
									</td>
								
								</tr>
							</table>
						
					</td>
				</tr>
			
				<tr align="center" >
					<td colspan="3" height="50px">
						Copyright@2021
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript" src="../model/productcheck.js"></script>
</body>
</html>