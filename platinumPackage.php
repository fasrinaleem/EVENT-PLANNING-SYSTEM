<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Design.css">
</head>
<body>
<!-- TOP -->
<center>
    <div>
        <img src="LOGO.png">
    </div>
</center>
<div style="float:right">
    <a style="color:blue" href="NEW Login.php"><b>
            <?php
            session_start();
            $check=$_SESSION["loginuser"];
            if($check=="" || $check==null)
            {
                echo "Sign In";
            }
            else
            {
                echo "";
            }
            ?>
        </b></a>
    <a style="color:blue" href="NEW%20Signup.php"><b>
            <?php
            session_start();
            $check=$_SESSION["loginuser"];
            if($check=="" || $check==null)
            {
                echo "Sign Up";
            }
            else
            {
                echo "";
            }
            ?>
        </b></a>
    <a style="color:blue" href="Signout.php"><b>
            <?php
            session_start();
            $check=$_SESSION["loginuser"];
            if($check=="" || $check==null)
            {
                echo "";
            }
            else
            {
                echo "Sign Out";
            }
            ?>
        </b></a>
</div>

<br>
<!--SEARCH -->
<div style="float:right">
    <form method="post" action=" " >
        <input type="text" id="searchbar" placeholder="Search our site!"  maxlength="25" autocomplete= "off" onMouseDown="active();" onblur="inactive();"/><input type="submit" id="searchbtn" value="Search"/>
    </form>
    <div id="txt" style="float:right ; color:white"> </div>
    <label style="color:white"><?php session_start(); echo $_SESSION["loginuser"];?></label>
</div>


<!-- BLACK -->
<center>
    <div class="black" style="word-spacing:10px ; color:white">
        <a href="NEW HOMEPAGE 1.php"> <b>  HOME  </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px"> &nbsp
        <a href="NEW About Us.php"> <b> ABOUT US </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px">  &nbsp
        <a href="NEW Gallery.php"> <b> GALLERY </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px"> &nbsp
        <a href="NEW Packages.php"> <b> PACKAGES  </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px">  &nbsp
        <a href="NEW Feedback.php"> <b> FEEDBACKS </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px"> &nbsp
        <a href="NEW Contact Us.php"> <b> CONTACT US </b> </a> &nbsp
    </div>
</center>
<div style="background-image:url(a2015-background-mainstage-gray.jpg);height:600px ; color:white">

    <div style="float:left ; width:50%">
        <h1> <u> PLATINUM PACKAGE </u> </h1>
        <img src="pplatinum.jpg" width="400px">
        <br>
        <br>
        <p> <font color = "white"> Platinum Package is the most expensive package we have. Offers we include to this package :-
                <li> 35% discount - DJ or the music band we provide </li>
                <li> 35% discount - Photographers we provide </li>
                <li> 35% discount - Table and entrance decorations we provide </li>
                <li> 10% discount - If you got more than 500 guests </li>
                <br>
                <b> **APPROXIMATELY THE BUDGET - Rs. 250,000 - 300,000 </b> </font> </p>
    </div>
    <br><br><br><br><br>
    <div style="float:right ; width:50%">
        <form action="Payments1.php">
            <table>
                <tr>
                    <td> <font color = "white"> Company Name </font> </td>
                    <td> <input type="text/number"> </td>
                </tr> <br>
                <tr>
                    <td> <font color = "white"> Company Email </font> </td>
                    <td> <input type="text/number"> </td>
                </tr> <br>
                <tr>
                    <td> <font color = "white"> Date of Event </font> </td>
                    <td> <input type="date"> </td>
                    <!--	<td> Month </td>
                                    <td> Date <input type="number"></td>
                        <td> Year </td>
                        <td> Date <input type="number"></td>
                    -->
                </tr> <br>
                <tr>
                    <td> <font color = "white"> No of Guests </font> </td>
                    <td> <input type="number"> </td>
                </tr> <br>
            </table>
            <br> <br>
            Offers Given to the Package(You can select one or more)
            <br>
            &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="DJ"> DJ <br>
            &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="MusicBand"> Music Band	<br>
            &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="TableDeco"> Table Decoration <br>
            &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="EntranceDeco"> Entrance Decoration <br>
            &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="Photographers"> Photographers <br>


            <div style="margin:8%">
                <input type="submit" value="BOOK NOW"> <a href="payments1.php"> </a>
            </div>

        </form>
    </div>
</div>

<footer class="socialMedia">
    <div style="float:left">
        Bloom Event Planners </br>
        No.69 , Ward Place,</br>
        Colombo 07 </br>
        011 2 301904
    </div>


    <div style="float:right">
        <a href="https://www.facebook.com/" style="text-decoration:none"> <img src="facebook-5-xxl.png" width="40px"> </a>
        <a href="https://www.instagram.com/" style="text-decoration:none"> <img src="instagram-5-xxl.png" width="40px"> </a>
        <a href="https://www.pinterest.com/" style="text-decoration:none"> <img src="pinterest-5-xxl.png" width="40px"> </a>
        <a href="https://www.twitter.com/" style="text-decoration:none"> <img src="twitter-5-xxl.png" width="40px">	</a>
        <a href="https://plus.google.com/" style="text-decoration:none"> <img src="google-plus-5-xxl.png" width="40px"> </a>
    </div>
</footer>
-->

</body>
</html>
