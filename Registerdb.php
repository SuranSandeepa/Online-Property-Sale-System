<?php require_once('includes/connect.php'); ?>

<?php
	if(isset($_POST['register'])){
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$user_name =$_POST['username'];
		$gender = $_POST['radio'];
		$mobile_number = $_POST['mobile'];
		$email = $_POST['emailAdd'];
		$address =$_POST['address'];
		$dob = $_POST['dob'];
		$password = $_POST['pw'];
		$sqlrg = "INSERT INTO register values('', '$first_name','$last_name','$user_name','$gender','$mobile_number','$email','$address','$dob','$password')";

		$result = mysqli_query($conn,$sqlrg);

		if($result){
              header("Location:login.php");
            exit();
          
            }
        else{
            echo"<script>alert('Not Saved Your Details')</script>";
        }
	}

	mysqli_close($conn);
?>
