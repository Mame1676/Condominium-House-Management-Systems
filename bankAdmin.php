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
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMNET SYSTEM </title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
			<!-- search -->
				<div class="search">
				
				</div>
				<!-- end of search -->
				<!-- navigaation -->
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
				<ul>
					<li class=""><a href="bankAdmin.php">Bank Admin</a></li>
					<li><a href="payment.php">Add payment</a></li>
					<li><a href="displaypayment.php">Display payment</a></li>
					<li><a href="updatepayment.php">Update payment</a></li>
					<li><a href="deletepayment.php">Delete Payment</a></li>
					<li><a href="login.php">Log out</a>
					</li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
					<div class="featured">
			</div>
			<!-- main -->
			<div class="main">
			<!-- navigaation -->
			<center><h3><b>Bank addminstrator page.</b></h3></center>
			<nav id="navigation">
				
			
				<div class="cl">&nbsp;</div>
			</nav>
				<div class="featured">
		<section class="cols">
					<div class="col">
				
					</div>

					<div class="col">
						<h3></h3>
						<img src="css/images/index8.jpg" alt="" class="left"/>
						<h5> </h5>
						<div class="cl">&nbsp;</div>
						<p><br /></p>
					</div>

					<div class="col">
				
						</ul>
					</div>
					<div class="col">
						<h3>Services given By bank  adminstration</h3>
						<ul>
					<li class="active">Registers Residents</li>
					<li>Updates Resident Information</li>
					<li>Deletes Resident Information</li>
					<li>Views Resident information</li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
		
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
			<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span> information system Graduate class of 2007 E.C.</p></center>
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