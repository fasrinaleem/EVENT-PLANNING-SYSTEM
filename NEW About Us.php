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

	<div class="aboutUs" style="padding-top:100px">
		<div>
			<p> <b> <h2>  <font color = "white">Bloom Event Planners Company was established in 2015. It is one of the leading corporative event planning company in Sri Lanka nowadays.
			We have a group of experienced employees who are proffesionals at event planning. We have some well recognized partner companies to lighten your event. 
			</p> </b> </h2> </font>
		    <font color = "white"> <li> <b> Photography - Capture Moments </li> </b> </font> 
			<font color = "white"> <li> <b> DJ/Music band - MusicAlive </li> </b> </font> 
			<font color = "white"> <li> <b> Flower decorations - Bloom Decos </li> </b> </font>
			<br>
			<b> <h1> <u> <font color = "gray">OUR VISION ...</u> </font> <br> <p>  <font color = "white">Is to be the best Corporative Event Planning company in Sri Lanka </h1> </b> </p>  <br> <br> </br>  </font>
			<b> <h1> <u> <font color = "gray"> OUR MISSION ... </u> </font> <br> <p>  <font color = "white">Is to satisfy our customers by planning the event as they want </h1> </b> </p>  </br>  </font>
		</div>		
	</div>
	
	<footer class="socialMedia">3
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