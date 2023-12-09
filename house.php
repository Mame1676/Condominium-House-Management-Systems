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
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMNET SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script language="javascript">
        var flag=0;
// ************************block number validation *********************************************//		
        function blocknumber()
        {
            bn=form1.BlockNo.value;
            if(bn=="0")
            {
                document.getElementById("error0").innerHTML="select site Block Number ";
				document.getElementById("BlockNo").style.borderColor='green';
                flag=1;
				return false;
            }
        }   
// ************************Site Id validation *********************************************//
							function siteid()
							{
								si=form1.SiteId.value;
								if(si=="0")
								{
									document.getElementById("error1").innerHTML="select site id"; 
									document.getElementById("SiteId").style.borderColor='red';  
									flag=1;
									return false;
								}
								else 
								{
								document.getElementById("SiteId").style.borderColor='green'; 
								}
							
							}
// *******************************House Type validation *****************************************//
							function housetype()
							{
								Ht=form1.HouseType.value;
								if(Ht=="0")
								{
									document.getElementById("error2").innerHTML="select House Type";  
									document.getElementById("HouseType").style.borderColor='red'; 
									flag=1;
									return false;
								}
								else 
								{
								document.getElementById("HouseType").style.borderColor='green'; 
								}
							}
// *******************************Floor Type validation *****************************************//
							function floortype()
							{
								flt=form1.FloorType.value;
								if(flt=="0")
								{
									document.getElementById("error3").innerHTML="select your floor Type";  
									document.getElementById("FloorType").style.borderColor='red'; 
									flag=1;
									return false;
								}
							}
// *******************************service type validation *****************************************//
					function servicetye()
					{
						ke=form1.ServiceType.value;
						if(ke=="0")
						{
							document.getElementById("error4").innerHTML="select service type";  
							document.getElementById("ServiceType").style.borderColor='red'; 
							flag=1;
							return false;
						}
						else {
						document.getElementById("ServiceType").style.borderColor='green'; 
						 flag=0;
						return true;
						}
					}		
// *******************************Reserved type validation *****************************************//
					function reserved()
					{
						rt=form1.resrved.value;
						if(rt=="0")
						{
							document.getElementById("error5").innerHTML="select reserved type";  
							document.getElementById("resrved").style.borderColor='red'; 
							flag=1;
							return false;
						}
						else {
						document.getElementById("resrved").style.borderColor='green'; 
						 flag=0;
						return true;
						}
					}
// *******************************main validation *****************************************//
        function check(form)
        {
            flag=0;
            blocknumber();
            siteid();
			housetype();
			floortype();
			servicetye();
			reserved();
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
	
			<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->

			<!-- main -->
			<div class="main">
			
				
				<div class="featured">
					
				</div>
 				<nav id="navigationsub">
 					<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>
				<center><h3><b>House Registration Page</b></h3></center>
				<ul>
					<li><a href="condominiumAdmin.php">home</a></li>
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

					<div class="featured">
						<form  method="post" action="houseinsertion.php"  style="border:outset" name="form1" onSubmit="return check(this)">
<table  height="450px" width="600px" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
<tr>
	<th colspan=2 style="border-bottom:1px green solid;padding-top:10px;padding-bottom:10px "></br>
<tr>
	<td class="td">Block Number :</td>
	<td class="td"><select name="BlockNo" class="input" onBlur=" blocknumber()" >
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
	<font color="red"><span id="error0" class="error"></span></font>
	</td>
</tr>

<tr>
	<td class="td">Site Id :</td>
	<td class="td"><select name="SiteId" class="input" onBlur="return siteid()">
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
	<span id="error1" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">House Type:-</td>
	<td class="td"><select name="HouseType"  class="input" id="HouseType" onBlur=" return housetype()">    
	  						  <option value="0">--Select House Type--</option>      
                              <option value='1 bed'><i>1 bed</i></option>
                              <option value='2 bed'><i>2 bed</i></option>
                              <option value='3 bed'><i>3 bed</i></option>
                              <option value='Studio'><i>Studio</i></option>
          
                            </select>
	<span id="error2" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">Floor Type:-</td>
	<td class="td"><select name="FloorType"  class="input" id="FloorType" onBlur="return floortype()">    
	  						   <option value="0">--Select Floor Type--</option>        
                              <option value='Ground'><i>Ground</i></option>
                              <option value='Ground+1'><i>Ground+1</i></option>
                              <option value='Ground+2 '><i>Ground+2</i></option>
                              <option value='Ground+3'><i>Ground+3</i></option>
							   <option value='Ground+4'><i>Ground+4</i></option>
                             
          
                            </select>
	<span id="error3" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">Service Type:-</td>
	<td class="td"><select name="ServiceType"  class="input" id="ServiceType" onBlur="returrn servicetye()">    
	  						       
                              <option value='Home'><i>Home</i></option>
                            </select>
	<span id="error4" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">Reserved:</td>
	<td class="td"><select name="reserved"  class="input" id="reserved" onBlur="return reserved()">    
	  						       <option value='no'><i>no</i></option>     
                              <option value='yes'><i>yes</i></option>
                          
                            </select>
	<span id="error5" class="error"></span>
	</td>
</tr>

<th colspan="2"><input type="submit" style="height:35px;width:120px"  value="Register House"></th>

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
