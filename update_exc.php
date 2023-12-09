
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
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
				<ul>
					<li class=""><a href="index.php">Home</a></li>
					
					<li><a href="aplayform.php">Apply</a></li>
					<li><a href="About.php">About</a></li>
					<li><a href="housesinfor.php">gallery</a></li>
					<li><a href="feedbackinfo.php">feedback</a></li>
					<li><a href="Advertising.php">Advertising</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="Help.php">Help</a></li>
					</li>
					
				</ul>
			
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
				<ul>
					<li class=""><a href="kebeleAdmin.php">Admin</a></li>
					<li class=""><a href="resident.php">Add Resident</a></li>
					<li><a href="displayresident.php">Display Resident</a></li>
					<li><a href="deleteResident.php">Delete resident</a></li>
					<li><a href="updatForm.php">Update resident</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
				<div class="featured">
<?php
		
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="gr"; // Database name 
		$tbl_name="resident"; // Table name 
		$FirstName=$_POST['FirstName'];
		$MiddleName=$_POST['MiddleName'];
		$LastName=$_POST['LastName'];
		$PhysicalStatus=$_POST['PhysicalStatus'];
		$Kebele=$_POST['Kebele'];
		$Phone=$_POST['Phone'];
		$Mobile=$_POST['Mobile'];
		$Email=$_POST['Email'];
		$HouseNumber=$_POST['HouseNumber'];
		$Nationality=$_POST['Nationality'];
		$MartialStatus=$_POST['MartialStatus'];
		$id = $_POST['id'];
		// update data in mysql database 
		
		$sql=mysql_query("UPDATE resident SET firstName='$FirstName', middlename='$MiddleName', lastname='$LastName',
			Moblie='$Mobile', email='$Email',PhysicalStatus='$PhysicalStatus',
				  Kebele='$Kebele', Phone='$Phone', HouseNumber='$HouseNumber',
				  Nationality='$Nationality', MartialStatus='$MartialStatus'  WHERE ResidentId='$id' ");
				
			if($sql){
			echo '<meta content="2;displayresident.php" http-equiv="refresh"/>';
			echo "<img src='images/tick.png' height=20 width=20 align=center/> Update Successful!";
			//header('Location: displayresident.php');
			}
		else {
		echo "ERROR WHILE UPDATING!";
		}
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
