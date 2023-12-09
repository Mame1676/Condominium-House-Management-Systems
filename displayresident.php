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
<?php
include("connection.php");?>

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
					<h1 id="logo"><a href=""></a></h1>
				

			</header>
			<!-- end of header -->
				<!-- navigaation -->
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			
			<div class="featured">
			</div>	
   <div class="main">
   <!-- navigaation -->
   <i style="padding-left:62em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a></i>
			<center><h3><b> Display Registered Resident Page</b></h3></center>
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
				<ul>
					<li class=""><a href="kebeleAdmin.php">home</a></li>
					<li class=""><a href="resident.php">Add Resident</a></li>
					<li><a href="displayresident.php">Display Resident</a></li>
				
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
<div class="left">
	<?php

	$query = "SELECT * FROM resident";
	$result = mysql_query($query) or die(mysql_error()); 

	print " 
	<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"white\">
		<th colspan=18> List of Residents That are found in debereberhan city .</th>
	<tr> 
	<td width=100>Resident Id</td> 
	<td>Name</td>
	<td width=100>Gender</td> 
	<td width=100>Physical Status</td> 
	<td width=100>Marital Status</td> 
	<td width=100>Registration <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date</td> 
	<td width=100>Update</td> 
	<td width=100>Delete</td> 

	</tr>"; 

	while($row = mysql_fetch_array($result)) 
	{ 
	print "<tr>"; 

	print "<td>" . $row['ResidentId'] . "</td>";
	print "<td>" . $row['firstName'].' '.$row['middlename'].' '.$row['lastname']. "</td>";
	$w = $row['firstName'].' '.$row['lastname'];
	print "<td>" . $row['gender'] . "</td>"; 
	print "<td>" . $row['PhysicalStatus'] . "</td>";
	print "<td>" . $row['MartialStatus'] . "</td>";
	print "<td>" . $row['RDate'] . "</td>";
	$x=$row['ResidentId'];
	print "<td align=center><a href='updatForm.php?id=$x'><img src='images/edit.png' height=20 width=20/></a></td>";?>
	<td align="center"><a href="deleteResident.php?id=<?php echo $x;?>" onclick="return confirm('Are you sure you want to delete (<?php echo $w;?>)');"><img src="images/delete.png" height='20' width='20'/></a></td>
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
