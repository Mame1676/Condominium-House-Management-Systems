<?php
error_reporting("E_NOTICE");
?>
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
	<meta  />
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
			  document.getElementById("physicalstatus_error").innerHTML="";
			  document.getElementById("martialstatus_error").innerHTML="";
			  document.getElementById("region_error").innerHTML="";
			  document.getElementById("zone_error").innerHTML="";
			  document.getElementById("wereda_error").innerHTML="";
			  document.getElementById("city_error").innerHTML="";
			  document.getElementById("kebele_error").innerHTML="";
			  document.getElementById("phone_error").innerHTML="";
			  document.getElementById("mobile_error").innerHTML="";
			  document.getElementById("email_error").innerHTML="";
			  document.getElementById("housenumber_error").innerHTML="";
			  document.getElementById("nationality_error").innerHTML="";
			  document.getElementById("gender_error").innerHTML="";
			  document.getElementById("residentid_error").innerHTML="";
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var ResidentId=document.getElementById("ResidentId").value;
				var FirstName=document.getElementById("FirstName").value;
				var MiddleName=document.getElementById("MiddleName").value;
				var LastName=document.getElementById("LastName").value;
				var MartialStatus=document.getElementById("MartialStatus").value;
				var PhysicalStatus=document.getElementById("PhysicalStatus").value;
				var Region=document.getElementById("Region").value;
				var Zone=document.getElementById("Zone").value;
				var Wereda=document.getElementById("Wereda").value;
				var City=document.getElementById("City").value;
				var Kebele=document.getElementById("Kebele").value;
				var Phone=document.getElementById("Phone").value;
				var Mobile=document.getElementById("Mobile").value;
				var HouseNumber=document.getElementById("HouseNumber").value;
				var Email=document.getElementById("Email").value;
				var Nationality=document.getElementById("Nationality").value;
				var gender_mal=document.getElementById("gender_mal").checked;
				var gender_fel=document.getElementById("gender_fel").checked;
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
				
					flag=true;
					 }
					 
//-----------------------------Middle Name validation-----------------------------------------------------
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
					if(focus=="")focus="MiddleName";
					flag=false
					}
					 else if(val.match(/^[a-zA-Z]+$/)) 
					{
			
					document.getElementById("MiddleName").style.borderColor='green';
				
					flag=true;
					 }
//-----------------------------Last Name validation---------------------------------
					var val = document.getElementById('LastName').value;
					if(val=="")
					{
						document.getElementById("lastname_error").innerHTML="Please enter Last Name.";
						document.getElementById("LastName").style.borderColor='red';
						if(focus=="")focus="LastName";
						flag=false;
					}
					else if(!val.match(/^[a-zA-Z]+$/)) 
						{
					    document.getElementById("lastname_error").innerHTML="Please enter only character.";
						document.getElementById("LastName").style.borderColor='red';
						if(focus=="")focus="LastName";
						flag=false;
						}
						 else if(val.match(/^[a-zA-Z]+$/)) 
					{
			
					document.getElementById("LastName").style.borderColor='green';
				
					flag=true;
					 }
//-----------------------------Physical status validation---------------------------------
						if(PhysicalStatus=="0")
						{
							document.getElementById("physicalstatus_error").innerHTML="Please select Physical Status.";
							document.getElementById("PhysicalStatus").style.borderColor='red';
							if(focus=="")focus="PhysicalStatus";
							flag=false;
						}
							 else 
					{
			
					document.getElementById("PhysicalStatus").style.borderColor='green';
				
					flag=true;
					 }
//-----------------------------Martial status  validation---------------------------------
						if(MartialStatus=="0")
						{
							document.getElementById("martialstatus_error").innerHTML="Please select Martial Status.";
							document.getElementById("MartialStatus").style.borderColor='red';
							if(focus=="")focus="MartialStatus";
							flag=false;
						}
						 else 
						{
				
						document.getElementById("MartialStatus").style.borderColor='green';
					
						flag=true;
						 }
//----------------------------------Region validation------------------------
						var val = document.getElementById('Region').value;
						if(val=="")
						{
							document.getElementById("region_error").innerHTML="Please enter Region.";
							document.getElementById("Region").style.borderColor='red';
							if(focus=="")focus="Region";
							flag=false;
						}
						else if(!val.match(/^[a-zA-Z]+$/)) 
							{
						   document.getElementById("region_error").innerHTML="Please enter only character.";
							document.getElementById("Region").style.borderColor='red';
							if(focus=="")focus="Region";
							flag=false;
							}
								else if(val.match(/^[a-zA-Z]+$/)) 
							{
					
							document.getElementById("Region").style.borderColor='green';
							
							flag=false;
							}
//----------------------------------Zone validation------------------------
							var val = document.getElementById('Zone').value;
							if(val=="")
							{
								document.getElementById("zone_error").innerHTML="Please enter Zone.";
									document.getElementById("Zone").style.borderColor='red';
								
								flag=false;
							}
							else if(!val.match(/^[a-zA-Z]+$/)) 
								{
							   document.getElementById("zone_error").innerHTML="Please enter only character.";
								document.getElementById("Zone").style.borderColor='red';
								if(focus=="")focus="Zone";
								flag=false;
								}
							else if(val.match(/^[a-zA-Z]+$/)) 
							{
					
							document.getElementById("Zone").style.borderColor='green';
							flag=false;
							}
//--------------------------------------Wereda validation------------------------
							var val = document.getElementById('Wereda').value;
							if(val=="")
								{
									document.getElementById("wereda_error").innerHTML="Please enter Wereda.";
											document.getElementById("Wereda").style.borderColor='red';
									if(focus=="")focus="Wereda";
									flag=false;
								}
							else if(!val.match(/^[a-zA-Z]+$/))
								{
											document.getElementById("wereda_error").innerHTML="Please enter only character.";
											document.getElementById("Wereda").style.borderColor='red';
											if(focus=="")focus="Wereda";
											flag=false;
								
								
								}
							else if(val.match(/^[a-zA-Z]+$/)) 
								{
						
								document.getElementById("Wereda").style.borderColor='green';
								flag=false;
								}
//-----------------------------city validation---------------------------------
								var val = document.getElementById('City').value;
								if(val=="")
								{
									document.getElementById("city_error").innerHTML="Please enter City.";
									document.getElementById("City").style.borderColor='red';
									if(focus=="")focus="City";
									flag=false;
								}
								else if(!val.match(/^[a-zA-Z]+$/))
								{
								document.getElementById("city_error").innerHTML="Please enter character only.";
								document.getElementById("City").style.borderColor="red";
								if(focus=="")focus="City";
									flag=false;
								}
								else if(val.match(/^[a-zA-Z]+$/)) 
								{
						
								document.getElementById("City").style.borderColor='green';
								flag=true;
								}
								

//-----------------------------kebele validation------------------------------------------
								var val = document.getElementById('Kebele').value;
								if(val=="")
								{
									document.getElementById("kebele_error").innerHTML="Please enter Kebele.";
									document.getElementById("Kebele").style.borderColor='red';
									if(focus=="")focus="Kebele";
									flag=false;
								}
								else if(!val.match(/^[a-zA-Z]+$/))
								{
									document.getElementById("kebele_error").innerHTML="Please enter character only to fill this box.";
									document.getElementById("Kebele").style.borderColor='red';
									if(focus=="")focus="Kebele";
									flag=false;
								}
								else if(val.match(/^[a-zA-Z]+$/)) 
								{
						
								document.getElementById("Kebele").style.borderColor='green';
								flag=true;
								}
								
//-----------------------------Phone validation------------------------------------------
								var ph=Phone.length;
								if(Phone=="")
								{
									document.getElementById("phone_error").innerHTML="Please enter phone number.";
									document.getElementById("Phone").style.borderColor='red';
									if(focus=="")focus="Phone";
									flag=false;
								}
								else if(ph!=10)
								{
									document.getElementById("phone_error").innerHTML="Please enter valid phone number.";
									document.getElementById("Phone").style.borderColor='red';
									if(focus=="")focus="Phone";
									flag=false;
								}
								else
								{
						
								document.getElementById("Phone").style.borderColor='green';
								flag=true;
								}
//-----------------------------Mobile validation------------------------------------------

							var mb=Mobile.length;
							if(Mobile=="")
							{
								document.getElementById("mobile_error").innerHTML="Please enter Mobile number.";
								document.getElementById("Mobile").style.borderColor='red';
								if(focus=="")focus="Phone";
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
								flag=true;
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
							
								flag=true;
							}
//-----------------------------House number validation------------------------------------------
							var val=document.getElementById("HouseNumber").value;
							if(val=="")
							{
								document.getElementById("housenumber_error").innerHTML="Please enter House Number.";
								document.getElementById("HouseNumber").style.borderColor='red';
								if(focus=="")focus="HouseNumber";
								flag=false;
							}
							else if(!val.match(/^[0-9]+$/))
							{
								document.getElementById("housenumber_error").innerHTML="Please enter number only.";
								document.getElementById("HouseNumber").style.borderColor='red';
								if(focus=="")focus="HouseNumber";
								flag=false;
							}
							else if(val.match(/^[0-9]+$/))
							{
								
								document.getElementById("HouseNumber").style.borderColor='green';
							
								flag=true;
	
						}
//-----------------------------Resident Id validation------------------------------------------
							var val=document.getElementById("ResidentId").value;
							if(val=="")
							{
								document.getElementById("residentid_error").innerHTML="Please enter Resident Id Number.";
								document.getElementById("ResidentId").style.borderColor='red';
								if(focus=="")focus="ResidentId";
								flag=false;
							}
							else if(!val.match(/^[0-9]+$/))
							{
								document.getElementById("residentid_error").innerHTML="Please enter number only.";
								document.getElementById("ResidentId").style.borderColor='red';
								if(focus=="")focus="ResidentId";
								flag=false;
							}
							else if(val.match(/^[0-9]+$/))
							{
								
								document.getElementById("ResidentId").style.borderColor='green';
							
								flag=true;
							}
						
//-----------------------------Nationality validation------------------------------------------
					
							var val=document.getElementById("Nationality").value;
							if(val=="")
							{
								document.getElementById("nationality_error").innerHTML="Please enter Nationality.";
								document.getElementById("Nationality").style.borderColor='red';
								if(focus=="")focus="Nationality";
								flag=false;
							}
							else if(!val.match(dateformat))
							{
								document.getElEmentById("nationality_error").innerHTML="Please enter the legal format only.";
								document.getElementById("Nationality").style.borderColor='red';
								if(focus=="")focus="Nationality";
								flag=false;
							}
							else if(val.match(dateformat))
							{
							
								document.getElementById("Nationality").style.borderColor='green';
				
								flag=true;
							}
							if(focus!="")
								document.getElementById(focus).focus();
							return flag;
							}
												
function validatedate(RDate)  
  {  
  var val=document.getElementById("RDate").value;
  
  var dateformat = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;  
  // Match the date format through regular expression  
  if(RDate.match(dateformat))  
  {  
  document.form1.RDate.focus();  
  //Test which seperator is used '/' or '-'  
  var opera1 = RDate.value.split('/');  
  var opera2 = RDate.value.split('-');  
  lopera1 = opera1.length;  
  lopera2 = opera2.length;  
  // Extract the string into month, date and year  
  if (lopera1>1)  
  {  
  var pdate = RDate.value.split('/');  
  }  
  else if (lopera2>1)  
  {  
  var pdate = RDate.value.split('-');  
  }  
  var mm  = parseInt(pdate[0]);  
  var dd = parseInt(pdate[1]);  
  var yy = parseInt(pdate[2]);  
  // Create list of days of a month [assume there is no leap year by default]  
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
  if (mm==1 || mm>2)  
  {  
  if (dd>ListofDays[mm-1])  
 

	{
		document.getElementById("rdate_error").innerHTML="Please enter correct date format only.";
		document.getElementById("RDate").style.borderColor='red';
		if(focus=="")focus="RDate";
		flag=false;
	}
  
  }  
  if (mm==2)  
  {  
  var lyear = false;  
  if ( (!(yy % 4) && yy % 100) || !(yy % 400))   
  {  
  lyear = true;  
  }  
  if ((lyear==false) && (dd>=29))  
  {  
 document.getElementById("rdate_error").innerHTML="Please enter correct year no leeap year.";
		document.getElementById("RDate").style.borderColor='red';
		if(focus=="")focus="RDate";
		flag=false;
  }  
  if ((lyear==true) && (dd>29))  
  {  
 document.getElementById("rdate_error").innerHTML="Please enter correct year format only.";
		document.getElementById("RDate").style.borderColor='red';
		if(focus=="")focus="RDate";
		flag=false; 
  return false;  
  }  
  }  
  }  
  else  
  {  
 document.getElementById("rdate_error").innerHTML="Please enter correct date format only.";
		document.getElementById("RDate").style.borderColor='red';
		if(focus=="")focus="RDate";
		flag=false;
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
			<nav id="navigation">
				
			
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
			<center><h3><b>Resident Registration Page</b></h3></center>
			<nav id="navigation">
				<ul>
					<li class=""><a href="kebeleAdmin.php">Kebele Addmin</a></li>
					<li class=""><a href="resident.php">Add Resident</a></li>
					<li><a href="displayresident.php">display Resident</a></li>
					<li><a href="deleteResident.php">Delete</a></li>
					<li><a href="updatForm.php">Update resident</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
				 <center><div class="featured">
<?php 
		$_SESSION['resident']=array();
		$ResidentId = $_POST['ResidentId'];
		$FirstName = $_POST['FirstName'];
		$MiddleName = $_POST['MiddleName'];
		$LastName = $_POST['LastName'];
		$PhysicalStatus = $_POST['PhysicalStatus'];
		$Kebele = $_POST['Kebele'];
		$Phone = $_POST['Phone'];
		$Mobile = $_POST['Mobile'];
		$Email = $_POST['Email'];
		$HouseNumber = $_POST['HouseNumber'];
		$Nationality = $_POST['Nationality'];
		$RDate = $_POST['RDate'];
		$Gender = $_POST['Gender'];
		$MartialStatus = $_POST['MartialStatus'];
        		
if(empty($_POST['Kebele']) || empty($_POST['ResidentId']) || empty($_POST['FirstName']) || empty($_POST['LastName'])  )
{
	header("location:resident.php");
	exit();
}
	$q=mysql_query("insert into resident values('$FirstName','$MiddleName','$LastName','$Gender','$Email','$Mobile','$PhysicalStatus',
	 '$Kebele','$Phone','$ResidentId','$HouseNumber','$Nationality','$RDate','$MartialStatus')"); 
	 mysql_query("INSERT INTO user_type values('','$ResidentId','$LastName','resident','".md5($ResidentId)."' )");
if($q)
{
echo"<img src='images/tick.png'/> Resident information inserted successfully";
echo '<meta content="2;resident.php" http-equiv="refresh"/>';
}else{
	echo"UNABLE TO INSERT".mysql_error();

}

 ?>
</div></center>
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
				<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>Information system Graduate class of 2007 E.C.</p></center></font>
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
