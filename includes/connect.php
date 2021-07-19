<?php
	$servername ="localhost";
	$username ="root";
	$password ="";
	$db = "New Door";


	//Database Connection
	$conn = new mysqli($servername, $username, $password, $db);

	//check connection 

	if($conn->connect_error)
	{
		die("connection failed: ".$conn->connect_error);
	}
	else{
		//echo"Connected Successfull";
	}
	
?>
