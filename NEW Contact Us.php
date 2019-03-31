<?php

	require 'db_connect.php';


?>
<!DOCTYPEhtml>
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
			
			</br>
<!--SEARCH -->	
		<div style="float:right">
			<form method="post" action=" " >
				<input type="text" id="searchbar" placeholder="Search our site!"  maxlength="25" autocomplete= "off" onMouseDown="active();" onblur="inactive();"/><input type="submit" id="searchbtn" value="Search"/>
			</form>
			<label style="color:white"><?php  session_start(); echo $_SESSION["loginuser"]; ?></label>
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

	<div style="background-image:url(glare_background_blur_dark_63553_1920x1080.jpg);height:500px ; color:white">
 
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			<b> <h2> OUR LOCATION </h2> </b> </br>
			<img src="google-maps-locate-you-geolocation-3.png" width="400px" height="200px"> </br>
			<href="https://www.google.com/maps/place/Ward+Pl,+Colombo,+Sri+Lanka/data=!4m2!3m1!1s0x3ae2597449a1669f:0x631cdd64881e98ec?sa=X&ved=0ahUKEwiw4oLB5oTXAhWBu48KHVzsDywQ8gEIKTAA">
				Bloom Event Planners </br>
				No.69 , Ward Place,</br>
				Colombo 07 </br>
				Call Us : 011 2 301904 </br>
				Email Us : bloomevent_planners@gmail.com
	

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