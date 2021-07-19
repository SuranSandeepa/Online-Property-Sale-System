<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/issuesubmit.css">
	
    <!--jS Linked-->
	<script src="../js/issuesubmit.js"></script>
   

</head>

<!--*************************************************************************************************-->

<body id="mainBody">


    <header class="head">


        <!--Top NavigationBar-->
        <div class="TopNavigation">
<!--*************************************************************************************************-->
            <ul class="navbar1_left">
                <!-- <li class="li_left_C"><a href="#"><i class="sIconHome"></i></a></li> -->
                <li class="li_left_C"><a href="Login.php">Log In</a></li>
                <li class="li_left_C"><a href="Register.php">Register</a></li>
                <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94225785925</b></li>
                <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@newdoor.lk</b></li>
            </ul>
<!--*************************************************************************************************-->
        </div>

        <div class="SecNavBar">
        <!-- Header Image -->
        <img src="images/s1c.JPG" alt="Header Image" class="header_image">

        <!--navigation bar start-->
        
            <a href="index.php">Home</a>
            <a href="about.html">About Us</a>
            <a href="lands.php">Lands</a>
            <a href="houses.php">Houses</a>
            <a href="apartments.php">Apartments</a>
            <a href="postAd.php">Selling</a>
            <a href="paymentplans.php">Payment Plans</a>
            <a href="contact_me.php">Contact Us</a>
            <a href="myaccount.php">My Account</a>

            <!-- Search bar -->
            <div class="search-container">
                <form action="">
                    <input type="text" placeholder="Search.." name="search" id="searchbox">
                    <button onclick="popup()" type="submit" class="searchbtn">Search</button>
                </form>
            </div>

        </div>
        <!--navigation bar end-->
    </header>
<!--*************************************************************************************************-->
	
	
	
	<main class = "issue_main">
        
        <center>
            <h1> ISSUES </h1>
        </center>
        <h3> Please write your issues now </h3>



<div>  
<form method="post" action="issusubmitDB.php" >
  <div class="container">
    <h1>ISSUES</h1>
    <p>Please write your issues now</p>
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="Name" id="Name" required><br>

    <label for="Userid"><b>User ID</b></label>
    <input type="text" placeholder="Enter User ID" name="Userid" id="Userid" required>
	
	<label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="Email" id="Email" required>
	
	<label for="issue"><b>Issue</b></label>
    <textarea rows="4" cols="50" placeholder="Enter issue here..." name="issue" id="Issue" required></textarea>
 
    <hr>

    <button type="submit" name="submit_fb"class="Submitbtn">Submit</button>
  </div>
</form>
</div>
 
	
	
<!--***************************************************************************************************-->

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
            <a class="active" href="#">Issues Submit</a><br>
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

<!--*************************************************************************************************-->
</body>

</html>
