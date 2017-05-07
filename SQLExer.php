<!-- CHYNNA NICOLETTE S. SEVILLENO / INTEC 2B -->
<html>
<head>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
<style>
body{
	background: #f2f2f2;
	font-family: 'roboto', sans-serif;
}
h1, input::-webkit-input-placeholder, h3 ,h5, label{
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
h3 {
	padding-top: 10px;
	color: #212121; 
	font-size: 13px;
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
  width: 350px;
  margin: 50px auto 0;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-bottom: 40px;
  border-radius: 3px;
}
form h1 {
  box-sizing: border-box;
  padding-right: 50px;
  padding-left: 50px;
  padding-bottom: 50px;
  padding-top: 20px;
}

input{
  margin: 10px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 5px 0;
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
#button{
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
#button:hover{
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
}


input[type="radio"] {
  display: none;
}

input[type="radio"] + label {
  color: #292321;
  font-family: Arial, sans-serif;
  font-size: 14px;
}

input[type="radio"] + label span {
  display: inline-block;
  width: 19px;
  height: 19px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  -moz-border-radius: 50%;
  border-radius: 50%;
}

input[type="radio"] + label span {
  background-color: #BDBDBD;;
}

input[type="radio"]:checked + label span {
  background-color: #FF4081;
}

input[type="radio"] + label span,
input[type="radio"]:checked + label span {
  -webkit-transition: background-color 0.2s linear;
  -o-transition: background-color 0.2s linear;
  -moz-transition: background-color 0.2s linear;
  transition: background-color 0.2s linear;
}
#gender{
	text-align: left;
	padding-left: 70px;
    padding-top: 0px;
    margin-bottom: 15px;
    margin-top: -20;

}
#display{
	padding-top: 40px;
}
</style>
</head>
<body>
<center>
<a href="/cookie/niceform.php" style="position: relative;"><i class="fa fa-chevron-circle-left" aria-hidden="true" style="color: #FF4081; font-size: 40px; padding-top: 20px;"><span style="font-size: 15px; display: block; font-family: font-family: 'roboto', sans-serif;">Go back</span></i></a>
	<form name="myForm1" >
	 <h1><i class="fa fa-user" aria-hidden="true"></i> </h1> <h3> Register </h3>
		<input placeholder="First name:" type="text" name="fname" value="" style="padding-top: 30px;"><br/>
		<input placeholder="Middle name:" type="text" name="mname" value=""><br/>
		<input placeholder="Last name:" type="text" name="lname" value=""><br/>
		<input placeholder="Address:" type="text" name="addrss" value=""> <br/>
		<div id = "gender">
		<h5> Gender:</h5>
			<input type="radio" name="option" value="Female" id="f">
			<label for="f"><span></span> Female  </label><br/><br/>
			<input type="radio" name="option" value="Male" id="m" style="padding-left: -30px;">
			<label for="m"> <span></span> Male  </label><br/><br/>
		</div>
		<input placeholder="Contact Number:" type="number" name="contactt" value=""> <br/>
		<input placeholder="Email:" type=" text" name="hemail" value="">
		<br/><input type="password" placeholder="Password" name="passw" value="">
		<br/><input placeholder="Website:" type="text" name="website" value="">
		<br><input type="button" value="Submit" id="button">
		</form>
		<div id = "display"></div>
</center>
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script>
		
		$('#button').click(function()
		{
			var email = document.myForm1.hemail.value;
			var first = document.myForm1.fname.value;
			var middle = document.myForm1.mname.value;
			var last = document.myForm1.lname.value;
			var address = document.myForm1.addrss.value;
			var gen = document.myForm1.option.value;
			var web = document.myForm1.website.value;
			var contact = document.myForm1.contactt.value;
			var pass = document.myForm1.passw.value;
			
			if(first==""){
				alert("Empty firstname.");
			}
			else if(middle==""){
				alert("Empty middlename.");
			}
			else if(last==""){
				alert("Empty lastname");
			}
			else if(address==""){
				alert("Empty address");
			}
			else if (gen == null) {
				alert("No gender checked.");
			}	
			else if(contact==""){
				alert("Empty contact number");
			}
			else if(email==""){
				alert("Enter email.");
			}
			else if(pass==""){
				alert("Empty password.");
			}
			else if(web==""){
				alert("Empty website.");
			}
			else if(contact.length<11){
				alert("Contact number is less than 11 characters.");
			}
			else if(contact.length>11){
				alert("Contact number is greater than 11 characters.");
			}
			else if(pass.length < 8){
				alert("Password is less than 8");
			}
			else if(!validEmail(email)){
				alert("Invalid email.");
			}
			else if(!validPassword(pass)){
				alert("Invalid password.");
			}
			else if(!validWebsite(web)){
				alert("Invalid website");
			}
			else{
			alert("SUCCESS!");
				$.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: { fname: first , 
							mname: middle, 
							lname: last, 
							addrss: address, 
							contactt: contact, 
							hemail: email , 
							passw: pass , 
							website: web, 
							option: gen},
                    success: function(response){
                        $('#display').html(response);
                        }                
                });
			}
		});
			
		function validPassword(pass)
		{	
			var passVal = pass.split("");
			var capcount = 0;
			var numcount = 1; 
			for(var x = 0; x < passVal.length; x++)
			{
				if(passVal[x] == pass.charAt(x).toUpperCase())
				{
					numcount++;
				}
				for(var i=0;i<passVal.length;i++) 
				{
					if(/[A-Z]/.test(pass.charAt(i))) 
						capcount++;
				}
			}
			if(capcount>0 && numcount>0){
				return true;
			}
			else
			{
				return false;
			}
			
		}
			/*var a = "this is a letter holder"; 
			var isLetter = 0; //0 means false, 1 means true
			var isNumber = 0;
			var isSpecialchar = 0;
			for (var i = 0; i < pass.length; i++)
			{
					a = pass[i];
					if(a>=65 && a<=90 || a>=97 && a<=122) //checks the ASCII number if its in the range
							isLetter = 1;
					if(a>=48&&a<=57)
							isNumber = 1;
					if(a<48||a>57&&a<65||a>90&&a<97||a>122)
							isSpecialchar = 1;
			}
			
			if(isLetter == 1 && isNumber == 1&& isSpecialchar ==1)
					return true;
			else
					return false;*/

		function validWebsite(web)
		{
			if(web.indexOf(".com") > -1 || web.indexOf(".org") > -1 || web.indexOf(".gov") > -1 || web.indexOf(".edu") > -1)
				return true;
			else
				return false;
                        
        }
                        
        function validEmail( email)
        {
			if(email[0] == "@")
							return false;
			for(var i = 0; i < email.length; i++)
			{
					
					if(email[i] == "@")
					{
							if(email.indexOf(".com") > -1)
							{
									return true;
							}
					
					}
			}
			//the loop is finished then it didnt find any proper characters, therefore not valid
			return false;
		}
	</script>
	</body>


</html>