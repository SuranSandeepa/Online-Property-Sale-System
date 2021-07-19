<?php require_once('includes/connect.php'); ?>

<?php //Insert Email For Subscribe News..

    if(isset($_POST['email_subscribe'])){   
        $email = $_POST['subs_email'];
        
        $query = "INSERT INTO subscribe(id, email) values('','$email')";

         
        $result_query = mysqli_query($conn,$query);

            if($result_query){
                echo"<script>alert('Record inserted successfully')</script>";
            }

            else{
                echo"<script>alert('Error in inserting records')</script>";
            }   
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>NewDoor</title>
       <!--CSS Linked-->
       <link rel="stylesheet" href="styles/style.css">
       <link rel="stylesheet" href="styles/homepage.css">

       <!-- Js Linked -->
       <script src="js/myScript.js"></script>
       <script src="js/homeScript.js"></script>
</head>

<!--***********************************************************************************************************-->

<body id="mainBody">
<header class="head"> <!--Header Start-->
        <!--Top NavigationBar-->
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

        <!--navigation bar start-->
        
            <a class="active" href="#">Home</a>
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

</header>   <!--Header End-->
<!--******************************************************************************************************************-->

<main class="homepage_back_img">
<br>
<br>
    <div>
        <br>
        <center>
            <p id="headpara" class="mainpara">When you are ready for a change,<br> we are ready to help.</p>
            <br>
            <br>
            <br>
            <br>

                <div class="home-header-bttn">
                    <button class="home-bttn1" id="btn1" type="button" onclick="loadData('btn1')">Lands</button>
                    <button class="home-bttn1" id="btn2" type="button" onclick="loadData('btn2')">Houses</button>
                    <button class="home-bttn1" id="btn3" type="button" onclick="loadData('btn3')">Apartments</button>
                    <button class="home-bttn1" id="btn4" type="button" onclick="loadData('btn4')">Selling</button>
                </div>

                <img id="Homepage_Mainimg" src="images/HeaderBack2.jpg" width="100%">

                <p class="home-js-para1" id="home-js-txt1">Whether you are buying or selling ,<br>&ensp;we can help you move forward.</p>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </center>
    </div>

<!-- Middle Table -->
<div class="container">
    <table class="middletable">
        <tr>
            <td>
                <button class="link-img">
                <a href="houses.php"><img id="imgbtn1" src="images/Frame25.PNG" alt="buying house"height="325"></a>
                </button>
            </td>
            <td>
                <button class="link-img"><a href="lands.php"><img id="imgbtn2" src="images/Frame23.PNG" alt="buying land" height="325"></a>
                </button>
            </td>
            <td>
                <button class="link-img"><a href="apartments.php"><img id="imgbtn3" src="images/Frame24.PNG" alt="buying apartment" height="325"></a>
                </button>
            </td>
            <td>
                <button class="link-img"><a href="postAd.php"><img id="imgbtn4" src="images/Frame22.PNG" alt="selling" height="325"></a>
                </button>
            </td>
        </tr>
        <!-- <tr class="img-link-p">
            <td><b>Buy House</b></td>
            <td><b>Buy Land</b></td>
            <td><b>Buy apartment</b></td>
            <td><b>Sell yours</b></td>
        </tr> -->
    </table>

</div>


<br>
<br>
<br>
<br>
<!-- End middle table -->
</main>

<!--******************************************************************************************************************-->

<footer><!--Footer-->
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
            <img class="smallMainLogo" src="images/MainLogo.jpg" width="70" height="70"><br><b>NewDoor</b><br>
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
            <a class="active" href="#">Home</a><br>
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

        <form method="POST" action="index.php">
            <input type="email" name="subs_email" placeholder="Email Address" required>
            <button type="submit" id="subscribe" name="email_subscribe" onclick='popup()'>Subscribe</button> 
        </form>

        </div>
    </div>

        </td>

     </tr>

    </table>

<center>
    <h6>Copyright © 2021 - NewDoor - All Rights Reserved,Concept,Design and Development by SLIIT FOC Students.</h6>
</center>

<br>

   </div>

</footer>
<!--******************************************************************************************************************-->

</body>

</html>

<?php mysqli_close($conn); ?>