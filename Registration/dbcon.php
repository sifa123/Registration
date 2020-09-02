<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "upload";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	echo "connection successfull";
}else{
	echo "No connection";
}



?>