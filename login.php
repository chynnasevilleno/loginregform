<!-- CHYNNA NICOLETTE S. SEVILLENO / INTEC 2B -->
<html>
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
<style>
html{
	background: #9D50BB;
	background: -webkit-linear-gradient(to right, #6E48AA, #9D50BB); 
	background: linear-gradient(to right, #6E48AA, #9D50BB); 
}
h1{
	font-family: 'roboto', sans-serif;
	font-size: 50px;
	text-align: center;
	color: white;
}
</style>
<body>
<i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: white;
	margin-left: 45%;
	font-size: 100px;"></i>
<?php
	session_start();
	include ("config.php");
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['login'])){
		
        $select = mysqli_query($conn, "select * from person");
		
		while($row = mysqli_fetch_array($select)){
			 $snelmel = $row['email'];
			 $passw = $row['password'];
			
			 if($_POST['usr']== $snelmel && $_POST['pswd']==$passw){
				 $_SESSION['usr'] = $snelmel;
				 $_SESSION['pswd'] = $passw;
				 
				header("Location: content.php");
			 }
			 else{
			 header("Refresh: 3; url= niceform.php");
			 echo "<h1>Invalid Credentials! Redirecting in 3 seconds. </h1>";
			 }
		}
	}
	if (isset($_POST['reg'])) {
		header("Location: SQLExer.php");
    } 
	
	mysqli_close($conn);
	
	}
?>
</body>
</html>