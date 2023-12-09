<?php
include("connection.php");
session_start();
if( !$_SESSION['ResidentId'])
{
header('location: login.php');
}

?>
<?php
$user_id=$_SESSION['ResidentId'];

?>

<?php
include("connection.php");
$user_id=$_SESSION['ResidentId'];


$i = mysql_query("select * from resident where ResidentId='$user_id'")or die(mysql_error);
$row1=mysql_fetch_array($i);

$id = $row1['ResidentId'];
?>

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
					<li class=""><a href="residentLog.php">Home</a></li>
					
					<li><a href="Applicant.php">Apply</a></li>
					</ul><ul>
			
					
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
					<div class="featured">
			</div>
			<!-- main -->
			<div class="main">
			<!-- navigaation -->
			<i style="padding-left:62em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a></i>
			<center><h3><b>Well Come to your application account </b></h3></center>
			
			<?php
			
			$s = mysql_query("SELECT * FROM applicant WHERE ResidentId='$id'");
			$row2=mysql_fetch_array($s);
			$status = $row2['win'];
			
			if($status == 'yes')
			{
				echo '<img src="images/win.jpg" ';
				echo '<h2><b><font face="monotype corsiva" size=5>Congratulation You Win the Condominium House!</font></b></h2>';
			}
			
			?>

				<div class="featured">
		<section class="cols">
					<div class="col">
				
					</div>

					<div class="col">
						<h3></h3>
						<h5> </h5>
						<div class="cl">&nbsp;</div>
						<p><br /></p>
					</div>

					<div class="col">
				
						</ul>
					</div>
					<div class="col">
				
						<h3>requirment that must be fulfill for filling the registrtaion form  </h3>
						<ul>
					<li class="active">the applicant personal information  must be registered in the kebele adminstrtaor</li>
					<li>all the equired feild in the application form must be filled </li>
					<li>we are allowed to apply only once </li>
					<li>if we need to know our winning status we only need to login to our account to get the notification</li>
					<li>for securing our account it is recommended that change your password and user name after the first login </li>
					<li>if the apply button in the top is not working it means you are already applied </li>
					
					
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