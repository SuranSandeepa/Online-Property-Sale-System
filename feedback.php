<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/feedback.css">
	
    <!--jS Linked-->
	<script type="text/javascript" src="js/feedback.js"></script>
   

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
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
        <!--navigation bar end-->
    </header>
<!--*************************************************************************************************-->


<main class = "feedback_main">
 
        <center>  
	
			<h1>Feedback </h1>
        </center>
		
        <h3> Please write your Feedback below </h3>


<div> 
<form method = "post"   action="feedbackDB.php">

	<fieldset class ="feedback_form">
		<legend><b>Rate Us</b></legend>
             <label class="radio-inline"><input type="radio" id="rate" name="radio" value="Good">Good</label><br>
             <label class="radio-inline"><input type="radio" id="rate" name="radio" value="Normal">Normal</label><br>
             <label class="radio-inline"><input type="radio" id="rate" name="radio" value="Bad">Bad</label><br>
    </fieldset>
	<br>
	
    <fieldset class="feedback_form">
         <legend><b>Personal Information</b></legend>	 
			<label for="f_name"><h4> Name </h4></label>
			<input type="text" id="f_name" name="f_name" placeholder="Your name.." required><br>

			<label for="email_add"><h4> E-mail</h4></label>
			<input type="text" id="email_add" name="f_email" placeholder="Your e-mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br>
    </fieldset>
	<br>
	
    <fieldset class ="feedback_form">
			<legend><b>Write Your Comment</b></legend>
			<textarea rows="10" cols="100" name="comment" placeholder="Enter comment here..." required></textarea>
    </fieldset>
   
   
    <br> 
    <input type="submit" value="Submit" id="feedback_btn1"  name="submit_fb" onclick="show_alert();">
	<br><br>
	
 
</div>
</form>
</main>



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
                        <a class="active" href="#">Feedback</a><br>
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

<!--*************************************************************************************************-->
</body>

</html>
