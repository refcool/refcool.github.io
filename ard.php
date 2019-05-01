<?php
include_once'connect.php';

$id = $_GET["id"];
$what = $_GET["what"];

$sql = "SELECT * FROM pop where P_Id like '$id';";
$result1 = mysqli_query($conn,$sql);

if(mysqli_num_rows($result1)>0){
	$row = mysqli_fetch_assoc($result1);
		
	echo $row[$what];


}

?>