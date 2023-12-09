
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
	<script style="text/javascript">
 function num(evt)
 {
   var charCode = (evt.which) ? evt.which : evt.keyCode;
 
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
 
 return true;
 }
 function validation()
 {
			  document.getElementById("acountnumber_error").innerHTML="";
		
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				
				var AcountNumber=document.getElementById("AcountNumber").value;
				
				
				
				var flag=true;
				var focus="";
				
//-----------------------------Acount number validation---------------------------------
			var val = document.getElementById('AcountNumber').value;
			if(val=="")
				{
				document.getElementById("acountnumber_error").innerHTML=" * Please enter Acount Number.";
				document.getElementById("AcountNumber").style.borderColor='red';
				focus="ResidentId";
				flag=false;
				}   
				 else if(!val.match(/^[0-9]+$/)) 
					{
					document.getElementById("acountnumber_error").innerHTML=" *  Please enter number only.";
					document.getElementById("AcountNumber").style.borderColor='red';
					focus="AcountNumber";
					flag=false;
					 }
					  else if(val.match(/^[0-9]+$/)) 
					{
			
					document.getElementById("AcountNumber").style.borderColor='green';
				
					flag=true;
					 }
					 
							if(focus!="")
								document.getElementById(focus).focus();
							return flag;
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
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<!-- main -->
			<div class="featured">
			</div>
		  <div class="main">
		   <!-- navigaation -->
			<center><h3><b>Delete  Payment Information Page.</b></h3></center>
			<nav id="navigation">
				<ul><li class=""><a href="index.php">Home</a></li>
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

				<div class="featured">
		<?php
			if(isset($_POST['delete']))
			{
			$AcountNumber =$_REQUEST['AcountNumber'];
				// sending query
				$sql=mysql_query("DELETE FROM payment WHERE AcountNumber = '$AcountNumber'")
				or die(mysql_error());  	
			$retval = mysql_query( $sql);
			if(! $retval )
			{
			 header("Location: deletefailpayment.php");
			}
			header("Location: deletesuccesspayment.php");
			mysql_close($conn);
			}
			else
			{
			?>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
				<table width="900" border="0" cellspacing="1" cellpadding="2">
				<tr>
				<td width="100">Acount Number</td>
				<td><input name="AcountNumber" type="text" id="AcountNumber" class="input" onKeyPress="return num(event)"><span id="acountnumber_error" class="error" ></span></td>
				</tr>
				<tr>
				<td width="100"> </td>
				<td> </td>
				</tr>
				<tr>
				<td width="100"> </td>
				<td>
				<input name="delete" type="submit" id="delete" value="Delete payment" onClick="return validation()">
				</td>
				</tr><font size="+1"color="#00CC66">delete payment successfuly</font>
				</table>
			</form>
				<?php
				}
				?>
				</div>
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
						<h3>Services given By bank adminstration</h3>
						<ul>
					<li class="active"><a href="#">Registers Residents </a></li>
					<li><a href="#">Updates Resident Information</a></li>
					<li><a href="#">Deletes Resident Information</a></li>
					<li><a href="#">Views Resident information</a></li>
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
					<div class="featured">
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