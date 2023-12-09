
<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
?>
<?php
include("connection.php");
?>
<!DOCTYPE html>
<html >
<head>
	<meta />
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
				<div class="main">
				<div class="featured">
				</div>
			<nav id="navigationsub">
				<center><h3><b>Notification Page</b></h3></center>
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
			<!-- search -->
				<div class="search">
				</div>
				<!-- end of search -->
	<?php
	$host_name = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "condominium";

	if(isset($_POST['submit'])){
	$from = 'ybrah2012@gmail.com';
	$subject = $_POST['subject'];
	$main = $_POST['main'];
	$output_form = false;
	
	if(empty($subject) &&(empty($main))){
	echo '<font color="red">'.'You forgot the subject and body of the text. <br />'.'</font>';
	$output_form = true;
	}
	
	if(empty($subject) &&(!empty($main))){
	echo '<font color="red">'.'You forgot the subject. <br />'.'</font>';
	$output_form = true;
	}
	
	if(!empty($subject) && empty($main)) {
	echo 'You forgot the body of the text. <br />';
	$output_form = true;
	}
}
else{
$subject = '';
$main = '';
$output_form = true;
}
	
	if((!empty($subject)) && (!empty($main))){
	//$dbc = mysql_connect($host_name, $user_name, $password, $db_name) or die("Error connecting MySql Server");
	$q = mysql_query("SELECT * FROM winner where placed='yes'");
	while($row = mysql_fetch_array($q)){
	$WinnerId = $row['WinnerId'];
	//$last_name = $row['last_name'];
	$msg = "Dear  $WinnerId , \n $main";
	$to = $row['Email'];

	mail($to, $subject, $msg, 'From:' . $from );

	echo 'Email sent to: ' . $to . '<br />' ;
	}
	
	}
	if($output_form){
	?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="subject">Subject of E-mail</label><br/>
	<input type="text" id="subject" name="subject" size="60" value="<?php echo $subject;?>"/><br/><br/>
	<label for="main">Body of E-mail</label><br/>
	<textarea id="main" name="main" rows="8" cols="60" ><?php echo $main; ?></textarea><br/><br/>
	<input type="submit" name="submit" value="Send"><br/><br/>
	</form>
	<?php
	}
	?>
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
		<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>information system  Graduate class of 2006 E.C.</p></center></font>
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
