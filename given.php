<?php

include_once'connect.php';

$id = $_GET["id"];
$what = $_GET["what"];
$insert = $_GET["insert"];

if($conn){
	$q = "UPDATE pop SET $what = '$insert' where P_Id like '$id';";
	$result = mysqli_query($conn,$q);
}

?>