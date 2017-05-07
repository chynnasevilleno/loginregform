<?php
session_start();
if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
header("Location: content.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
<title> PHP Login </title>
<style>
body{
	background: #f2f2f2;
	font-family: 'roboto', sans-serif;
}
h1, input::-webkit-input-placeholder, h3 ,h5{
  
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
h3 {
	padding-top: 10px;
	color: #212121; 
	font-size: 13px;
}
hr{
	background: #BDBDBD;
	width: 50px;
}
h1 {
  height: 100px;
  width: 100%;
  font-size: 40px;
  background: #673AB7;
  color: white;
  line-height: 10%;
  border-radius: 3px 3px 0 0;
  box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-top: 30px !important;

}

form {
  box-sizing: border-box;
  width: 300px;
  margin: 100px auto 0;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-bottom: 40px;
  border-radius: 3px;
  margin-bottom: 100px;
}
form h1 {
  box-sizing: border-box;
  padding: 50px;
}

input {
  margin: 40px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 10px 0;
  border-bottom: solid 1px #FF4081;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #FF4081 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #FF4081 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: #FF4081;
}
input:focus, input:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}
input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
  <!--color: #FF4081;-->
  color: #212121; 
  font-size: 11px;
  visibility: visible !important;
}
#button1, #button2{
  border: none;
  background: #FF4081;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 200px;
  color: white;
  margin-left: 25px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}
#button1:hover, #button2:hover {
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
}
i{
	color: white;
}


</style>
</head>
<body id = "bodypage">
<center>
<form method="post" action="login.php" name="form1">
  <h1><i class="fa fa-user" aria-hidden="true"></i></h1> <h3> Login </h3>
  <input placeholder="Username" type="text" class="email" name="usr" ><ul class="autosuffix"></ul>
  <input placeholder="Password" type="password" name="pswd" >
  <input type="submit" name="login" value="Login" id="button1">
  <hr/>
  <h3>Haven't signed up yet?</h3>
  <input id ="button2" type="submit" name="reg" value="Register" style="
    margin-top: 0px;
    margin-bottom: 20px;">
</form> 


</body>

<!--<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script>
	$('#button1').click(function()
		{
			var uname = document.form1.usr.value;
			var pass = document.form1.pswd.value;
			
			if(uname == ""){
				alert("No username input.");
			}
			else if(pass = ""){
				alert("No password input");
			}
			else{
				$.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: { usr: uname , 
							pswd: pass ,
						  },
                    success: function(response){
                        $('#bodypage').html(response);
                        }                
                });
			}
		}
</script>-->
<!--<h1> Login / Registration form </h1>
	<form method="post" action="login.php" name="form1"> <!--action="login.php"
		<table>
		<input placeholder="Username" type="text" name="usr"></td></tr>
		<input placeholder="Password" type="password" name="pswd"></td></tr>
		<tr><td><input type="submit" name="login" value="Login" id="button1"></td>
		<td><input id ="button2" type="submit" name="reg" value="Register"></td></tr>
		</table>
	</form>
</center>-->
</html>