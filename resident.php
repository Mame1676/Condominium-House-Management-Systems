
<?php
include("connection.php");
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
?>

<?php
$user_id=$_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
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
		function validate(){
			if (!form1.ResidentId.value.match(/^[0-9]+$/) && form1.ResidentId.value !="")
               {
                    form1.ResidentId.value="";
                    form1.ResidentId.focus(); 
                    alert("Please Enter only Number forR residentId ");
               }
			if (!form1.FirstName.value.match(/^[a-zA-Z]+$/) && form1.FirstName.value !="")
               {
                    form1.FirstName.value="";
                    form1.FirstName.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
			if (!form1.MiddleName.value.match(/^[a-zA-Z]+$/) && form1.MiddleName.value !="")
               {
                    form1.MiddleName.value="";
                    form1.MiddleName.focus(); 
                    alert("Please Enter only alphabets for Middle Name");
               }
			if (!form1.LastName.value.match(/^[a-zA-Z]+$/) && form1.LastName.value !="")
               {
                    form1.LastName.value="";
                    form1.LastName.focus(); 
                    alert("Please Enter only alphabets for Last Name");
               }
			
			
			if (!form1.HouseNumber.value.match(/^[0-9]+$/) && form1.HouseNumber.value !="")
               {
                    form1.HouseNumber.value="";
                    form1.HouseNumber.focus(); 
                    alert("Please Enter only Number for House Number");
               }
			if (!form1.Nationality.value.match(/^[a-zA-Z]+$/) && form1.Nationality.value !="")
               {
                    form1.Nationality.value="";
                    form1.Nationality.focus(); 
                    alert("Please Enter only alphabets for Nationality");
               }
			if (!form1.Email.value.match(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/) && form1.Email.value !="")
               {
                    form1.Email.value="";
                    form1.Email.focus(); 
                    alert("Please Enter a vaild Email");
               }
			   if (!form1.Phone.value.match(/^[0-9]+$/) && form1.Phone.value !="")
               {
                    form1.Phone.value="";
                    form1.Phone.focus(); 
                    alert("Please Enter only Number for Phone Number");
               }
			if (!form1.Mobile.value.match(/^[0-9]+$/) && form1.Mobile.value !="")
               {
                    form1.Mobile.value="";
                    form1.Mobile.focus(); 
                    alert("Please Enter only Number for Mobile Number");
               }
			   if (!form1.HouseNumber.value.match(/^[0-9]+$/) && form1.HouseNumber.value !="")
               {
                    form1.HouseNumber.value="";
                    form1.HouseNumber.focus(); 
                    alert("Please Enter only Number for House Number");
               }
			  
			
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
					<h1 id="logo"><a href=""></a></h1>
				

			</header>
			<!-- end of header -->
				<!-- navigaation -->
			
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
		<!-- search -->
				<div class="search">
					
				</div>
				<!-- end of search -->
			<!-- main -->
			<div class="featured">
			</div>
		  <div class="main">
		 <!-- navigaation -->
			<i style="padding-left:62em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a></i>
			<center><h3><b>Resident Registration Page</b></h3></center>
			<nav id="navigation">
				<ul><li class=""><a href="kebeleAdmin.php">Home</a></li>
					<li class=""><a href="resident.php">Add Resident</a></li>
					<li><a href="displayresident.php">Display Resident</a></li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
				<div class="featured"> <center>
	    <form  method="post" action="residentinsert.php" style="border:outset" name="form1">
<table  height="715" width="1632"  cellspacing="3">
<tr>
	<td width="148" class="td">Resident Id:</td>
	<td width="540" class="td"><input type="text" name="ResidentId" class="input" id="ResidentId" onKeyUp="validate()">
	<font color="red"><span id="residentid_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">First Name :</td>
	<td width="540" class="td"><input type="text" name="FirstName" class="input" id="FirstName" onKeyUp="validate()">
	<font color="red"><span id="firstname_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Middle Name :</td>
	<td class="td"><input type="text" name="MiddleName" class="input" id="MiddleName" onKeyUp="validate()">
	<font color="red"><span id="middlename_error" class="error"></span></font>
	</td><td width="924"></br>
</tr>
<tr>
	<td class="td">Last Name :</td>
	<td class="td"><input type="text" name="LastName" class="input" id="LastName" onKeyUp="validate()">
	<font color="red"><span id="lastname_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Physical Status :</td>
	<td class="td"><select name="PhysicalStatus"  class="input" id="PhysicalStatus" onKeyUp="validate()">    
	  						  <option value='0'><i>Select</i></option>        
                              <option value='Normal'><i>Normal</i></option>
                              <option value='Disable'><i>Disable</i></option>
                 
          
                            </select>
	<font color="red"><span id="physicalstatus_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Martial Status :</td>
	<td class="td"><select name="MartialStatus"  class="input" id="MartialStatus" onKeyUp="validate()">    
	  						  <option value='0'><i>Select</i></option>        
                              <option value='Single'><i>Single</i></option>
                              <option value='Maried'><i>Maried</i></option>
                            
                              <option value='Divorced'><i>Divorced</i></option>
          
                            </select>
	<font color="red"><span id="martialstatus_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Kebele :</td>
	<font color="red"><td class="td"><select name="Kebele"  class="input" id="Kebele" onKeyUp="validate()">    
	  						  <option value='0'>-----Select kebele-------</option>        
                              <option value='01'>01</option>
							   <option value='02'>02</option>
							   <option value='03'>03</option>
							   <option value='04'>04</option>
							    <option value='05'>05</option>
							     <option value='06'>06</option>
							      <option value='07'>07</option>
							       <option value='08'>08</option>
							        <option value='09'>09</option>
                            </select>
	<font color="red"><span id="kebele_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Phone :</td>
	<td class="td"><input type="text" name="Phone" class="input" id="Phone" onKeyUp="validate()" >
	<font color="red"><span id="phone_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Mobile :</td>
	<td class="td"><input type="text" name="Mobile" class="input" id="Mobile" onKeyUp="validate()" >
	<font color="red"><span id="mobile_error" class="error"></span></font>
	</td>
</tr>


<tr>
	<td class="td">Email :</td>
	<td class="td"><input type="text" name="Email" class="input" id="Email" onchange="validate()">
	<font color="red"><span id="email_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">House Number :</td>
	<td class="td"><input type="text" name="HouseNumber" class="input" id="HouseNumber" onKeyUp="validate()" >
	<font color="red"><span id="housenumber_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Nationality :</td>
	<td class="td"><input type="text" name="Nationality" class="input" id="Nationality" onKeyUp="validate()">
	<font color="red"><span id="nationality_error" class="error"></span></font></td>
</tr>
<tr>
	<td class="td">Gender :</td>
	<td class="td"><input type="radio" value="male" name="Gender" id="gender_mal" >Male
		<input type="radio" value="female" style="border-bottom:1px #a1a1a1 solid" name="Gender" id="gender_fel">Female
		<font color="red"><span id="gender_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">date Date</td>
	<td class="td"><input type="text" name="RDate" class="input" id="RDate" onFocus="" value=" <?php
echo date("Y-m-d")?>" readonly="true">
	<font color="red"><span id="rdate_error" class="error"></span></font>
	(format is Y-m-d) </td>
</tr>
<tr><th colspan="2"><input type="submit" style="height:35px;width:120px" onClick="return validation()" value="Register Resident"></th></tr>
</table>
</form></center>
</div>
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
				<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>information system  Graduate class of 2006 E.C.</p></center></font>
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
