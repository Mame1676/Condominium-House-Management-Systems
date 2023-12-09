<?php
session_start();
if( !$_SESSION['ResidentId'])
{
header('location: login.php');
}

?>
<?php
include("connection.php");
$user_id=$_SESSION['ResidentId'];

$result=mysql_query("select * from resident where ResidentId='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$ResidentId=$row['ResidentId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREE BERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM </title>
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
  function validate()
        {
           if (form1.HouseType.value.match(0))
               {
                    form1.HouseType.value="";
                    form1.HouseType.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
            
        }   
 
 
 function num(evt)
 {
   var charCode = (evt.which) ? evt.which : evt.keyCode;
 
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
 
 return true;
 }
 function validation()
 {
				    document.getElementById("city_error").innerHTML="";
					document.getElementById("servicetype_error").innerHTML="";
				    document.getElementById("housetype_error").innerHTML="";
				    document.getElementById("residentid_error").innerHTML="";
					document.getElementById("applicationdate_error").innerHTML="";
					document.getElementById("applicantid_error").innerHTML="";
					
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					var City=document.getElementById("City").value;
					var ServiceType=document.getElementById("ServiceType").value;
					var HouseType=document.getElementById("HouseType").value;
					var ResidentId=document.getElementById("ResidentId").value;
					var ApplicationDate=document.getElementById("ApplicationDate").value;
						var ApplicationDate=document.getElementById("ApplicantId").value;
					var flag=true;
					var focus="";
//-----------------------------Applicant id validation------------------------------------------
					var val = document.getElementById('ApplicantId').value;
					if(val=="")
					{
						document.getElementById("applicantid_error").innerHTML=" *   Please enter Applicant Id.";
						document.getElementById("ApplicantId").style.borderColor='red';
						focus="ApplicantId";
						flag=false;
					}
					else if(!val.match(/^[0-9]+$/)) 
						{
					    document.getElementById("applicantid_error").innerHTML=" *   Please enter only Number only.";
						document.getElementById("ApplicantId").style.borderColor='red';
						focus="ApplicantId";
						flag=false;
						}
						else{
						document.getElementById("ApplicantId").style.borderColor='green';
						}

//-----------------------------city validation------------------------------------------
					var val = document.getElementById('City').value;
					if(val=="")
					{
						document.getElementById("city_error").innerHTML=" *   Please enter City.";
						document.getElementById("City").style.borderColor='red';
						focus="City";
						flag=false;
					}
					else if(!val.match(/^[a-zA-Z]+$/)) 
						{
					    document.getElementById("city_error").innerHTML=" *   Please enter only character.";
						document.getElementById("City").style.borderColor='red';
						focus="City";
						flag=false;
						}
						else{
						document.getElementById("City").style.borderColor='green';
						}

//-----------------------------service type  validation---------------------------------
						if(ServiceType=="0")
						{
							document.getElementById("servicetype_error").innerHTML=" *   Please select Service Type.";
							document.getElementById("ServiceType").style.borderColor='red';
							if(focus=="")focus="ServiceType";
							flag=false;
						}
						else
						{
						document.getElementById("ServiceType").style.borderColor='green';
						}
//-----------------------------House type  validation---------------------------------
						if(HouseType=="0")
						{
							document.getElementById("housetype_error").innerHTML=" *   Please select House Type.";
							document.getElementById("HouseType").style.borderColor='red';
							if(focus=="")focus="HouseType";
							flag=false;
						}
						else
						{
						document.getElementById("HouseType").style.borderColor='green';
						}
						
//-----------------------------Application Date validation---------------------------------
						if(ApplicationDate=="")
						{
							document.getElementById("applicationdate_error").innerHTML=" *   Please enter Application Date.";
							document.getElementById("ApplicationDate").style.borderColor='red';
							if(focus=="")focus="ApplicationDate";
							flag=false;
						}
						else
						{
						document.getElementById("ApplicationDate").style.borderColor='green';
						}
//-----------------------------resident Id validation------------------------------------------
							var val=document.getElementById("ResidentId").value;
							if(val=="")
							{
								document.getElementById("residentid_error").innerHTML=" *   Please enter Resident Id.";
								document.getElementById("ResidentId").style.borderColor='red';
								if(focus=="")focus="ResidentId";
								flag=false;
							}
							else if(!val.match(/^[0-9]+$/))
							{
								document.getElementById("residentid_error").innerHTML=" *    Please enter number only.";
								document.getElementById("ResidentId").style.borderColor='red';
								if(focus=="")focus="ResidentId";
								flag=false;
							}
							else
							{
							document.getElementById("residentid_error").style.borderColor='green';
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
					<h1 id="logo"><a href=""></a></h1>
				

			</header>
			<!-- end of header -->
				<!-- navigaation -->
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
				<ul>
					<li class=""><a href="residentLog.php">Home</a></li>
					
					<li><a href="Applicant.php">Apply</a></li>
					
					</ul><ul>
					<li><div style="padding-left:25em"><a href="manageAcc.php?user_no='$user_no' ">Manage Account</div></a></li>
					<li><a href="logout.php">Logout</a></li>
					
					
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<!-- main -->
		  <div class="main">

	<div class="featured">
	
<?php 
$ss = mysql_query("SELECT * FROM applicant WHERE ResidentId	= '$ResidentId' ");
$fet = mysql_num_rows($ss);

if($fet > 0){
	header("location:residentLog.php");
	
}

?>
		<form  method="post" action="applicantinsertion.php" style="border:outset" name="form1" onSubmit='validation()'>
			<table  height="450px" width="600px" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
						<tr>
							<th colspan=2 style="border-bottom:1px green solid;padding-top:10px;padding-bottom:10px ">Application Form</th>
						</tr>
						
						</tr>
						<tr><td>&nbsp;</td></tr><tr>
							
							<td class="td">Service Type:</td>
							<td class="td"><select name="ServiceType"  class="input" id="ServiceType" onsubmit="validate()" required x-moz-errormessage="please enter service type">    
				       
													  <option value='Home'><i>Home</i></option>
													 
													  
								  
													</select>
							<span id="servicetype_error" class="error"></span>	</td>
						</tr>
						<tr>
							<td class="td">House Type :</td>
							<td class="td"><select name="HouseType"  class="input" id="HouseType" onkeyup="validate()" >    
													  <option value='0'><i>---Select House Type---</i></option>        
													  <option value='Studio'><i>Studio</i></option>
													  <option value='1 bed'><i>1 bed</i></option>
													  <option value='2 bed'><i>2 bed</i></option>
													  <option value='3 Bed'><i>3 bed</i></option>
								  
													</select>
							<span id="housetype_error" class="error"></span>	</td>
						</tr>
						
						
						<tr>
							
							<td width="152" > Site Id:</td>
							<td>
							  <select name="SiteId" class="input" id="SiteId">
							  <option value="0">--select your site Id--</option>
							  <?php
							  include('connection.php');
							 
							  // $query=mysql_query("select ResidentId from applicant");
							   //  while($row1=mysql_fetch_array($query));
							  $query1=mysql_query("select SiteId from site");
							   while($row=mysql_fetch_array($query1))
							  {
							  $site=$row['SiteId'];
							  
								 echo "<option>".$site."</option>";
								 }
							  ?>
							  </select></td>
							<td width="203" class="td"><span id="residentid_error" class="error"></span>(1=around blanket factory,2=around semayawi hotel,3=around university,4=around meleket acadamy)	  </td>
						</tr>
						
						
						<th colspan="2"><input type="submit" style="height:35px;width:120px" onClick="return validation()" value="Apply"></th>
						</table>
</form>	

				</div>
</div>
			
			<!-- end of main -->
			
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer">
				<div class="footer-nav">
					<ul>
				
				<ul>
			
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
		<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>information system  Graduate class of 2007 E.C. </p></center>
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