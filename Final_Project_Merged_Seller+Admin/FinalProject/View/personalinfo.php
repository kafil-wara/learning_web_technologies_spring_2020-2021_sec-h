<?php 
	
	include ('../model/dbConn.php');
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Personal Info</title>
</head>
<body>
<table>
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $_SESSION['username']?></td>
                        <td rowspan=8 align="center">
                            <img src="#" height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Password </td>
                        <td>: <?php echo $_SESSION['password']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>                   

                    <tr>
                        <td>Gender </td>
                        <td>: <?php echo $_SESSION['gender']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
                        <td>Email </td>
                        <td>: <?php echo $_SESSION['email']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
                        <td>Type </td>
                        <td>: <?php echo $_SESSION['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                                       
</table>
</body>
</html>
			
