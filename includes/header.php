<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/homepage.css">
    <!-- <link rel="stylesheet" href="styles/postAD.css"> -->

    <script src="../js/myScript.js"></script>
</head>

<!--*************************************************************************************************-->

<body id="mainBody">


    <header class="head">


        <!--Top NavigationBar-->
        <div class="TopNavigation">
            <!--*************************************************************************************************-->
            <ul class="navbar1_left">
                <!-- <li class="li_left_C"><a href="#"><i class="sIconHome"></i></a></li> -->
                <li class="li_left_C"><a href="loging.html">Login</a></li>
                <li class="li_left_C"><a href="register.html">Register</a></li>
                <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94225785925</b></li>
                <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@newdoor.lk</b></li>
            </ul>
            <!--*************************************************************************************************-->
        </div>

        <!-- Header Image -->
        <img src="images/finalHead.jpg" alt="Header Image" class="header_image">



        <!--navigation bar start-->
        <div class="SecNavBar">
            <!-- Change the active class according to your web page -->
        <ul>
            <a class="active" href="#">Home</a>
            <a href="about.html">About Us</a>
            <a href="lands.html">Lands</a>
            <a href="houses.php">Houses</a>
            <a href="apartments.html">Apartments</a>
            <a href="postAd.php">Selling</a>
            <a href="payplans.html">Payment Plans</a>
            <a href="contact.html">Contact Us</a>
            <a href="useraccount.html">My Account</a>
</ul>

            <!-- Search bar -->
            <div class="search-container">
                <form action="">
                    <input type="text" placeholder="Search.." name="search">
                    <button onclick="popup()" type="submit">Search</button>
                </form>
            </div>

        </div>
        <!--navigation bar end-->
    </header>