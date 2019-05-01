<?php
	ob_start();
	include_once 'login.php';
	ob_clean();
	$ins  = $_POST["ins"];
	$anun = $_POST["anun"];

	if($conn){
		$q = "UPDATE pop SET $anun = '$ins' where P_Id like '$id';";
		$result = mysqli_query($conn,$q);
	}



?>