<!-- CHYNNA NICOLETTE S. SEVILLENO / INTEC 2B -->
<?php
session_start();
//if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
 //header("Location: niceform.php");
//}
include "config.php";
$cookie_name = $_SESSION['usr'];
$cookie_value = $_SESSION['pswd'];
/*setcookie($cookie_name, $cookie_value, time() + (1800), "/"); // 86400 = 1 day
$_COOKIES[$cookie_name] = $cookie_value;*/
?>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
<style>
html{
	background: #9D50BB;
	background: -webkit-linear-gradient(to right, #6E48AA, #9D50BB);
	background: linear-gradient(to right, #6E48AA, #9D50BB);

	font-family: 'roboto', sans-serif;
}
b,h1{
	padding-left: 20%;
	padding-right: 5px;
	color: #512DA8;
}
h1{
	padding-bottom: 10px;
}
#info{
    position: relative;
    margin: 0 auto;
    margin-bottom: 20px;
    max-width: 500px;
    min-height: 80px;
    padding: 40px 20px 20px 20px;
    background: #efefef;
    border-radius: 5px;
    border-bottom: 3px solid rgba(0, 0, 0, 0.15);
}
h3{
	position: relative;
	padding-left: 20%;
	padding-right: 5px;
	font-size: 16px;
}

p:before {
    content: " ";
    border: 1px solid #9d50bb -webkit-linear-gradient(to right, #9d50bb, #6e48aa) linear-gradient(to right, #9d50bb, #6e48aa);
    margin-top: 10px;
    margin-bottom: 20px;
	margin-left: 20%;
    display: block;
    max-width: 100px;
}
</style>
</head>

<body>
<div id="info" style="margin-top: 70px;">
<h1>User Information</h1>
<p></p>
<?php

$select = mysqli_query($conn, "select * from person where email = '"."$cookie_name"."';");

if(!isset($_SESSION['usr']) && !isset($_SESSION['pswd'])) {
     header("Location: logout.php");
} else {
	while($row = mysqli_fetch_array($select)){
	
      	$fn = $row['firstname'];
		$mn = $row['middlename'];
		$ln = $row['lastname'];
		$ad = $row['address'];
		$sex = $row['gender'];
		$cnum = $row['contactnumber'];
      	$snelmel = $row['email'];
		$passw = $row['password'];
		$web = $row['website'];
		
      	echo "<b>First name: </b><h3>" . $fn . "</h3><br>" .
			"<b>Middle name: </b> <h3>" . $mn . "</h3><br>" .
			"<b>Last name: </b> <h3>" . $ln . "</h3><br>" .
			"<b>Address: </b> <h3>" . $ad . "</h3><br>" .
			"<b>Gender: </b> <h3>" . $sex . "</h3><br>" .
			"<b>Contact Number: </b> <h3>" . $cnum . "</h3><br>" .
			"<b>Email: </b> <h3>" . $snelmel . "</h3><br>".
			"<b>Password: </b> <h3>" . $passw . "</h3><br>".
			"<b>Website: </b> <h3>" . $web . "</h3><br>";
		
			// echo "Value is: " . $_COOKIE[$cookie_name];
	}
}
 include ('logoff.html');
?>
</div>
</body>
</html>