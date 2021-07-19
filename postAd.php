<?php require_once ('includes/connect.php'); ?>

<!-- Insert Data To DataBase..   -->
<?php
 
     error_reporting(0);

    if(isset($_POST['post_ad_submit_btn'])){

        $sellerName = $_POST['fname'];
        $sellerPhone = $_POST['m_phone'];

        //Check Sellers Email
        if (empty(trim($_POST['email']))) {
            echo "*required";
        }
        else{
              $sellerEmail = $_POST['email'];
              if(!filter_var($sellerEmail,FILTER_VALIDATE_EMAIL)){
                    echo"Email Must be a valied Email";
              }
        }

        $sellerCategory = $_POST['post_ad_category'];
        $sellerAddress = $_POST['post_ad_address'];
        $sellerTitle = $_POST['post_ad_title'];
        $sellerDescript = $_POST['post_ad_descript'];
        $sellerPrice = $_POST['post_ad_price'];
        $images = $_FILES["post_img1"]["name"];
        $tempname = $_FILES["post_img1"]["tmp_name"];

        $folder = "imgupload/".$images;

        //checking the image size
        if (($file_size = $_FILES["post_img1"]["size"]) > 500000) {

            $error = 1;

        }

        move_uploaded_file($tempname, $folder);

        if(empty($error)){

        $sql = "INSERT INTO advertisements VALUES('','$sellerName','$sellerPhone','$sellerEmail','$sellerCategory','$sellerAddress','$sellerTitle','$sellerDescript','$sellerPrice','$images')";
        

        $result = mysqli_query($conn,$sql); 

        if($result){

             echo"<scrip>alert('Record inserted successfully')</script>";
             header("Location:index.php");
        }

     }
     else{
        header("Location:postAD.php");      
    }
    
    }
 
?>

<!--******************************************************************************************************************-->
<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/postAD.css">

    <!-- Js Linked -->
    <script>
        alert("Hi There!\nWellcom To Our Selling Page.");
    </scrip>

    <script src="js/myScript.js"></script>

</head>

<!--******************************************************************************************************************-->

<body id="mainBody">

<header class="head">
    <!--Top NavigationBar-->
    <div class="TopNavigation">
<!--******************************************************************************************************************-->
     <ul class="navbar1_left">
        <li class="li_left_C"><a href="Login.php">Log In</a></li>
        <li class="li_left_C"><a href="Register.php">Register</a></li>
        <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94225785925</b></li>
        <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@newdoor.lk</b></li>
     </ul>
<!--******************************************************************************************************************-->
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
   <a class="active" href="#">Selling</a>
   <a href="paymentplans.php">Payment Plans</a>
   <a href="contact_me.php">Contact Us</a>
   <a href="myaccount.php">My Account</a>

<!-- Search bar -->
<div class="search-container">
    <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit">search</button>
    </form>
</div>

</div>
<!--navigation bar end-->
</header>
    
<!--******************************************************************************************************************-->

<!-- Middle -->
<main class="ad-form">
<br>
<br>
    <center >
        <p id="ad-form-head-para1" class="ad-form-head-para"><b>Want to Sell Your Property Quickly!!</b></p>
        <p id="ad-form-head-para2" class="ad-form-head-para">Send us details.....</p>

        <img src="images/selling1.jpg" id="post_ad_main_img" alt="Selling Logo" enctype="multipart/form-data">
    </center>
<br>
<!--******************************************************************************************************************-->

<!-- Advertisement Form-->    
<form method="POST" action="postAd.php" name="post_ad_form" onsubmit="" enctype="multipart/form-data">

    <fieldset class="feldsetForm">
        <legend><b>Sellers Details</b></legend>
            Full Name :
            <input type="text" name="fname" placeholder="Enter Name" required>
            <br>
            <br>

            TelePhone No :
            <input type=" text" name="m_phone" pattern="[0-9]{10}" placeholder="Enter Mobile Number" required >
            <br>
            <br>

            Email :
            <input type="email" name="email" placeholder="abcd@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> 
             
    </fieldset>
<br>
<!--******************************************************************************************************************-->
    <Fieldset class="feldsetForm">
        <legend><b>Property Details</b></legend>
        <br>
        
        <label for="post_ad_category">Category : &ensp;</label>
        <select name="post_ad_category">
            <option name="category" value="house">House</option>
            <option name="category" value="land">Land</option>
            <option name="category" value="apartment">Apartment</option>
        </select>
        <br>
        <br>

        Address :<br>
        <textarea id="propertyAddress" rows="3" cols="50" name="post_ad_address" placeholder="Enter the street and post code." required></textarea>
        <br>
        <br>

        Title :<br>
        <input type=" text" name="post_ad_title"  placeholder="Keep it short" required>
        <br>
        <br>

        Description :<br>
        <textarea id="descript" rows="5" cols="100" name="post_ad_descript" placeholder="All The Details About Property......" required></textarea>
        <br>
        <br>
 
        Price :
        <input type="text" name="post_ad_price"  placeholder="price" required> 

    </Fieldset>
<br>
<!--******************************************************************************************************************-->

    <fieldset class="feldsetForm"> <!--Image Upload-->
        <legend><b>Images Of Property</b></legend>
        <br>
        <br>
        <input type="file" name="post_img1" class="ImageToUpload" required><br> 
        <p>Note:Image File less than 500KB only </p>
        <br>
        <br>
        <input type="checkbox" required >I understand and agree to the rules and regulations.
    </fieldset>
<br>
<button onclick="popup()"class="form_btn1" type="submit" id="submitBtn" name="post_ad_submit_btn"><b>Post AD</b></button>

</form><!--Form End-->
<br>
<br>

</main>

<!--******************************************************************************************************************-->

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
                        <a class="active" href="#">Selling</a><br>
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
                <h6>Copyright © 2021 - NewDoor - All Rights Reserved,Concept,
                    Design and Development by SLIIT FOC Students.
                </h6>
            </center>
            <br>
        </div>

    </footer>

<!--******************************************************************************************************************-->
</body>

</html>

<?php mysqli_close($conn); ?>