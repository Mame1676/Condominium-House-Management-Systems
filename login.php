
 <?PHP

session_start();

    //Unset the variables stored in session
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
<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	





<link href="css/styless.css" rel='stylesheet' type='text/css' />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>






	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script language="javascript">
        var flag=0;
		
		function usertype()
        {
            user=loginform.UserType.value;
            if(user=="0")
            {
                document.getElementById("error3").innerHTML="select user type";
				 document.getElementById("UserType").style.borderColor='red';
                flag=1;
            }
        }   
		
		
       

        function check(form)
        {
            flag=0;
			usertype();
          
			
            if(flag==1)
                return false;
            else
                return true;
        }

    </script>
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
		

			<!-- main -->
			<div class="main">

				<div class="featured">
				
				</div>

				<section class="cols">
					<div class="col">
				
					</div>

					

					<div class="col">
						






			
						</ul>
					</div>
					
					<div class="login-form">
		<h2>  <center> LOGIN PAGE  </center> </h2>
			<div class="form-info">
					<form action="log.php" method="POST" name="loginform">

						
<br>
							<input type="text" class="email" name="UserName" placeholder="user name" required=""/>
							<input type="password" class="password" name="Password" placeholder="Password" required=""/>
							
						<ul class="login-buttons">
							<li><input type="submit"   name="submit" value="LOGIN"/></li>&nbsp &nbsp &nbsp
						
							
							<div class="clear"> </div>
						</ul>
								
					</form>
			</div>
	</div>






					<div class="cl">&nbsp;</div>
				</section>

				<section class="entries">
					<div class="entry">
						
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
