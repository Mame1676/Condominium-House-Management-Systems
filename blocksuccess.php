
<?php
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMNET SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
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
			  document.getElementById("blocktype_error").innerHTML="";
			  document.getElementById("residentid_error").innerHTML="";
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var ResidentId=document.getElementById("ResidentId").value;
				var BlockType=document.getElementById("BlockType").value;
				var flag=true;
				var focus="";
//-----------------------------Block Type  validation---------------------------------
						if(BlockType=="0")
						{
							document.getElementById("blocktype_error").innerHTML="Please select Block Type.";
							document.getElementById("BlockType").style.borderColor='red';
							if(focus=="")focus="BlockType";
							flag=false;
						}
						 else 
						{
				
						document.getElementById("BlockType").style.borderColor='green';
						flag=true;
						 }

//-----------------------------Resident Id validation------------------------------------------
							var val=document.getElementById("ResidentId").value;
							if(val=="0")
							{
								document.getElementById("residentid_error").innerHTML="Please enter Resident Id Number.";
								document.getElementById("ResidentId").style.borderColor='red';
								if(focus=="")focus="ResidentId";
								flag=false;
							}
							
							else 
							{
								
								document.getElementById("ResidentId").style.borderColor='green';
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
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
				<ul>
					<li class=""><a href="index.php">Home</a></li>
				
					<li><a href="aplayform.php">Apply</a></li>
					<li><a href="About.php">About</a></li>
					<li><a href="housesinfor.php">gallery</a></li>
					<li><a href="feedbackinfo.php">feedback</a></li>
		
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
				<center><h3><b>Block Registration Page</b></h3></center>
				<ul>
					<li><a href="condominiumAdmin.php">Admin</a></li>
					<li class=""><a href="site.php">Add site</a></li>
					<li><a href="block.php">Add block</a></li>
					<li><a href="house.php">Add house</a></li>
					<li><a href="updatehouse.php">update</a></li>
					<li><a href="displayhouse.php">Display</a></li>
					<li><a href="Drawlottery.php">Draw</a></li>
					<li><a href="placement.php">Placement</a></li>
					<li><a href="notification.php">Notification</a></li>
					<li><a href="signup.php">signup</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->

				<section class="cols">
					<div class="col">
	
					</div>

					<div class="featured">
						<form  method="post" action="blockinsertion.php" style="border:outset" name="form1">
<table  height="236" width="556" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
<tr>
	<th height="43" colspan=2 style="border-bottom:1px green solid;padding-top:10px;padding-bottom:10px ">&nbsp;</th>
</tr>

<tr>
	<td width="134" height="62" class="td">Block Type:-</td>
	<td width="416" class="td"><select name="BlockType"  class="input" id="BlockType" >    
	  						  <option value='0'>Select</option> 
							   <option value='Ground'>Ground</option>       
                              <option value='G+1'>G+1</option>
                              <option value='G+2'>G+2</option>
                              <option value='G+3'>G+3</option>
                              <option value='G+4'>G+4</option>
          
                            </select>
	<span id="blocktype_error" class="error"></span>
	</td>
</tr>
<tr>
	<td height="73" class="td">Site Id :-</td>
	<td class="td"><select name="SiteId" class="input" id="SiteId">
	  <option value="0">--Select Site Id--</option>
	  <?php
	  include('connection.php');
	  $query=mysql_query("select SiteId from Site");
	   while($row=mysql_fetch_array($query))
	   {
	   echo "<option>".$row['SiteId']."</option>";
	   }
	  ?>
	  </select>
	<span id="residentid_error" class="error"></span>
	</td>
</tr>
<tr><td>
<font color="green"><span id="residentid_error" class="error">Inserted succefully</span></font></td></tr>

<th colspan="2"><input type="submit" style="height:35px;width:120px" value="Register Block" onFocus=="return validation()"></th>
</table>
</form>	
					</div>

						<div class="col">
						</ul>
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
