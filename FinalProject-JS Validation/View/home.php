<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<h1 align="middle">Electronic Shop</h1>
</head>
<body>
	<div align="left">
        
    </div>
    <?php
    	session_start();
    	if($_SESSION['username'] != "")
    		echo "<div align='right'><a href='../controller/logout.php'>Log Out</a></div>";
    	else
    		echo "<div align='right'><a href='login.html'>Login | </a> <a href='registration.html'>Sign Up | </a> <a href=''>About Us</a> </div>";
    ?>
    <?php
			//session_start();
            if ($_SESSION['type'] == 'admin') {
                echo"<a href='admin_home.php'>Admin Dashboard</a>";
            }
        ?>

	    </div>
		<fieldset>
		<legend>Best Selling Products</legend>
			<dl>
				<dt>Peltier Chip 50w</dt>
				<dd>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</dd>
			</dl>
			<dl>
				<dt>RC Antenna</dt>
				<dd>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</dd>
			</dl>
			<dl>
				<dt>RC Remote</dt>
				<dd>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</dd>
			</dl>
	</fieldset>

	<fieldset>
		<legend>Top Rated Sellers</legend>
			<dl>
				<dt>ABCD RC Store</dt>
				<dd>Get all your RC supplies in one place!</dd>
			</dl>
			<dl>
				<dt>Basic Electronic Shop</dt>
				<dd>All your electronic and electrical needs in one shop</dd>
			</dl>
	</fieldset>

</body>
<footer>
	
            
            <ul align="middle">
                <a href="#">Home | </a> <a href="#">Services | </a> <a href="#">About | </a> <a href="#">Terms | </a> <a href="#">  Privacy Policy</a>
                            </ul>
            <p align="middle">Electronic Shop © 2021</p>
        
</footer>
</html>