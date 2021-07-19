<?php require_once ('includes/connect.php'); ?>

<?php 
	
	if($_POST['submit1'])
	{
		
		$fname = $_POST["fname"];
		$email = $_POST["email1"];
		$phone = $_POST["phone"];
		$address1 = $_POST["address1"];
		$town = $_POST["address2"];
		$username = $_POST["username"];
		$password = $_POST["password"];
	
		
		$sql = "UPDATE account 
				SET 
				
				fullname = '$fname',
				email = '$email',
				phone = '$phone', 
				address1 = '$address1',
				town = '$town',
				password = '$password'
				
				WHERE username = '$username' ";
		
		
		if(mysqli_query($conn, $sql)) {
			
			header ("Location: myaccount.php");
			
		}
		else{
			
			echo "<script> alert ('ERROR: could not able to execute the query')</script>";
		
		}
	}
	
    else if($_POST['submit2'])
	{
		
		$username = $_POST["username"];
	
		
		$sql = "DELETE FROM account		
				WHERE username = $username";
	
		
		if(mysqli_query($conn, $sql)) {
			
			echo "<script> alert ('Account successfully deleted')</script>";
			
			header ("Location: index.php");
			
		}
		else{
			
			echo "<script> alert ('ERROR: could not able to execute the query')</script>";
		
		}
	
	}
	
	
	mysqli_close($conn);

?>