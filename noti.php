<? php
session_start();
/*if( !$_SESSION['SESS_ResidentId'])
{
header('location: aplayform.php');*/
}
?>
<?php
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM </title>
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
				 
				    document.getElementById("residentid_error").innerHTML="";
					  document.getElementById("lastname_error").innerHTML="";
					var ResidentId=document.getElementById("ResidentId").value;
					var LastName=document.getElementById("LastName").value;
					var flag=true;
					var focus="";


//-----------------------------Resident Id validation------------------------------------------
							var val=document.getElementById("ResidentId").value;
							if(val=="0")
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
					<li class=""><a href="Applicant.php">Back to main</a></li>
				
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			
				<!-- search -->
				<div class="search">
					
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</nav>
		
			<!-- main -->
		  <div class="main">

		  
		  
		  <!-- winning stutus  -->
		  
	
<?php

$query = "SELECT * FROM applicant";
$result = mysql_query($query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
	<th colspan=5> List of applicant .</th>
<tr> 
<td width=100>resident id:</td> 
<td width=100>house type:</td> 
<td width=100>winning status :</td> 

</tr>"; 


while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['ResidentId'] . "</td>"; 
print "<td>" . $row['HouseType'] . "</td>"; 
print "<td>" . $row['win'] . "</td>";
print "</tr>"; 
} 

?>

  
		  <!-- winning stutus end  -->
		  
</div>

<section class="entries">

					
					<div class="cl">&nbsp;</div>
				</section>
			</div>
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer">
				<div class="footer-nav">
					<ul>
				
					</li>
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
	
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