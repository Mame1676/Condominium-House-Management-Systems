
<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location:login.php');
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
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
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
				    document.getElementById("blockno_error").innerHTML="";
					document.getElementById("siteid_error").innerHTML="";
					 document.getElementById("servicetype_error").innerHTML="";
				    document.getElementById("housetype_error").innerHTML="";
				    document.getElementById("floortype_error").innerHTML="";
					document.getElementById("reserved_error").innerHTML="";
			
					var BlockNo=document.getElementById("BlockNo").value;
					var SiteId=document.getElementById("SiteId").value;
					var HouseType=document.getElementById("HouseType").value;
					var ServiceType=document.getElementById("ServiceType").value;
		
					var FloorType=document.getElementById("FloorType").value;
					var reserved=document.getElementById("reserved").value;
					var flag=true;
					var focus="";

//-----------------------------city validation---------------------------------
					var val = document.getElementById('BlockNo').value;
					if(val=="0")
					{
						document.getElementById("blockno_error").innerHTML="Please enter Block Number.";
						document.getElementById("BlockNo").style.borderColor='red';
						if(focus=="")focus="BlockNo";
						flag=false;
					}
					else
						{
						document.getElementById("BlockNo").style.borderColor='green';
							if(focus=="")focus="BlockNo";
							flag=true;
						}

//-----------------------------service type  validation---------------------------------
						if(ServiceType=="0")
						{
							document.getElementById("servicetype_error").innerHTML="Please select Service Type.";
							document.getElementById("ServiceType").style.borderColor='red';
							if(focus=="")focus="ServiceType";
							flag=false;
						}
						else
						{
						document.getElementById("ServiceType").style.borderColor='green';
							if(focus=="")focus="ServiceType";
							flag=true;
						}
//-----------------------------House type  validation---------------------------------
						if(HouseType=="0")
						{
							document.getElementById("housetype_error").innerHTML="Please select House Type.";
							document.getElementById("HouseType").style.borderColor='red';
							if(focus=="")focus="HouseType";
							flag=false;
						}
						else
						{
						document.getElementById("HouseType").style.borderColor='green';
							if(focus=="")focus="HouseType";
							flag=true;
						}
//-----------------------------Site id type  validation---------------------------------
						if(SiteId=="0")
						{
							document.getElementById("siteid_error").innerHTML="Please select Site Id.";
							document.getElementById("SiteId").style.borderColor='red';
							if(focus=="")focus="SiteId";
							flag=false;
						}
						else
						{
						document.getElementById("SiteId").style.borderColor='green';
							if(focus=="")focus="SiteId";
							flag=true;
						}
						
//-----------------------------reservation type  validation---------------------------------
						if(reserved=="0")
						{
							document.getElementById("reserved_error").innerHTML="Please select reserve Type.";
							document.getElementById("reserved").style.borderColor='red';
							if(focus=="")focus="reserved";
							flag=false;
						}
						else
						{
						document.getElementById("reserved").style.borderColor='green';
							
							flag=true;
						}
						
//-----------------------------Floor type  validation---------------------------------
						if(FloorType=="0")
						{
							document.getElementById("floortype_error").innerHTML="Please select Floor Type.";
							document.getElementById("FloorType").style.borderColor='red';
							if(focus=="")focus="FloorType";
							flag=false;
						}
						else
						{
						document.getElementById("FloorType").style.borderColor='green';
							
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
		
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->

			<!-- main -->
			<div class="main">
		
				
				<div class="featured">
					
				</div>
					<nav id="navigationsub">
				<center><h3><b>House Updation Page</b></h3></center>
				<ul>
					<li><a href="condominiumAdmin.php">Admin</a></li>
					<li class=""><a href="site.php">Add site</a></li>
					<li><a href="block.php">Add block</a></li>
					<li><a href="house.php">Add house</a></li>
					<li><a href="updatehouse.php">update</a></li>
					<li><a href="displayhouse.php">Display</a></li>
					<li><a href="Drawlottery.php">Draw</a></li>
					<li><a href="placement.php">Placement</a></li>
	
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
						<form  method="post" action="updatehouse.php"  style="border:outset" name="form1">
<table  height="450px" width="600px" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
<tr>
	<th colspan=2 style="border-bottom:1px green solid;padding-top:10px;padding-bottom:10px "></br>
</tr>

<tr>
	<td class="td">House Number :</td>
	<td class="td"><select name="BlockNo" class="input">
	  <option value="0">--Select House Number--</option>
	  <?php
	  include('connection.php');
	  $query=mysql_query("select HouseNumber from house");
	   while($row=mysql_fetch_array($query))
	   {
	   echo "<option>".$row['HouseNumber']."</option>";
	   }
	  ?>
	  </select>
	<span id="blockno_error" class="error"></span>
	</td>
</tr>

<tr>
	<td class="td">Block Number :</td>
	<td class="td"><select name="BlockNo" class="input">
	  <option value="0">--Select Block Number--</option>
	  <?php
	  include('connection.php');
	  $query=mysql_query("select BlockNo from block");
	   while($row=mysql_fetch_array($query))
	   {
	   echo "<option>".$row['BlockNo']."</option>";
	   }
	  ?>
	  </select>
	<span id="blockno_error" class="error"></span>
	</td>
</tr>

<tr>
	<td class="td">Site Id :</td>
	<td class="td"><select name="SiteId" class="input">
	  <option value="0">--Select site Id--</option>
	  <?php
	  include('connection.php');
	  $query=mysql_query("select SiteId from site");
	   while($row=mysql_fetch_array($query))
	   {
	   echo "<option>".$row['SiteId']."</option>";
	   }
	  ?>
	  </select>
	<span id="blockno_error" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">House Type:-</td>
	<td class="td"><select name="HouseType"  class="input" id="HouseType">    
	  						  <option value="0">--Select House Type--</option>      
                              <option value='1 bed'><i>1 bed</i></option>
                              <option value='2 bed'><i>2 bed</i></option>
                              <option value='3 bed'><i>3 bed</i></option>
                              <option value='Studio'><i>Studio</i></option>
                            </select>
	<span id="housetype_error" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">Floor Type:-</td>
	<td class="td"><select name="FloorType"  class="input" id="FloorType">    
	  						   <option value="0">--Select Floor Type--</option>        
                              <option value='Ground'><i>Ground</i></option>
                              <option value='Ground+1'><i>Ground+1</i></option>
                              <option value='Ground+2 '><i>Ground+2</i></option>
                              <option value='Ground+3'><i>Ground+3</i></option>
							   <option value='Ground+4'><i>Ground+4</i></option>
                              <option value='Ground+5'><i>Ground+5</i></option>
                              <option value='Ground+6'><i>Ground+6</i></option>
                            </select>
	<span id="floortype_error" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">Service Type:-</td>
	<td class="td"><select name="ServiceType"  class="input" id="ServiceType">    
	  						   <option value="0">--Select Service Type--</option>       
                              <option value='Home'><i>Home</i></option>
                            </select>
	<span id="servicetype_error" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">Reserved:</td>
	<td class="td"><select name="reserved"  class="input" id="reserved">    
	  						  <option value="0">--Select reserved Type--</option>       
                              <option value='yes'><i>yes</i></option>
                              <option value='no'><i>no</i></option>
                            </select>
	<span id="reserved_error" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td"></td>
	<td class="td"><font color="green">
	<span id="reserved_error" class="error">updates succefuly</span></font>
	</td>
</tr>
<th colspan="2"><input type="submit" style="height:35px;width:120px" onClick="return validation()" value="Register House"></th>
</table>
</form>				
				</div>
					<div class="cl">&nbsp;</div>
				</section>

				<section class="entries">
					<div class="entry">
						
					
						
					
					</div>
					
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
