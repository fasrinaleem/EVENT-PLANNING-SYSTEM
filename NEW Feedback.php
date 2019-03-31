<?php

	require 'db_connect.php';


?>
<!DOCTYPEhtml>
<html xmlns="http://www.w3.org/1999/html">
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
			
			</br>
<!--SEARCH -->	
		<div style="float:right">
			<form method="post" action=" " >
				<input type="text" id="searchbar" placeholder="Search our site!"  maxlength="25" autocomplete= "off" onMouseDown="active();" onblur="inactive();"/><input type="submit" id="searchbtn" value="Search"/>
			</form>
			<label style="color:white"><?php session_start(); echo $_SESSION["loginuser"]; ?></label>
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

	<div style="background-image:url(feedback.jpg);height:500px ; color:white">

			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        

			
			<b> <h2> Customer Feedbacks </h2> </b>
<form method="post" action="NEW%20Feedback.php">
    <input type="text" name="name" placeholder="Enter your Name"><br/><br/>
    <input type="text" name="email" placeholder="Enter Email Address"><br/><br/>
	<textarea name="cfeedback" rows="7" cols="100" placeholder="Leave your comment here"></textarea><br/>
	<input type="submit" value="Send" name="btnSubmit">
</form>

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
</body>
</html>
<?php
    if(isset($_POST["cfeedback"]) && isset($_POST["name"]) && isset($_POST["email"]))
    {
        $comment=$_POST["cfeedback"];
        $namei=$_POST["name"];
        $ema=$_POST["email"];
    }

    if(isset($_POST["btnSubmit"]))
    {
        $insertComment="INSERT INTO feedback VALUES('$name','$ema','$comment')";

        if(!mysqli_query($con,$insertComment))
        {
            echo 'Error Occured...';
        }
        else
        {
            echo 'Thank you for leaving your feedback...';
        }
    }
?>
