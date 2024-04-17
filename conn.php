<?php
$server = "excomatixmsd.database.windows.net";
	$username = "excomatixadmin";
	$pass = "f_a62!KjZN$4pk9Wy";
	$db = "excomatixmsd";

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
