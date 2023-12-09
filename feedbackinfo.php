
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
<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
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

					<div class="arrs">
						<a href="#" class="prev-arr"></a>
						<a href="#" class="next-arr"></a>
					</div>

				<!-- end of slider -->

				
				<!-- end of thumbs -->
			</div>

			<center> 
  &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp <table border=""  cellpadding="20" cellspacing="0"  style=""  id="AutoNumber2" >
    <tr>
      <td width="25%" valign="top" style="border-left-style: solid; border-left-width: 1; border-right-style: none;
       border-right-width: medium; border-top-style: ; border-top-width: ; border-bottom-style: ; border-bottom-width: ">
      <p style="margin-top: 0; margin-bottom: 0">

      <font face="Arial" size="2" color="brown"> <marquee direction="down" scrollamount="1"> PLEASE LEAVE YOUR COMMENT </marquee></font></p>


<form action='feedbackinfo.php' method='POST' name="myForm"  onsubmit='return formValidation()'> 

   <br>
<font face="Jokerman" size="3.5"color="brown">
<br>NAME: &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp<input type="text" name="ecom" value="" id="ecom"><br>&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp COMMENT HERE &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp <textarea name="com"cols="40"rows="10" id="lol"></textarea>&nbsp&nbsp&nbsp <br>
 &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp<input type="submit"value="Send" name="send" Onclick="return validateForm(this.form);"/>
<input type="submit"value="Cancel"><br>



</td>
   <?php

 if(isset($_POST['send']))
 {
   $ecom=$_POST['ecom'];
   $com=$_POST['com'];
   $query = "INSERT INTO comment(email,comment)VALUES('{$ecom}','{$com}');";
  
   $result_set=mysql_query($query);
if(!$result_set){
echo"<script>alert('Comment Not Send!')</script>";
}
 
else{
echo"<script>alert('Comment Successfully Send!')</script>";
}

}
?>         

<td width="100%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 
0; border-top-style: solid; border-top-width: 0; border-bottom-style: solid; border-bottom-width: 0">
<br>
<font face="jokerman" size="4" color="brown"> <B>OUR ADDRESS</B></p></font><br>
<p  align="left"> <font face="Arial" size="3" color="black"><b><i>  MAIN ADDRESS OF DEBRE BERHAN CONDOMINUM HOUSING DEBVELOPMENT OFFICE  </b></i><br><br>
	
P.O.Box:24 Debre Birhan, Ethiopia<BR>	
Tel:251-6-81 22 00<BR>	
Fax:251-6-81 24 61<BR>
P.O.Box:24 Debre Birhan, Ethiopia	
<p  align="left"> <font face="Arial" size="3" color="black"><b><i> CELL CENTER OF ETHIOPIAN  CONDOMINUM HOUSE DEVELOPMENT AGENCEY </b></i><br><br>
Location	Addis Ababa, Ethiopia<br>
Phone 	+251 11 5517044<br>
Phone 2 	+251 11 515 6301<br>
Fax 	+251 11 5513080<br>
Mobile 	+251 91 1511585<br>
</p>

       
    </tr>
  </table>
  </center>
					<div class="cl">&nbsp;</div>
				</section>

				<section class="entries">
					<div class="entry">
						<div class="entry-inner">
							
							  <div class="cnt">
							</div>
					  </div>
						
					</div>
				  <div class="entry">
					
					<div class="entry">
						
<div class="testimonials">					
					  </div>
						
						<div class="partners">
					<!--				<h3>Our Partners</h3>
				 <img src="css/images/partners-img.png" alt="" />-->
						</div>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
			</div>
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer">
				<div class="footer-nav">
			
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