
<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
?>
<?php
include("connection.php")?>

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
			<center><h3><b>Resident updation form Page</b></h3></center>
			<nav id="navigationsub">
				<ul><li class=""><a href="index.php">Home</a></li>
					<li class=""><a href="kebeleAdmin.php">Kebele Addmin</a></li>
					<li class=""><a href="resident.php">Add Resident</a></li>
					<li><a href="displayresident.php">display Resident</a></li>
					<li><a href="deleteResident.php">Delete</a></li>
					<li><a href="updatForm.php">Update resident</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
				<div class="featured">
				
		<script type="text/javascript">
		function validate(){
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
<form  method="post" action="update_exc.php" style="border:outset" name="form1">
<table  height="715" width="1632"  cellspacing="3">
<?php
$id = $_REQUEST['id'];
$sel= mysql_query("SELECT * FROM resident  WHERE ResidentId = '$id' ");
$row = mysql_fetch_array($sel);
?>
<tr>
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<td class="td">First Name :</td>
	<td width="540" class="td"><input type="text" name="FirstName" class="input" value="<?php echo $row['firstName']?>" onKeyUp="validate()">
	</td>
</tr>
<tr>
	<td class="td">Middle Name :</td>
	<td class="td"><input type="text" name="MiddleName" class="input" value="<?php echo $row['middlename']?>" onKeyUp="validate()">
	</td><td width="924"></br>
</tr>
<tr>
	<td class="td">Last Name :</td>
	<td class="td"><input type="text" name="LastName" class="input" value="<?php echo $row['lastname']?>" onKeyUp="validate()">
	</td>
</tr>
<tr>
	<td class="td">Physical Status :</td>
	<td class="td"><select name="PhysicalStatus"  class="input" id="PhysicalStatus">    
	  						  <option value='<?php echo $row['PhysicalStatus']?>' selected><i><?php echo $row['PhysicalStatus']?></i></option>        
                              <option value='Normal'><i>Normal</i></option>
                              <option value='Disable'><i>Disable</i></option>
                            </select>
	</td>
</tr>
<tr>
	<td class="td">Martial Status :</td>
	<td class="td"><select name="MartialStatus"  class="input" id="MartialStatus">    
	  						  <option value='<?php echo $row['MartialStatus']?>' selected><?php echo $row['MartialStatus']?></option>        
                               <option value='Single'><i>Single</i></option>
                              <option value='Maried'><i>Maried</i></option>
                          
                              <option value='Divorced'><i>Divorced</i></option>
                            </select>
	<font color="red"><span id="martialstatus_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Kebele :</td>
	<td><select name="Kebele"  class="input">    
	  						  <option value='<?php echo $row['Kebele'];?>'><?php echo $row['Kebele'];?></option>        
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
	</td>
</tr>
<tr>
	<td class="td">Phone :</td>
	<td class="td"><input type="text" name="Phone" class="input" maxlength=12 onKeyPress="return num(event)" value="<?php echo $row['Phone']?>" onKeyUp="validate()">
	</td>
</tr>
<tr>
	<td class="td">Mobile :</td>
	<td class="td"><input type="text" name="Mobile" class="input" id="Mobile" onKeyPress="return num(event)" value="<?php echo $row['Moblie']?>" onKeyUp="validate()">
	</td>
</tr>


<tr>
	<td class="td">Email :</td>
	<td class="td"><input type="text" name="Email" class="input" value="<?php echo $row['email']?>" onchange="validate()">
	</td>
</tr>
<tr>
	<td class="td">House Number :</td>
	<td class="td"><input type="text" name="HouseNumber" class="input" value="<?php echo $row['HouseNumber']?>" onKeyUp="validate()">
	</td>
</tr>
<tr>
	<td class="td">Nationality :</td>
	<td class="td"><input type="text" name="Nationality" class="input" value="<?php echo $row['Nationality']?>" onKeyUp="validate()">
	
</tr>


<tr><th colspan="2"><input type="submit" style="height:35px;width:120px"  value="Update Resident"></th></tr>
</table>
</form>
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
		<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>information system Graduate class of 2007 E.C.</p></center></font>
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
