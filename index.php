
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
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>



<link rel="stylesheet" href="style/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="style/jquery-foxiblob-0.1.css" />




<script type="text/javascript">
var slideShowSpeed = 3000;
var crossFadeDuration =15;
var Pic = new Array();
Pic[0] = 'images/financial_07.PNG'
Pic[1] = 'images/W.jpg'
Pic[2] = 'images/WW.jpg'
Pic[3] = 'images/U.jpg'
Pic[4] = 'images/I.JPG'



// do not edit anything below this line
// do not edit anything below this line
var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}
function runSlideShow() {
if (document.all) {
document.images.SlideShow.style.filter="blendTrans(duration=7)";
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply();
}
document.images.SlideShow.src = preLoad[j].src;
if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}
j = j + 1;
if (j > (p - 1)) j = 0;
t = setTimeout('runSlideShow()', slideShowSpeed);
}
window.onload=runSlideShow;

</script>





	
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
					
					
					<li><a href="About.php">About</a></li>
					<li><a href="housesinfor.php">Gallery</a></li>
					<li><a href="feedbackinfo.php">Contact us</a></li>
					
					<li><a href="login.php">Login</a></li>
					<li><a href="Help.php">Help</a></li>
					</li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			
			<!-- slider-holder -->
			<div class="slider-holder">
				
				<!-- slider -->
				<div class="slider">
					<div class="socials">
					
						<a href="https://www.facebook.com/" class="facebook-ico">facebook-ico</a>
						<a href="https://twitter.com/" class="twitter-ico">twitter-ico</a>
						<a href="http://www.skype.com/en/" class="skype-ico">skype-ico</a>
						
						<div class="cl">&nbsp;</div>
					</div>
					
				<!-- end of slider -->

				<!-- thumbs -->
				
				
				<!-- end of thumbs -->
			</div>

			<!-- main -->
			<div class="main">

				
				<p> <img src="images/financial_07.PNG" name='SlideShow' width="946" height="200"></p>
  <div id="container">
    <div id="top">
      <div id="main">
        <center><h3><strong>WELCOME TO OUR SITE!</strong></h3></center>
        <h3>The office has the following missions

 </h3>
        <p>	Provision of affordable housing for low and medium income of the city inhabitant and ensuring resident security.
<p>	Improve the leaving standard of Debreberhan city resident by expanding employment creation.</p>
<p>	Provide premium condominium and commercial units that will be result to enhanced value of the client’s lives resources and overall business.</p>
<p>Improving small industries to big industries.</p>
        

						<h5>There are around 4 sites which has condominium houses. </h5>
						<p>some of the sites are like: <br /></p>
						<ul>
						<li> 08 site found around blanket factory</li>
						<li> Ajip site  found around  semayawi hotel</li>
						<li> Begtera site found around melekt acadamy </li>
						<li> Tebase site  found around university </li>
						</ul>
      </div>
     
					
					
      <div id="sidebar" class="rounded">
        <h2>News &amp; Events</h2>
        <marquee direction="up" scrollamount="2">
        <p class="img"><img src="images/financial_11.jpg" alt="" width="265" height="2"/></p>
        
<!-- home post -->

<table height="250">
        	
  <?php
			
			$reg=mysql_query("select * from news");
			

$result = mysql_query("SELECT * FROM news");




while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['news'];
  print ("<tr>");
  print ("<td  >" . $row['news'] . "</td>");
  

  print ("</tr>");
  }
print( "</table>");

?>
</td>
</tr>
</table>
</marquee>

<!-- end home post-->




      </div></div>

					<div class="cl">&nbsp;</div>
				</div>

				<BR><BR><BR><BR>
	<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>Information system graduate class of 2007 e.c
		<br>&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp P.O.Box:24 Debre Birhan, Ethiopia <BR>>&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Tel:251-6-81 22 00 </p></center></font>
	
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