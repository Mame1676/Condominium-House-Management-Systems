
<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
?>
<?php
include("connection.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/mycss.css" type="text/css" media="all" />
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script style="text/javascript">
 function num(evt)
 {
   var charCode = (evt.which) ? evt.which : evt.keyCode;
 
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
 
 return true;
 }
 function validation()
 {
			  document.getElementById("firstname_error").innerHTML="";
			  document.getElementById("middlename_error").innerHTML="";
			  document.getElementById("lastname_error").innerHTML="";
			  document.getElementById("email_error").innerHTML="";
			  document.getElementById("gender_error").innerHTML="";
			  document.getElementById("age_error").innerHTML="";
			  document.getElementById("country_error").innerHTML="";
			  document.getElementById("mobile_error").innerHTML="";
			  document.getElementById("username_error").innerHTML="";
			  document.getElementById("usertype_error").innerHTML="";
			  document.getElementById("password_error").innerHTML="";
			  document.getElementById("confirm_error").innerHTML="";
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var FirstName=document.getElementById("FirstName").value;
				var MiddleName=document.getElementById("MiddleName").value;
				var LastName=document.getElementById("LastName").value;
				var Email=document.getElementById("Email").value;
				var Age=document.getElementById("Age").value;
				var gender_mal=document.getElementById("gender_mal").checked;
				var gender_fel=document.getElementById("gender_fel").checked;
				var Country=document.getElementById("Country").value;
				var Mobile=document.getElementById("Mobile").value;
				var UserName=document.getElementById("UserName").value;
				var UserType=document.getElementById("UserType").value;
				var Password=document.getElementById("Password").value;
				var confirmp=document.getElementById("confirmp").value;
				var flag=true;
				var focus="";
//-----------------------------Gender validation---------------------------------
				if(gender_fel==false && gender_mal==false)
				{
					document.getElementById("gender_error").innerHTML="Please select gender.";
					document.getElementById("gender_fel").style.borderColor='red';
					document.getElementById("gender_mal").style.borderColor='red';
					
					flag=false;
				}
				
//-----------------------------First Name validation---------------------------------
			var val = document.getElementById('FirstName').value;
			if(val=="")
				{
				document.getElementById("firstname_error").innerHTML="Please enter First Name.";
				document.getElementById("FirstName").style.borderColor='red';
				focus="FirstName";
				flag=false;
				}   
				 else if(!val.match(/^[a-zA-Z]+$/)) 
					{
					document.getElementById("firstname_error").innerHTML="Please enter Alphabet only.";
					document.getElementById("FirstName").style.borderColor='red';
					focus="FirstName";
					flag=false;
					 }
					 
					 else if(val.match(/^[a-zA-Z]+$/))
					 {
					 
					 	document.getElementById("FirstName").style.borderColor='green';
						flag =true;
					 }
//-----------------------------Middle Name validation---------------------------------
				var val = document.getElementById('MiddleName').value;
				if(val=="")
				{
					document.getElementById("middlename_error").innerHTML="Please enter Middle Name.";
					document.getElementById("MiddleName").style.borderColor='red';
					focus="MiddleName";
					flag=false;
				}
				else if(!val.match(/^[a-zA-Z]+$/)) 
					{
					document.getElementById("middlename_error").innerHTML="Please enter Alphabet only.";
					document.getElementById("MiddleName").style.borderColor='red';
					focus="MiddleName";
					flag=false
					}
					 
					 else if(val.match(/^[a-zA-Z]+$/))
					 {
					 
					 	document.getElementById("MiddleName").style.borderColor='green';
						flag =true;
					 }
//-----------------------------Last Name validation---------------------------------
					var val = document.getElementById('LastName').value;
					if(val=="")
					{
						document.getElementById("lastname_error").innerHTML="Please enter Last Name.";
						document.getElementById("LastName").style.borderColor='red';
						focus="LastName";
						flag=false;
					}
					else if(!val.match(/^[a-zA-Z]+$/)) 
						{
					    document.getElementById("lastname_error").innerHTML="Please enter only character.";
						document.getElementById("LastName").style.borderColor='red';
						focus="LastName";
						flag=false;
						}
						 
					 else if(val.match(/^[a-zA-Z]+$/))
					 {
					 
					 	document.getElementById("LastName").style.borderColor='green';
						flag =true;
					 }
//-----------------------------Email validation------------------------------------------
							if(Email=="")
							{
								document.getElementById("email_error").innerHTML="Please enter email address.";
								document.getElementById("Email").style.borderColor='red';
								if(focus=="")focus="Email";
								flag=false;
							}
							else if(!filter.test(Email))
							{
								document.getElementById("email_error").innerHTML="Please enter valid email address.";
								document.getElementById("Email").style.borderColor='red';
								if(focus=="")focus="Email";
								flag=false;
							}
							 else if(filter.test(Email))
					 {
					 
					 	document.getElementById("Email").style.borderColor='green';
						flag =true;
					 }
//-----------------------------Age validation---------------------------------
							var val = document.getElementById('Age').value;
						if(val=="")
						{
							document.getElementById("age_error").innerHTML="Please enter Age.";
							document.getElementById("Age").style.borderColor='red';
							if(focus=="")focus="Age";
							flag=false;
						}
						else if(!val.match(/^[0-9]+$/)) 
							{
							document.getElementById("age_error").innerHTML="Please enter only number.";
							document.getElementById("Age").style.borderColor='red';
							if(focus=="")focus="Age";
							flag=false;
							}
							else if(val>60 || val< 18)
							{
							document.getElementById("age_error").innerHTML="below raege or above range .";
							document.getElementById("Age").style.borderColor='red';
							if(focus=="")focus="Age";
							flag=false;
							
							}
							 else if(val.match(/^[0-9]+$/))
					 {
					 
					 	document.getElementById("Age").style.borderColor='green';
						flag =true;
					 }

//-----------------------------Mobile validation------------------------------------------

							var mb=Mobile.length;
							if(Mobile=="")
							{
								document.getElementById("mobile_error").innerHTML="Please enter Mobile number.";
								document.getElementById("Mobile").style.borderColor='red';
								if(focus=="")focus="Mobile";
								flag=false;
							}
							else if(mb!=10)
							{
								document.getElementById("mobile_error").innerHTML="Please enter valid Mobile number.";
								document.getElementById("Mobile").style.borderColor='red';
								if(focus=="")focus="Mobile";
								flag=false;
							}
							else
					 {
					 
					 	document.getElementById("Mobile").style.borderColor='green';
						flag =true;
					 }

//-----------------------------Counry validation------------------------------------------
							var val=document.getElementById("Country").value;
							if(val=="0")
							{
								document.getElementById("country_error").innerHTML="Please select  Counry.";
								document.getElementById("Country").style.borderColor='red';
								if(focus=="")focus="Country";
								flag=false;
							}
							else
							{
							document.getElementById("Country").style.borderColor='green';
							flag=True;
							}
//-----------------------------User Name validation------------------------------------------
							var val=document.getElementById("UserName").value;
							if(val=="")
							{
								document.getElementById("username_error").innerHTML="Please enter  UserName.";
								document.getElementById("UserName").style.borderColor='red';
								if(focus=="")focus="UserName";
								flag=false;
							}
							else if(!val.match(/^[a-zA-Z]+$/)) 
							{
							document.getElementById("username_error").innerHTML="Please enter only alphabet.";
							document.getElementById("UserName").style.borderColor='red';
							focus="UserName";
							flag=false;
							}
							else if(val.match(/^[a-zA-Z]+$/)) 
							{
							document.getElementById("UserName").style.borderColor='green';
							flag=True;
							}
//-----------------------------User Type validation------------------------------------------
							var val=document.getElementById("UserType").value;
							if(val=="0")
							{
								document.getElementById("usertype_error").innerHTML="Please select  User Type.";
								document.getElementById("UserType").style.borderColor='red';
								if(focus=="")focus="UserType";
								flag=false;
							}
							else{
						
							document.getElementById("UserType").style.borderColor='green';
							flag=True;
							}
//-----------------------------password validation------------------------------------------							
							if(Password=="")
							{
								document.getElementById("password_error").innerHTML="Please enter password.";
								document.getElementById("Password").style.borderColor='red';
								if(focus=="")focus="Password";
								flag=false;
							}
							else if(confirmp=="")
							{
								document.getElementById("confirm_error").innerHTML="Please enter conform-password.";
									document.getElementById("confirmp").style.borderColor='red';
								if(focus=="")focus="confirmp";
								flag=false;
							}
							else if(5>Password.length)
							{
								document.getElementById("password_error").innerHTML="Please enter more then 5 character.";
									document.getElementById("Password").style.borderColor='red';
								if(focus=="")focus="Password";
								flag=false;
							}
							else if(Password!=confirmp)
							{
								document.getElementById("confirm_error").innerHTML="Don't match password.";
								document.getElementById("confirm_error").style.borderColor='red';
								document.getElementById("confirmp").style.borderColor='red';
								if(focus=="")focus="confirmp";
								flag=false;
							}
							else
							{
							document.getElementById("Password").style.borderColor='green';
							document.getElementById("confirmp").style.borderColor='green';
							}
							
							if(focus!="")
								document.getElementById(focus).focus();
							return flag;
							}						
</script>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
			<!-- header -->
		  <header id="header">
					<h1 id="logo"><a href="">		</a></h1>
				

		  </header>
			<!-- end of header -->			
			<!-- navigaation -->
			<nav id="navigation">
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<!-- main -->
			<div class="main">
			<div class="featured">
					
			  </div>
			<nav id="navigationsub">
				<center><h3><b>User Registration Page</b></h3></center>
				<ul>
					<li class=""><a href="site.php">Add site</a></li>
					<li><a href="block.php">Add block</a></li>
					<li><a href="house.php">Add house</a></li>
					<li><a href="updatehouse.php">update</a></li>
					<li><a href="displayhouse.php">Display</a></li>
					<li><a href="Drawlottery.php">Draw</a></li>
				
					<li><a href="signup.php">signup </a></li>
				
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
					<div class="featured">
			<center ><form  action="signupinsertion.php"  name="form1" method="post">
<table   width="707" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="2">
<tr>
	<td width="236" class="td"> First Name :</td>
	<td width="456" class="td"><input type="text" name="FirstName" class="input" id="FirstName">
	<font color="red"><span id="firstname_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Middle Name :</td>
	<td class="td"><input type="text" name="MiddleName" class="input" id="MiddleName">
	<font color="#FF0000"><span id="middlename_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Last Name :</td>
	<td class="td"><input type="text" name="LastName" class="input" id="LastName">
	<font color="#FF0000"><span id="lastname_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Email :</td>
	<td class="td"><input type="text" name="Email" class="input" id="Email">
	<font color="red"><span id="email_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Age :</td>
	<td class="td"><input type="text" name="Age" class="input" id="Age" onKeyPress="return num(event)">
	<font color="red"><span id="age_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Gender :</td>
	<td class="td"><input type="radio" value="male" name="Gender" id="gender_mal" >Male
		<input type="radio" value="female" style="border-bottom:1px #a1a1a1 solid" name="Gender" id="gender_fel">Female
		<font color="red"><span id="gender_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Country :</td>
	<td class="td"><select name="Country"  class="input" id="Country">    
	  						  <option value='0'><i>------Select-------</i></option>        
								  <option value='Ethiopia'><i>Ethiopia</i></option>
                            </select>
	<font color="red"><span id="country_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">Mobile :</td>
	<td class="td"><input type="text" name="Mobile" class="input" id="Mobile" onKeyPress="return num(event)">
	<font color="red"><span id="mobile_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">User Name :</td>
	<td class="td"><input type="text" name="UserName" class="input" id="UserName">
	<font color="red"><span id="username_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">User Type:</td>
	<td class="td"><select name="UserType"  class="input" id="UserType">    
	  						  <option value='0'>------Select-------</option>        
                              <option value='condominium'>condominium</option>
                              <option value='kebele'>kebele</option>
                              <option value='bank'>bank </option>
                            </select>
	<font color="red"><span id="usertype_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">Password :</td>
	<td class="td"><input type="password" name="Password" class="input" id="Password" maxlength="12">
	<font color="red"><span id="password_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">Confirm Password :</td>
	<td class="td"><input type="password" name="confirmp" class="input" id="confirmp" maxlength="12">
	<font color="red"><span id="confirm_error" class="error"></span></font>
	</td>
</tr></br>

<tr><label id="success" class="input"></label></tr>
<th height="35" colspan="2"><input type="submit" style="height:35px;width:120px" onClick="return validation()" value="Submit"></th>
</table>
</form>	
</center>	
					</div>
				<div class="cl">&nbsp;</div>
		<div class="col">
						</ul>
				  </div>
					<div class="cl">&nbsp;</div>
				</section>
				<section class="entries">
					<div class="entry">
						<div class="testimonials">					
						</div>
					</div>
					
				</section>
			</div>
			
			<!-- footer -->
			<div id="footer">
			
				<div class="footer-nav">
					<ul>
					
					</li>
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
	<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>information system  Graduate class of 2007 E.C.</p></center></font>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of footer -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>