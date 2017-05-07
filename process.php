<!-- CHYNNA NICOLETTE S. SEVILLENO / INTEC 2B -->
<?php
include ("config.php");

if(isset($_POST['fname']) &&
isset($_POST['mname']) &&
isset($_POST['lname']) &&
isset($_POST['addrss']) &&
isset($_POST['contactt']) &&
isset($_POST['hemail']) &&
isset($_POST['passw']) &&
isset($_POST['website']) )
{
	$fir = $_POST['fname'];
	$mid = $_POST['mname'];
	$last = $_POST['lname'];
	$addr = $_POST['addrss'];
	$contact = $_POST['contactt'];
	$emailad = $_POST['hemail'];
	$pass = $_POST['passw'];
	$site = $_POST['website'];

	$daigleruser = "$fir[0]$mid[0]$last";

	if($_POST['option'] == 'Female'){
		$gen = "Female";
		$subject = "her";
	}
	elseif ($_POST['option'] == 'Male'){
		$gen = "Male";
		$subject = "his";
	}

	$insert = mysqli_query($conn, "insert into person(id, firstname, middlename, lastname, address, gender, contactnumber, email, password, website) 
	values (NULL,'$fir', '$mid', '$last','$addr', '$gen','$contact','$emailad','$pass','$site')");
	
	$select = mysqli_query($conn, "SELECT * FROM person WHERE email = '$emailad'");
	
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

      	echo "<b>First name: </b> " . $fn . "<br>" .
			"<b>Middle name: </b> " . $mn . "<br>" .
			"<b>Last name: </b> " . $ln . "<br>" .
			"<b>Addres: </b> " . $ad . "<br>" .
			"<b>Gender: </b> " . $sex . "<br>" .
			"<b>Contact Number: </b>" . $cnum . "<br>" .
			"<b>Email: </b> " . $snelmel . "<br>".
			"<b>Password: </b> " . $passw . "<br>".
			"<b>Website: </b> " . $web . "<br>";
      }
}
else
{
	echo "error";
}
?>