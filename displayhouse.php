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
	<link rel="stylesheet" href="css/mycss.css" type="text/css" media="all" />
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	
	
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
   <div class="main">
<div class="main">
				<nav id="navigationsub">
<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>
				<center><h3><b>Display Condominium house information Page</b></h3></center>
				<ul>	<li class=""><a href="condominiumAdmin.php">Home</a></li>
				
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
<?php

$query = "SELECT * FROM site";
$result = mysql_query($query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
	<th colspan=5> List of Sites That have Condominium houses.</th>
<tr> 
<td width=100>Site id:</td> 
<td width=100>Site Name:</td> 
<td width=100>City :</td> 
<td width=100>Wereda :</td> 
<td width=100>Kebele :</td> 
</tr>"; 


while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['SiteId'] . "</td>"; 
print "<td>" . $row['SiteName'] . "</td>"; 
print "<td>" . $row['City'] . "</td>";
print "<td>" . $row['Wereda'] . "</td>";
print "<td>" . $row['Kebele'] . "</td>";
print "</tr>"; 
} 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
?>
<?php
$query = "SELECT * FROM block";
$result = mysql_query($query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
	<th colspan=5> List of Blocks That have  houses.</th>
<tr> 
<td width=100>Block Number:</td> 
<td width=100>Block Type:</td> 
<td width=100>Site Id:</td> 
</tr>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['BlockNo'] . "</td>"; 
print "<td>" . $row['BlockType'] . "</td>"; 
print "<td>" . $row['SiteId'] . "</td>";

print "</tr>"; 
} 
print "</table>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
?>


<?php

$query = "SELECT * FROM applicant";
$result = mysql_query($query) or die(mysql_error()); 

print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
	<th colspan=5> list of applicant information .</th>
<tr> 
<td width=100>ApplicantId</td> 
<td width=100>HouseType</td> 
<td width=100>ResidentId</td> 
<td width=100>Service Type:</td> 
<td width=100>SiteId</td> 

<td width=100>PhysicalStatus</td> 
<td width=100>Gender</td> 
<td width=100>Email</td> 
<td width=100>MartialStatus</td>  
<td width=100>win</td> 
</tr>"; 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['ApplicantId'] . "</td>"; 
print "<td>" . $row['HouseType'] . "</td>"; 
print "<td>" . $row['ResidentId'] . "</td>";
print "<td>" . $row['ServiceType'] . "</td>";
print "<td>" . $row['SiteId'] . "</td>";
print "<td>" . $row['win'] . "</td>";


print "</tr>"; 
} 
print "</table>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
?>


<?php

$query = "SELECT * FROM house";
$result = mysql_query($query) or die(mysql_error()); 

print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
	<th colspan=5> List of houses That are found in our sites.</th>
<tr> 
<td width=100>Block Number:</td> 
<td width=100>House Type:</td> 
<td width=100>Floor Type:</td> 
<td width=100>Service Type:</td> 
<td width=100>House Number:</td> 
<td width=100>resreved:</td> 
</tr>"; 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['BlockNo'] . "</td>"; 
print "<td>" . $row['HouseType'] . "</td>"; 
print "<td>" . $row['FloorType'] . "</td>";
print "<td>" . $row['ServiceType'] . "</td>";
print "<td>" . $row['HouseNumber'] . "</td>";
print "<td>" . $row['reserved'] . "</td>";

print "</tr>"; 
} 
print "</table>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
?>
<?php
$query = "SELECT * FROM winner";
$result = mysql_query($query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
	<th colspan=5> List of winner of the conndominium house.</th>
<tr> 
<td width=100>Winner Id:</td> 
<td width=100>placed:</td> 
</tr>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['WinnerId'] . "</td>"; 
print "<td>" . $row['placed'] . "</td>";
print "</tr>"; 
} 
print "</table>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
?>





<div class="left">
<?php

$query = "SELECT * FROM payment";
$result = mysql_query($query) or die(mysql_error()); 

print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"white\">
	<th colspan=5> List of payers for condominium house .</th>
<tr> 
<td width=100>payment Type</td> 

<td width=100>Date </td> 
<td width=100>Prepayment</td> 
 
<td width=100>Bank Name</td> 
<td width=100>TTNumber</td> 
<td width=100>Winner Id</td> 
</tr>"; 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['PaymentType'] . "</td>"; 
 
print "<td>" . $row['Dates'] . "</td>";
print "<td>" . $row['PrePayment'] . "</td>";

print "<td>" . $row['BankName'] . "</td>";
print "<td>" . $row['TTNumber'] . "</td>";
print "<td>" . $row['WinnerId'] . "</td>";
print "</tr>"; 
} 
print "</table>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
print "</br>"; 
?>

</div>
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
