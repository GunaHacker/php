<?php
$server = "excomatix.mysql.database.azure.com";
	$username = "sqladmin";
	$pass = "0pO(B4[G9W]F";
	$db = "excomatix";

	if(in_array($_SERVER['HTTP_HOST'],['localhost'])){
		$server = "localhost";
		$username = "root";
		$pass = null;
		$db = "login-test";
	}

	//create connection 

	$conn = mysqli_connect($server,$username,$pass,$db);

	//check conncetion

	if($conn->connect_error){

		die ("Connection Failed!". $conn->connect_error);
	}

?>
