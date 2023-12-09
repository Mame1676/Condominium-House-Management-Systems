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
	<meta/>
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
					<h1 id="logo"><a href="">		</a></h1>
				

		  </header>
			<!-- end of header -->			
			<!-- navigaation -->
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
				<ul>
					<li class=""><a href="index.php">Home</a></li>
					<li><a href="adminstrator.php">Adminstartor</a></li>
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
			<!-- main -->
			<div class="main">
			<div class="featured">
					
			  </div>
			<nav id="navigationsub">
				<center><h3><b>User Registration Page</b></h3></center>
				<ul>
					<li class=""><a href="site.php">Add site</a></li>
					<li><a href="block.php">Add block</a></li>
					<li><a href="house.php">Add house</a></li>
					<li><a href="updatehouse.php">update</a></li>
					<li><a href="displayhouse.php">Display</a></li>
					<li><a href="Drawlottery.php">Draw</a></li>
					<li><a href="notification.php">Notification </a></li>
					<li><a href="signup.php">signup </a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->

				<section class="cols">
					<div class="col">
	
					</div>

					<div class="featured">
<?php 
	session_start();
	$_SESSION['signup']=array();
		
		$resID=$_POST['resID'];
		$UserName=$_POST['UserName'];
		$UserType=$_POST['UserType'];
		$Password1=$_POST['Password'];
		$Password=md5('$Password1');
		
if(empty($_POST))
{
	header("location:signup.php");
}
	
	$check = mysql_query("SELECT * FROM resident WHERE ResidentId = '$resID' ");
	if(!$check){
	echo "<img src='images/no.ico'/> There is no such resident ID...check your entry";
	echo '<meta content="2;signup.php" http-equiv="refresh"/>';
	exit();
	}
	else{
	 $q = mysql_query("insert into user_type values('','$resID','$UserName','$UserType','$Password')"); 
	
			
		if($q)
		{
		
		echo"<img src='images/tick.png'/> User Account Created Successfully!";
		echo '<meta content="2;signup.php" http-equiv="refresh"/>';
		exit();
	
		}
		else
		{
		header("location:signup.php");
		}
	}
 ?>
 
					</div>
				<div class="cl">&nbsp;</div>
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
