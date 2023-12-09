
<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
$user_id=$_SESSION['user_id'];
?>
<?php
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--<meta charset="utf-8" />-->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMNET SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
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
			
			
				<div class="cl"></div>
			</nav>
			<!-- end of navigation -->
			<!-- slider-holder -->
			<div class="slider-holder">
				
				

			<!-- main -->
			<div class="main">
				

				<!-- main -->
			<div class="main">

				<div class="featured">
					
					<a href="#" class=""></a>
				</div>
<nav id="navigation">
	<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>

				<center><h3><b>Condominium Adiminsration Page </b></h3></center>
				<ul>
					
					<li><a href="condominiumAdmin.php">Home</a></li>
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
					<div class="col">
						<h3>ABOUT CONDOMINUM ADMIN </h3>
						
						
						<div class="cl">&nbsp;</div>
						<ul>
						<li>Registers New houses</li> 
						<li>Draw Lottery</li> 
						<li>Perform house distribution. </li>
						<li>make a placement .</li>  
						<li>controlling payment status of the winner.</li> 
                         <li>sending news and new events </li> 
                         <li>observing comments sent by user of the system  </li>  												 
						
						
						</ul>
											</div>
<div class="col">



	<h3>News and event on home page</h3>
	<form action='condominiumAdmin.php' method='POST' name="myForm"> 
 
 
 
 <textarea name="com"cols="40"rows="5" id="lol"></textarea> <br>
<input type="submit"value="Send" name="send" >
<input type="submit"value="Cancel"><br>
</form>
<br>
<a href="comment view.php">view comment</a>
						<?php

 if(isset($_POST['send']))
 {
   $com=$_POST['com'];
   $query = "INSERT INTO news(news)VALUES('{$com}');";
  
   $result_set=mysql_query($query);
if(!$result_set){
echo"<script>alert('your news Not Send!')</script>";
}
 
else{
echo"<script>alert('News sSuccessfully uploaded!')</script>";
}

}
?>  
						
					</div>
					<div>
						
					</div>


				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
						
					</div>
					<div class="col">
	
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
				<section class="entries">
					<div class="entry">
						<h3></h3>
						<div class="entry-inner">
							
							<div class="cnt">
							</div>
						</div>
						
					</div>
					<div class="entry">
						
						
					</div>
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
