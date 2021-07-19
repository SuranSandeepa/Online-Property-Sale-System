<?php require_once('includes/connect.php'); ?>

<?php //Fetch Data From DataBase..
    
    $query = "SELECT sellerTitle, sellerPrice, sellerAddress, sellerDescript, sellerName, sellerPhone, images FROM advertisements WHERE sellerCategory ='land' ";
    

    $result_set = mysqli_query($conn, $query);

    if($result_set){

        $table = '<table class = "lands-data">';
        $table .= '<tr><th>Title</th>
                      <th>Price</th>
                      <th>Location</th>
                      <th>Description</th>
                      <th>Name</th>
                      <th>Mobile Number</th>
                      <th>Images</th>
                  </tr>';

        while ($record = mysqli_fetch_assoc($result_set)){

                 
            $table .='<tr>';
            $table .='<td>' .$record['sellerTitle'] . '</td>';
            $table .='<td>' ."Rs.".$record['sellerPrice'] . '</td>';
            $table .='<td>' .$record['sellerAddress'] . '</td>';
            $table .='<td>' .$record['sellerDescript'] . '</td>';
            $table .='<td>' .$record['sellerName'] . '</td>';
            $table .='<td>' .$record['sellerPhone'] . '</td>';
            $table .='<td><img src="imgupload/' .$record['images']. '" height="200px" width="300px"/></td>';
            $table .='</tr>';
        }
       $table .='</table>';

    }


 ?>

<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/landspage.css">
 
    <!-- Js Linked -->
    <script>
        alert("Wellcome To Our Lands Page");
    </script>
    <script src="js/myScript.js"></script>

</head>

<!--*****************************************************************************************************************-->

<body id="mainBody">


    <header class="head">


        <!--Top NavigationBar-->
        <div class="TopNavigation">
<!--*****************************************************************************************************************-->
            <ul class="navbar1_left">
                <li class="li_left_C"><a href="Login.php">Log In</a></li>
                <li class="li_left_C"><a href="Register.php">Register</a></li>
                <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94225785925</b></li>
                <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@newdoor.lk</b></li>
            </ul>
<!--*****************************************************************************************************************-->
        </div>

        <div class="SecNavBar">
        <!-- Header Image -->
        <img src="images/s1c.JPG" alt="Header Image" class="header_image">
            <a href="index.php">Home</a>
            <a href="about.html">About Us</a>
            <a class="active" href="#">Lands</a>
            <a href="houses.php">Houses</a>
            <a href="apartments.php">Apartments</a>
            <a href="postAd.php">Selling</a>
            <a href="paymentplans.php">Payment Plans</a>
            <a href="contact_me.php">Contact Us</a>
            <a href="myaccount.php">My Account</a>


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
<!--*****************************************************************************************************************-->

    <!-- Midddle -->

    <div>
        <center>
            <h1>Lands for Sale in Sri Lanka</h1>
        

            <br>

                <?php echo $table;?> 
        </center>
    </div>

<!--*****************************************************************************************************************-->

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
                        <a class="active" href="#">Lands</a><br>
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
                <h6>Copyright © 2021 - NewDoor - All Rights Reserved,Concept,
                    Design and Development by SLIIT FOC Students.
                </h6>
            </center>
            <br>
        </div>

    </footer>

<!--*****************************************************************************************************************-->
</body>

</html>
<?php mysqli_close($conn); ?>