<?php require_once ('includes/connect.php'); ?>

<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    
    <link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/myaccount.css">


</head>



<body id="mainBody">


    <header class="head">


        
        <div class="TopNavigation">
           
            <ul class="navbar1_left">
                
                <li class="li_left_C"><a href="Login.php">Log In</a></li>
                <li class="li_left_C"><a href="Register.php">Register</a></li>
                <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94225785925</b></li>
                <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@newdoor.lk</b></li>
            </ul>
            
        </div>

        
        <div class="SecNavBar">
        <!-- Header Image -->
        <img src="images/s1c.JPG" alt="Header Image" class="header_image">
            
            <a href="index.php">Home</a>
            <a href="about.html">About Us</a>
            <a href="lands.php">Lands</a>
            <a href="houses.php">Houses</a>
            <a href="apartments.php">Apartments</a>
            <a href="postAd.php">Selling</a>
            <a href="paymentplans.php">Payment Plans</a>
            <a href="contact_me.php">Contact Us</a>
            <a class="active" href="#">My Account</a>


            
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                </form>
            </div>

        </div>
        
    </header>
   
	
	
	
	
	
	<section id="mainSlider">
			
			<div class="top_center">
				
				<h1 class ="topic">My Account</h1>
				
				
				<div class="profilephoto">
					
					<img src="images/myaccountprofile.png" alt="profile Image" width="250px" height="250px" >
				</div>
				
			</div>
			
			
			
			<div class="inner_box">
			
			
			<?php
				
					
					
					
					$sql = "SELECT * FROM account where username = 1";
					
					$q = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($q);
					
				
					$fname = $row["fullname"];
					$email = $row["email"];
					$phone = $row["phone"];
					$address1 = $row["address1"];
					$town = $row["town"];
					$username = $row["username"];
					$password = $row["password"];
						
			?>

				
				<form action = "updateAccount.php" method="post">
				
				<div class="box">

					
					<br>
					<div class="formtext">Full Name</div>
					<input type="text" id ="fname" name ="fname" value= "<?php echo $fname; ?>" required><br/><br>
					<div class="formtext">Email</div>
					<input type="email" id ="email1" name ="email1" value= "<?php echo $email; ?>" required><br/><br>
					<div class="formtext">Phone number</div>
					<input type="tel" id ="phone" name ="phone" value= "<?php echo $phone; ?>" required><br/><br>
					<div class="formtext">Address 1</div>
					<input type="text" id ="address1" name ="address1" value= "<?php echo $address1; ?>" required><br/><br>
					<div class="formtext">City/Town</div>
					<input type="text" id ="address2" name ="address2" value= "<?php echo $town; ?>" required><br/><br><br/><br>
					<div class="formtext">Username</div>
					<input type="text" id ="username" name ="username" value= "<?php echo $username; ?>" readonly><br/>
					<div class="formtext">password</div>
					<input type="password" id ="password" name ="password" value= "<?php echo $password; ?>" required><br/>
						
					
					<input class="submit_button" type="submit" id="submit1" name="submit1" value ="Save Changes">
					
					<input class="reset_button" type="submit" id="submit2"   name="submit2" value ="Delete Acoount"><br/><br/>

				</div>
				</form>
				
				
				
			</div>
			
		
	</section>

	
	
	
	
	
	
	
	

    <hr>

    <footer>
        <div class="footer">
            <table border="0" class="footerTable">
                <tr>
                    <th>About Us</th>
                    <th>Contact Us</th>
                    <th>Quick Links</th>
                    <th>NewsLetter</th>
                </tr>
                <tr>
                    <td>
                        <center>
                            <img class="smallMainLogo" src="images/MainLogo.jpg" width="70"
                                height="70"><br><b>NewDoor</b><br>
                        </center>
                        <p> <b>NewDoor established itself in 2003 in the<br>
                                Real Estate industry. It is dedicated to<br>
                                providing residential and real estate<br>
                                solutions and striving to exceed customer<br>
                                expectations through providing reliable real<br>
                                estate and financial solutions.</b>
                            <hr id="FootLine">
                        </p>

                    </td>
                    <td>
                        <p><img src="images/locationIcon.png" width="30" height="30">
                            &ensp;<b>New Door(pvt)Ltd, <br>
                                &ensp;&emsp;&emsp;No 1060, Kandy Road,<br>
                                &ensp;&emsp;&emsp;Malabe Sri Lanka.</b>
                            <hr id="FootLine">
                            <br>
                        </p>


                        <img src="images/phoneIcon.png" width="30" height="30">
                        <b>&ensp; +945785925
                            <hr id="FootLine">
                            <br>

                            <img src="images/mailIcon.png" width="30" height="30">
                            &ensp;Info@newdoor.lk
                        </b>
                        <hr id="FootLine">
                        <br>

                    </td>
                    <td class="footLinks">
                        <a href="index.php">Home</a><br>
                        <hr id="FootLine">
                        <a href="feedback.php">Feedback</a><br>
                        <hr id="FootLine">
                        <a href="about.html">About Us</a><br>
                        <hr id="FootLine">
                        <a href="houses.php">Houses</a><br>
                        <hr id="FootLine">
                        <a href="lands.php">Lands</a><br>
                        <hr id="FootLine">
                        <a href="apartments.php">Apartments</a><br>
                        <hr id="FootLine">
                        <a href="postAd.php">Selling</a><br>
                        <hr id="FootLine">
                        <a href="issusubmit.php">Issues Submit</a><br>
                        <hr id="FootLine">
                        <a href="contact_me.php">Contact Us</a><br>
                        <hr id="FootLine">
                    </td>
                    <td>
                        <div>
                            <p><b>Subscribe to our newsletter<br>
                                    For exclusive updates</b></p>
                            <div>
                                <form method="post" action="reg.php"></form>
                                <input type="email" name="email" required placeholder="Email Address">
                                <input type="submit" id="subscribe" value="Subscribe">
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>

            </table>
            <center>
                <h6>Copyright © 2021 - NewDoor - All Rights Reserved,Concept,
                    Design and Development by SLIIT FOC Students.
                </h6>
            </center>
            <br>
        </div>

    </footer>


</body>

</html>




