<?php
	
	require_once('../model/functions.php');

	$seller = $_POST['sellerUserName'];

	if(isset($_POST['sellerVerify']))
		verifySeller($seller);
	else if(isset($_POST['sellerRestrict']))
		restrictSeller($seller);

?>