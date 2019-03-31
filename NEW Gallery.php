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

	<div style="background-image:url(bg21.jpg);height:800px ; color:white">

	<table>
		<tr>
			<td> <font color = "white"> Year end parties we did... </td> </font> 
			<td> <img src="yearend1.jpg" width="250px" height="175px"> </td>
			<td> <img src="yearend2.jpg" width="250px" height="175px"> </td>
			<td> <img src="yearend3.jpg" width="250px" height="175px"> </td>
		</tr>	
		<tr>
			<td> <font color = "white"> Fare-well parties we did... </td> </font>
			<td> <img src="farewell1.jpg" width="250px" height="175px"> </td>
			<td> <img src="farewell2.jpg" width="250px" height="175px"> </td>
			<td> <img src="farewell3.jpg" width="250px" height="175px"> </td>
		</tr>	
		<tr>
			<td>  <font color = "white"> Conferences we did... </td> </font>
			<td> <img src="Conference1.jpg" width="250px" height="175px"> </td>
			<td> <img src="Conference2.jpg" width="250px" height="175px"> </td>
			<td> <img src="Conference3.jpg" width="250px" height="175px"> </td>
		</tr>		
		<tr>
			<td>  <font color = "white"> Employees Fun days and trips we did... </td> </font>
			<td> <img src="trips1.jpg" width="250px" height="175px"> </td>
			<td> <img src="trips2.jpg" width="250px" height="175px"> </td>
			<td> <img src="trips3.jpg" width="250px" height="175px"> </td>
		</tr>	
		<tr>
	</table>
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