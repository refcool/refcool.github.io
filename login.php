<?php
include_once'connect.php';


$user = $_POST["user"];
$pass = $_POST["pass"];
/*
$user = "test";
$pass = "test";

*/
if($conn){
	
	$q = "SELECT * FROM users where user like '$user' and pass like '$pass';";

	$result = mysqli_query($conn, $q);
	if (mysqli_num_rows($result) > 0) {
		echo "logged";
		$stug =1;
		$ray = mysqli_fetch_assoc($result);

		$id = $ray['Id'];


	}else{
		$stug = 0;
		echo "login faild.";
	}

}else{
	$stug =0;
	echo "Not connected.... ba";

}


?>
