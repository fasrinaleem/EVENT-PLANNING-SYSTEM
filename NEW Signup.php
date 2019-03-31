
<?php
    session_start();
    require('db_connect.php');

    if(isset($_POST['submit'])){

        if(isset($_POST['fname']) & isset($_POST['lname']) & isset($_POST['phone']) & isset($_POST['email']) & isset($_POST['address']) & isset($_POST['zip']) &
            isset($_POST['password']) & isset($_POST['cpassword'])) {

            $fName = $_POST['fname'];
            $sName = $_POST['lname'];
            $phonenumber = $_POST['phone'];
            $email = $_POST['email'];
            $adrs = $_POST['address'];
            $zip = $_POST['zip'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];

            $insert = "INSERT INTO customer VALUES ('" . $fName . "','" . $sName . "','" . $phonenumber . "','" . $email . "','" . $adrs . "','" . $zip . "','" . $pass . "')";

            $result = mysqli_query($con, $insert);


            if($result){

                echo "<script> alert('Account created successfully'); window.location.href='NEW HOMEPAGE 1.php'; </script>";
            }else{

                echo "<script> alert('Invalid'); window.location.href='NEW Signup.php'; </script>";
            }

        }
    }


?>

<!DOCTYPEhtml>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Design.css">
    <script type="text/javascript" src="validation.js"></script>
</head>
<body>
<!-- TOP -->
<center>
    <div>
        <img src="LOGO.png">
        <div>
</center>
        <div style="float:right">

        </div>

</br>
<!--SEARCH -->
<div style="float:right">
    <form method="post" action=" " >
        <input type="text" id="searchbar" placeholder="Search our site!"  maxlength="25" autocomplete= "off" onMouseDown="active();" onblur="inactive();"/><input type="submit" id="searchbtn" value="Search"/>
    </form>
</div>


<!-- BLACK -->
<center>
    <div class="black" style="word-spacing:10px">
        <a href="NEW HOMEPAGE 1.php"> <b>  HOME  </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px"> &nbsp
        <a href="NEW About Us.php"> <b> ABOUT US </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px">  &nbsp
        <a href="NEW Gallery.php"> <b> GALLERY </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px"> &nbsp
        <a href="NEW Packages.php"> <b> PACKAGES  </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px">  &nbsp
        <a href="NEW Feedback.php"> <b> FEEDBACKS </b> </a> &nbsp <img src="circle-small-chosen-hi.png" width="8px"> &nbsp
        <a href="NEW Contact Us.php"> <b> CONTACT US </b> </a> &nbsp
    </div>
</center>

<form name="account" method="POST" action="NEW Signup.php"  onsubmit="return validate()" >
    <center>
        <div style="padding:1.5%" class="logOut">
            <table cellspacing="10" style="background-color:black">
                <tr>
                    <th> <input type="text" id="fname" name="fname" placeholder="First Name" style="font-size:15px;padding:5%"> </th>
                </tr>
                <tr>
                    <th> <input type="text" id="lname" name="lname" placeholder="Surname" style="font-size:15px;padding:5%"> </th>
                </tr>
                <tr>
                    <th> <input type="number" id="phone" name="phone" placeholder="Phone" style="font-size:15px;padding:10px"> </th>
                </tr>
                <tr>
                    <th> <input type="email" id="email" name="email" placeholder="Email Address" style="font-size:15px;padding:10px"> </th>
                </tr>
                <tr>
                    <th> <input type="text/number" id="address" name="address" placeholder="Address"style="font-size:15px;padding:10px"> </th>
                </tr>
                <tr>
                    <th> <input type="number" id="zip" name="zip" placeholder="Zip code"style="font-size:15px;padding:10px"> </th>
                </tr>
                <tr>
                    <th> <input type="password" id="password" name="password" placeholder="Password"style="font-size:15px;padding:10px"> </th>
                </tr>
                <tr>
                    <th> <input type="password" id="cnfrmpassword" name="cpassword" placeholder="Confirm Password"style="font-size:15px;padding:10px"> </th>
                </tr>
                <tr>
                    <th> <input type="submit" value="Register" name="submit" style="float:right;margin-right:60px;margin-top:20px"> </th>
                </tr>
            </table>
        </div>
    </center>
</form>

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
</body>
</html>