<?php   
//error_reporting(0);
 session_start();
 //include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HOSSANA CITY CONDOMINUM HOUSE MANAGMENT SYSTEM </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="menu.css"  rel="stylesheet" type="text/css" media="screen" />
<link href="themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #CCC;
}
body,td,th {
	color: #000000;
}
</style>
<script src="themes/8/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
<table align="center">
<!--Header-->
<tr>
<td width="850px" colspan="3" height="150px">
<p><a href="index.php"><img src="image/logo.png" align="left" width="140px" height="120px"></a>
</p>
<p><img src="image/dbuhrm.png" align="left" width="710px" height="120px">
</p>
</td>
</tr>
<!--End of Header-->
<!--Main menus-->
<tr>
<td colspan="3">
<div id="Menus">		
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li ><a href="about.php">About Us</a></li>
				<li><a href="login.php">Login</a></li>
			<li><a href="vacancy.php">vacancy</a></li>
			<li><a href="comment.php">Comment</a></li>
		
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
</div>

</td>
</tr>
<!--End main menus-->
<!--Slide show-->

<!--End of slide show-->

<tr>
<td width="200px" height="400px" valign="top" id="insides">
<table> 
<tr>
<th bgcolor="686868" width="200px" height="20px" align="center"><a href="memeber.php"><strong><font size ="2">Register</strong></font></a></th>
</tr>
<tr>
<th bgcolor="686868" width="200px" height="20px" align="center"><a href="Screening.php"><strong><font size="2">Screening Information</font></strong></a></th>
</tr>
<tr>
<th bgcolor="686868" width="200px" height="20px" align="center"><a href="viewplacement.php"><strong><font size="2">Placement Information</font></strong></th>
</tr>
<th bgcolor="686868" width="200px" height="20px" align="center"><a href="evaluationresult.php"><strong><font size="2">View Evaluation Passed</font></strong></a></th>
</tr>
</table>


</td>
<td valign="top" id="insides">
<br><br>



<script type='text/javascript'>
function formValidation(){
//assign the fields
        var idno=document.getElementById('idno');
		var firstname=document.getElementById('firstname');
		var middlename=document.getElementById('middlename');
		var lastname=document.getElementById('lastname');
		var age=document.getElementById('age');
		var cgpa=document.getElementById('cgpa');
		var email = document.getElementById('email');
		if(emailValidator(email,"check your E-mail format")){
		if(isAlphanumeric(idno, "please enter Your Id in alph numeric")){
if(lengthRestriction(idno, 3, 30,"for your applicant id")){
if(isAlphabet(firstname, "please enter Your First name in letters only")){
if(lengthRestriction(firstname, 3, 30,"for your First name")){
if(isAlphabet(middlename, "please enter Your First name in letters only")){
if(lengthRestriction(middlename, 3, 30,"for your First name")){
if(isAlphabet(lastname, "please enter Your First name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your First name")){
if(isNumeric(age, "please enter your age only two  digits")){
if(lengthRestriction(age, 2, 2,"for your age")){
if(isNumeric(cgpa, "please enter your your CGPA in number")){
if(lengthRestriction(cgpa, 2, 5,"for your cgpa")){
	return true;
	}}
	}}}}}}
	}}
	}}
return false;
		
}
function ageRestriction(elem){
    var max="75";
	var min="15";
	if(elem.value<18 ||elem.value>120)
	{
	alert("enter valid age");
	elem.focus();
	return false;}
	else{
  return true;
	}
} 
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9./]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}	
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z/]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
	

<form method="post" enctype="multipart/form-data" action="memeber.php" name="aform" onsubmit='return formValidation()'>
<center> 
<table style="border:1px solid #000000;box-shadow:1px 2px 3px gray;" width="450px" height="500px"font="18" >
<tr>
<font color="black" size="4">memeber  registration Form</font><br><br><br>
</tr>
<tr><td><font face="verdana,arial" size="-1"><font color="red"></font>First Name:</font></td>
 
  <td><font face="verdana,arial" size="-1"><input name="firstname" type="text" id="firstname" placeholder='First Name' required x-moz-errormessage="Please enter your first name."></font></td></tr>

<tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Middle Name:</font></td>
  
  <td><font face="verdana,arial" size="-1"><input name="middlename" type="text" id="middlename" placeholder='Middle Name' required x-moz-errormessage="Please enter middle name."></font></td></tr>
  
  <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Last Name:</font></td>
  
  <td><font face="verdana,arial" size="-1"><input name="lastname" type="text" id="lastname" placeholder='Last Name' required x-moz-errormessage="Please enter your last name."></font></td></tr>

  

  





   <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>Email address:</font></td>
  
  <td><font face="verdana,arial" size="-1"><input name="email" type="text" id="email" placeholder='email' required x-moz-errormessage="Please enter your email address."></font></td></tr>


 



 <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>age:</font></td>
  

  <td><font face="verdana,arial" size="-1"><input name="age" type="text" id="age" placeholder='age' required x-moz-errormessage="Please enter your age."></font></td></tr> 



   
<tr><td><font face="verdana,arial" size="-1"><font color="red"></font>gender:</font></td>
  

  <td><font face="verdana,arial" size="-1"><input name="gender" type="text" id="gender" placeholder='gender' required x-moz-errormessage="Please enter gender"></font></td></tr>


   <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>username:</font></td>

  <td><font face="verdana,arial" size="-1"><input name="username" type="text" id="username" placeholder='username' required x-moz-errormessage="Please enter your user name."></font></td></tr>
 


 <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>mobile:</font></td>

  <td><font face="verdana,arial" size="-1"><input name="mob" type="text" id="mob" placeholder='mob' required x-moz-errormessage="Please enter your user mobile number."></font></td></tr>



   <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>country:</font></td>
  
  

   	<td><font face="verdana,arial" size="-1"><input name="country" type="text" id="country" placeholder='gender' required x-moz-errormessage="Please enter country"></font></td></tr>

   <tr><td><font face="verdana,arial" size="-1"><font color="red"></font>password:</font></td>
 
  <td><font face="verdana,arial" size="-1"><input name="password" type="text" id="password" placeholder='password' required x-moz-errormessage="Please enter your password."></font></td></tr>

              

<tr><td><font face="verdana,arial" size="-1"></font></td>
 
  <td><font face="verdana,arial" size="-1">
 <input type="submit" name="submit"  />
</table></center>
</form>

<?php
$connect =mysql_connect("localhost","root","");
$db =mysql_select_db("condominium",$connect);
?>
<?php
 if(isset($_POST['submit']))
 {
$ut="resident";

$sql="INSERT INTO user_type (FirstName,MiddleName, LastName ,Email ,Age,Gender,Country,Mobile,UserName,Password,UserType)
VALUES
('$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[email]','$_POST[age]','$_POST[gender]','$_POST[country]','$_POST[mob]','$_POST[username]','$_POST[password]','".$ut."')";

if (!mysql_query($sql,$connect))
  {
  die('Error: '.'Already Exist'.mysql_error());
  }
  echo"<br><br>";
echo'  <p align="center"><font color="green" size="2"><img width="30px" height="30px" src="image/tick.png">&nbsp;&nbsp;Registered successfuly!</font></p>';
}
mysql_close($connect)
?>
</td>
</tr>
</table>
<div id="sample"><br><br><font face="arial" color="white" size="2"><p align="center">DBU HRMS &copy; 2015 Reserved!</div>
</body>
</html>

