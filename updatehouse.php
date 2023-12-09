 <?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
$user_id=$_SESSION['user_id'];
?>
<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
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
				    document.getElementById("blockno_error").innerHTML="";
					document.getElementById("siteid_error").innerHTML="";
					 document.getElementById("servicetype_error").innerHTML="";
				    document.getElementById("housetype_error").innerHTML="";
				    document.getElementById("floortype_error").innerHTML="";
					document.getElementById("reserved_error").innerHTML="";
			
					var BlockNo=document.getElementById("BlockNo").value;
					var SiteId=document.getElementById("SiteId").value;
					var HouseType=document.getElementById("HouseType").value;
					var ServiceType=document.getElementById("ServiceType").value;
		
					var FloorType=document.getElementById("FloorType").value;
					var reserved=document.getElementById("reserved").value;
					var flag=true;
					var focus="";

//-----------------------------city validation---------------------------------
					var val = document.getElementById('BlockNo').value;
					if(val=="0")
					{
						document.getElementById("blockno_error").innerHTML="Please enter Block Number.";
						document.getElementById("BlockNo").style.borderColor='red';
						if(focus=="")focus="BlockNo";
						flag=false;
					}
					else
						{
						document.getElementById("BlockNo").style.borderColor='green';
							if(focus=="")focus="BlockNo";
							flag=true;
						}

//-----------------------------service type  validation---------------------------------
						if(ServiceType=="0")
						{
							document.getElementById("servicetype_error").innerHTML="Please select Service Type.";
							document.getElementById("ServiceType").style.borderColor='red';
							if(focus=="")focus="ServiceType";
							flag=false;
						}
						else
						{
						document.getElementById("ServiceType").style.borderColor='green';
							if(focus=="")focus="ServiceType";
							flag=true;
						}
//-----------------------------House type  validation---------------------------------
						if(HouseType=="0")
						{
							document.getElementById("housetype_error").innerHTML="Please select House Type.";
							document.getElementById("HouseType").style.borderColor='red';
							if(focus=="")focus="HouseType";
							flag=false;
						}
						else
						{
						document.getElementById("HouseType").style.borderColor='green';
							if(focus=="")focus="HouseType";
							flag=true;
						}
//-----------------------------Site id type  validation---------------------------------
						if(SiteId=="0")
						{
							document.getElementById("siteid_error").innerHTML="Please select Site Id.";
							document.getElementById("SiteId").style.borderColor='red';
							if(focus=="")focus="SiteId";
							flag=false;
						}
						else
						{
						document.getElementById("SiteId").style.borderColor='green';
							if(focus=="")focus="SiteId";
							flag=true;
						}
						
//-----------------------------reservation type  validation---------------------------------
						if(reserved=="0")
						{
							document.getElementById("reserved_error").innerHTML="Please select reserve Type.";
							document.getElementById("reserved").style.borderColor='red';
							if(focus=="")focus="reserved";
							flag=false;
						}
						else
						{
						document.getElementById("reserved").style.borderColor='green';
							
							flag=true;
						}
						
//-----------------------------Floor type  validation---------------------------------
						if(FloorType=="0")
						{
							document.getElementById("floortype_error").innerHTML="Please select Floor Type.";
							document.getElementById("FloorType").style.borderColor='red';
							if(focus=="")focus="FloorType";
							flag=false;
						}
						else
						{
						document.getElementById("FloorType").style.borderColor='green';
							
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
			
			
			
			<!-- end of navigation -->

			<!-- main -->
			<div class="main">
		
				
				<div class="featured">
					
				</div>
					<nav id="navigationsub">
						<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>
				<center><h3><b>House Updation Page</b></h3></center>
				<ul><li class=""><a href="condominiumAdmin.php">Home</a></li>
					<li><a href="condominiumAdmin.php">Admin</a></li>
					<li class=""><a href="site.php">Add site</a></li>
					<li><a href="block.php">Add block</a></li>
					<li><a href="house.php">Add house</a></li>
					<li><a href="updatehouse.php">update</a></li>
					<li><a href="displayhouse.php">Display</a></li>
					<li><a href="Drawlottery.php">Draw</a></li>
					<li><a href="placement.php">Placement</a></li>
				
			
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->

				<section class="cols">
					<div class="col">
	
					</div>

					<div class="featured">
					<?php

	$query = "SELECT * FROM house ";
	$result = mysql_query($query) or die(mysql_error()); 

	print " 
	<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"white\">
		<th colspan=18> List of Houses</th>
	<tr> 
	<td width=100>Block No</td> 
	<td width=100>Site ID</td>
	<td width=100>House Type</td> 
	<td width=100>Floor Type</td> 
	<td width=100>Service Type</td> 
	<td width=100>House Number</td> 
	<td width=100>Reserved Status</td> 
	<td width=100>Update</td> 

	</tr>"; 

	while($row = mysql_fetch_array($result)) 
	{ 
	print "<tr>"; 

	print "<td>" . $row['BlockNo'] . "</td>";
	print "<td>" . $row['SiteId']."</td>";
	print "<td>" . $row['HouseType'] . "</td>"; 
	print "<td>" . $row['FloorType'] . "</td>";
	print "<td>" . $row['ServiceType'] . "</td>";
	print "<td>" . $row['HouseNumber'] . "</td>";
	$x = $row['HouseNumber'];
	print "<td>" . $row['reserved'] . "</td>";
	print "<td align=center><a href='houseUpdate.php?id=$x'><img src='images/edit.png' height=20 width=20/></a></td>";?>
	<?php


	print "</tr>"; 
	} 
	print "</table>"; 
	print "</br>"; 
	print "</br>"; 
	print "</br>"; 
	print "</br>"; 
	?>
			


				
					
					</div>

					<div class="cl">&nbsp;</div>
				</section>

				<section class="entries">
					<div class="entry">
						
					
						
					
					</div>
					
					<div class="entry">
						
					</div>
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
