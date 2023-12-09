
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
	<title>HOSSANA CITY CONDOMINUM HOUSE MANAGMENT SYSTEM </title>
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
				<h1 id="logo"><a href="">DEBREBERHAN CONDOMINUM HOUSE MANAGMNET SYSTEM</a></h1>
				

			</header>
			<!-- end of header -->
			<!-- navigaation -->
			
		
			
				<div class="cl">&nbsp;</div>
			</nav>
					<div class="featured">
			</div>
		
   <div class="main">
   <!-- navigaation -->
   <i style="padding-left:60em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|</i>
			<center><h3><b>Display Payment Information Page.</b></h3></center>
			<nav id="navigation">
				<ul>
				<li class=""><a href="index.php">Home</a></li>
					<li class=""><a href="bankAdmin.php">Bank Admin</a></li>
					<li><a href="payment.php">Add payment</a></li>
					<li><a href="displaypayment.php">Display payment</a></li>
					<li><a href="updatepayment.php">Update payment</a></li>
					<li><a href="deletepayment.php">Delete Payment</a></li>
					
					</li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
						<div class="featured">
		<section class="cols">
					<div class="col">
				
					</div>

					<div class="col">
						<h3></h3>
						<!--<img src="css/images/SAM_7893.JPG" alt="" class="left"/>-->
						<h5> </h5>
						<div class="cl">&nbsp;</div>
						<p><br /></p>
					</div>

					<div class="col">
				
						</ul>
					</div>
					<div class="col">
						
					
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
		
				</div>
				</div>
			
<div class="left">
<?php

$query = "SELECT * FROM payment";
$result = mysql_query($query) or die(mysql_error()); 

print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"white\">
	<th colspan=5> List of payers for condominium house .</th>
<tr> 
<td width=100>payment Type</td> 
<td width=100>Amount</td> 
<td width=100>Date </td> 
<td width=100>Prepayment</td> 
<td width=100>Acount Number</td> 
<td width=100>Bank Name</td> 
<td width=100>TTNumber</td> 
<td width=100>Winner Id</td> 
</tr>"; 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['PaymentType'] . "</td>"; 
print "<td>" . $row['Amount'] . "</td>"; 
print "<td>" . $row['Dates'] . "</td>";
print "<td>" . $row['PrePayment'] . "</td>";
print "<td>" . $row['AcountNumber'] . "</td>";
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
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer">
					<div class="featured">
			</div>
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