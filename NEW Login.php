<?php

require 'db_connect.php';
session_start();
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
	
	<div class="login">
        <center>
            <table cellspacing="30" style="background-color:black ; font-size:20px">
				<tr>
					<td>	</td>
					<td>	</td>
				</tr>
                <tr>
					<form method="POST" action="NEW%20Login.php">
                    <td><label style="color:white"> <b> User Name </b> </label></td>
                    <td><input type="text" placeholder="Enter User Name" name="uname" style="font-size:15px"></td>
                </tr>
                <tr>
                    <td><label style="color:white"> <b> Password </b> </label></td>
                    <td><input type="password" placeholder="Enter Password" name="pass" style="font-size:15px"></td>
                </tr>
				<tr>
					<td>	</td>
					<td>	</td>
				</tr>
                <tr>
					<td>	</td>
                    <td> <input type="submit" value="Login" name="btnsubmit" style="font-size:20px;margin-left:20px"> </td>
				</br>
                </tr>
				</form>
            </table>
        </center>
    </div>

<?php

session_start();

if(isset($_POST['btnsubmit'])){
	if(isset($_POST['uname']) &&  isset($_POST['pass'])) {

		$username = $_POST['uname'];
		$pass = $_POST['pass'];

		$_SESSION["loginuser"]=$username;
		$qry = "SELECT * FROM customer WHERE fname = '$username' AND pass = '$pass' ";

		$r = mysqli_query($con,$qry);


		if(mysqli_num_rows($r) == 1){

			while($row = mysqli_fetch_assoc($r))
			{
				echo "<script> alert(' Successfully logged in'); window.location.href='NEW Packages.php';</script>";


			}
		}
		else
		{
			echo "<script> alert('invalid password or mail'); window.location.href='NEW Login.php';</script>";
		}
	}

}


?>
	
	
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