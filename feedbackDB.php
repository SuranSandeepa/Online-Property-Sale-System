<?php require_once('includes/connect.php'); ?>

<?php
	if(isset($_POST['submit_fb'])){
		$rate_us = $_POST['radio'];
		$userName = $_POST['f_name'];
		$userEmail =$_POST['f_email'];
		$feedback = $_POST['comment'];

		$sqlfb ="INSERT INTO feedback values('', '$rate_us','$userName','$userEmail','$feedback')";

		$resultfb = mysqli_query($conn,$sqlfb);

		if($resultfb){
              header("Location:feedback.php");
            }
        else{
            echo"<script>alert('Not Saved Your FEEDBACK')</script>";
        }
	}

	mysqli_close($conn);
?>
