
<?php require_once('includes/connect.php'); ?>


<?php
	
	
	$fName = $_POST["fname"];
	$number = $_POST["pnumber"];
	$email = $_POST["uemail"];
	$message = $_POST["message"];
	$c= date('d-m-y h:i:s');
	
	
		

	$sql ="INSERT INTO contactme(contact_id,name,number,email,message,date)VALUES('','$fName','$number','$email','$message','$c')";
	

	if(mysqli_query($conn,$sql)=== TRUE){
		header("Location:index.php");
		;
	}
	else{
		echo"<script>alert('ERROR:Could not able to execute')</script>";
	}
	

	mysqli_close($conn);
	
?>