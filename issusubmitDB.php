
<?php require_once('includes/connect.php'); ?>

<?php
	if(isset($_POST['submit_fb'])){
        $userName = $_POST['Name'];
        $userid = $_POST['Userid'];
        $email = $_POST['Email'];
        $userIssue = $_POST['issue'];

		$sqlissue = "INSERT INTO issues values('', '$userName','$userid','$email','$userIssue')";

		$resultissue = mysqli_query($conn,$sqlissue);

		if($resultissue){
              header("Location:index.php");
            }
        else{
            echo"<script>alert('Not Saved Your FEEDBACK')</script>";
        }
	}

	mysqli_close($conn);
?>
