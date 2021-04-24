<?php

	require_once('../model/functions.php');


	$id = $_POST['id'];

	if(isset($_POST['refund']))
		refundOrder($id);

	else if(isset($_POST['delivered']))
		deliverOrder($id);


?>