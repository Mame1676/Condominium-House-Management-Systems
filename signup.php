 <?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
$user_id=$_SESSION['user_id'];
?>
<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/mycss.css" type="text/css" media="all" />
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	



<script type='text/javascript'>
	function chick()
{

if (!form1.resID.value.match(/^[0-9]+$/) && form1.resID.value !="")
               {
                    form1.resID.value="";
                    form1.resID.focus(); 
                    alert("Please Enter only Number for Resident ID");
               }
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
					<h1 id="logo"><a href="">		</a></h1>
				

		  </header>
			<!-- end of header -->			
			<!-- navigaation -->
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<!-- main -->
			<div class="main">
			<div class="featured">
					
			  </div>
			<nav id="navigationsub">
				<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>
				<center><h3><b>User Registration Page</b></h3></center>
				<ul>
				<li class=""><a href="index.php">Home</a></li>
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
					<div class="featured">
			<center ><form  action="signupinsertion.php"  name="form1" method="post" onClick="return check()">
<table   width="707" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="2">

</br>
<tr><td>&nbsp;</td></tr>
<tr>
	<td class="td">Resident ID :</td>
	<td class="td"><input type="text" name="resID" class="input" id="Resident_id" onKeyUp="chick()">
	<font color="red"><span id="mobile_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">User Name :</td>
	<td class="td"><input type="text" name="UserName" class="input" id="UserName">
	<font color="red"><span id="username_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">User Type:</td>
	<td class="td"><select name="UserType"  class="input" id="UserType">    
	  						  <option selected>..select..</option>        
                              <option value='condominium'>condominium</option>
                              <option value='kebele'>kebele</option>
                              <option value='bank'>bank </option>
                            </select>
	<font color="red"><span id="usertype_error" class="error"></span></font>
	</td>
</tr></br>
<tr>
	<td class="td">Password :</td>
	<td class="td"><input type="password" name="Password" class="input" id="Password" maxlength="12">
	<font color="red"><span id="password_error" class="error"></span></font>
	</td>
</tr></br>
<tr><td>&nbsp;</td></tr>

<tr><label id="success" class="input"></label></tr>
<th height="35" colspan="2"><input type="submit" style="height:35px;width:120px" onClick="return validation()" value="Submit"></th>
<tr><td>&nbsp;</td></tr>

</table>
</form>	
</center>	
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
	<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>Information system  Graduate class of 2007 E.C.</p></center></font>
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