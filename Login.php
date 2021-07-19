<?php require_once('includes/connect.php'); ?>

<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="stylesheet" href="styles/postAD.css">
    <link rel="stylesheet" href="styles/register.css">

    <script src="...........js"></script>

</head>

<!--*************************************************************************************************-->

<body id="mainBody">


    <header class="head">


        <!--Top NavigationBar-->
        <div class="TopNavigation">
            <!--*************************************************************************************************-->
            <ul class="navbar1_left">
                <!-- <li class="li_left_C"><a href="#"><i class="sIconHome"></i></a></li> -->
                <li class="li_left_C"><a class="active"  href="#">Log In</a></li>
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
            <a href="payplans.php">Payment Plans</a>
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
    <center>
        <br>
        <!-- Login form -->	
        <div class="form2">
            <br><br>
            <!-- Form image -->
            <img src="images/login1.jpg" class="avatar">
        <form action="logindb.php" method="POST" >
            <br>
            <h2 style="color:  gold"> <i> <b>LogIn</b> </i> </h2>
            <label></label><br>
            Username<br>
            <input type="text" id="uname" name="user_name" style="width: 500px" placeholder="Enter Username" required><br><br>
            Password<br>
            <input type="Password" id="pw" name="password" style="width: 500px"pattren="[a-zA-Z0-9]{5,8}"placeholder="Enter password" required >
            <br><br><span class="forgot"><a style="color: white" href="Forget.html"> Forgot Password? </a></span><br><br><br>
            <a href="UserProfile.html"><input type="submit" class="submit" id="btnsub" name="submit" value="Login" onclick="validate1()" ></a>
            <p style="text-align: center;font-size: 15px "><span> Not a memeber?</span><a style="color: white" href="register.php"> Sign Up </a></p>
        <br><br><br>
            </form>
        </div>
        </center>
	    <!--*************************************************************************************************-->

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

    <!--*************************************************************************************************-->
</body>

</html>
<?php mysqli_close($conn); ?>