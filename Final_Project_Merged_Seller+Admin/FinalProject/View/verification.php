<?php
    session_start();
    if ($_SESSION['verification']!= 0)
        header('location: addProduct.php');
	else
		echo ("User Not Verified, Plase contact Admin");
?>