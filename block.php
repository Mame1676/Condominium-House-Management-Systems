
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
		
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			
			<!-- main -->
			<div class="main">
			
				
				<div class="featured">
					
				</div>
				<nav id="navigationsub">
					<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>
				<center><h3><b>Block Registration Page</b></h3></center>
				<ul>
					<li class=""><a href="index.php">Home</a></li>
					<li><a href="condominiumAdmin.php">Admin</a></li>
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
						<form  method="post" action="" style="border:outset" name="form1">
<table  height="259" width="697" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
<tr>
	<th height="43" colspan=2 style="border-bottom:1px green solid;padding-top:10px;padding-bottom:10px ">&nbsp;</th>
</tr>

<tr>
	<td width="2" height="52" class="td">&nbsp;</td>
	<td width="631" class="td"><span id="blocktype_error" class="error"></span>
	</td>
</tr>
<tr>
	<td height="106" class="td"><p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p></td>
	<td class="td"><table width="671" border="0">
	  <tr>
	    <td width="381"><table width="403" height="108" border="0">
	      <tr>
	        <td width="107">Block Type:-</td>
	        <td width="286"><select name="BlockType"  class="input" id="BlockType" >
	          <option value='0'>Select</option>
	          <option value='G+2'>G+2</option>
	          <option value='G+3'>G+3</option>
	          <option value='G+4'>G+4</option>
	          </select></td>
	        </tr>
	      <tr>
	        <td>Site Id :- </td>
	        <td><select name="SiteId" class="input" id="SiteId">
	          <option value="0">--Select Site Id--</option>
	          <?php
	  include('connection.php');
	  $query=mysql_query("select SiteId from Site");
	   while($row=mysql_fetch_array($query))
	   {
	   echo "<option>".$row['SiteId']."</option>";
	   }
	  ?>
	          </select></td>
	        </tr>
	      </table>
	      <p>
	        <input type="submit" style="height:35px;width:120px" name="submit"value="Register Block" onFocus=="return validation()">
	      </p></td>
	    <td width="195">
        <table width="248" height="144" border="0">
      <tr>
        <td width="146" bgcolor="#FFCCCC">site_id</td>
        <td width="92" bgcolor="#FFCCCC">Total block</td>
		<td width="92" bgcolor="#FFCCCC">total studio</td>
		<td width="92" bgcolor="#FFCCCC">total 1 bed</td>
		<<td width="92" bgcolor="#FFCCCC">total 2 bed</td>
		<td width="92" bgcolor="#FFCCCC">total 3 bed</td>
      </tr>
      <?php
	                 $bed1= mysql_query('SELECT * FROM house WHERE SiteId ="1" AND HouseType="1 bed"');
					 $sh1=mysql_num_rows($bed1);
					   $bed2= mysql_query('SELECT * FROM house WHERE SiteId ="1" AND HouseType="2 bed"');
					 $sh2=mysql_num_rows($bed2);
					   $bed3= mysql_query('SELECT * FROM house WHERE SiteId ="1" AND HouseType="3 bed"');
					 $sh3=mysql_num_rows($bed3);
					   $studio= mysql_query('SELECT * FROM house WHERE SiteId ="1" AND HouseType="studio"');
					 $sh4=mysql_num_rows($studio);
					 
					 
					  $bed11= mysql_query('SELECT * FROM house WHERE SiteId ="2" AND HouseType="1 bed"');
					 $sh11=mysql_num_rows($bed11);
					   $bed21= mysql_query('SELECT * FROM house WHERE SiteId ="2" AND HouseType="2 bed"');
					 $sh21=mysql_num_rows($bed21);
					   $bed31= mysql_query('SELECT * FROM house WHERE SiteId ="2" AND HouseType="3 bed"');
					 $sh31=mysql_num_rows($bed31);
					   $studio1= mysql_query('SELECT * FROM house WHERE SiteId ="2" AND HouseType="studio"');
					 $sh41=mysql_num_rows($studio1);
					 
					  $bed12= mysql_query('SELECT * FROM house WHERE SiteId ="3" AND HouseType="1 bed"');
					 $sh12=mysql_num_rows($bed12);
					   $bed22= mysql_query('SELECT * FROM house WHERE SiteId ="3" AND HouseType="2 bed"');
					 $sh22=mysql_num_rows($bed22);
					   $bed32= mysql_query('SELECT * FROM house WHERE SiteId ="3" AND HouseType="3 bed"');
					 $sh32=mysql_num_rows($bed32);
					   $studio2= mysql_query('SELECT * FROM house WHERE SiteId ="3" AND HouseType="studio"');
					 $sh42=mysql_num_rows($studio2);
					 
					  $bed13= mysql_query('SELECT * FROM house WHERE SiteId ="4" AND HouseType="1 bed"');
					 $sh13=mysql_num_rows($bed13);
					   $bed23= mysql_query('SELECT * FROM house WHERE SiteId ="4" AND HouseType="2 bed"');
					 $sh23=mysql_num_rows($bed23);
					   $bed33= mysql_query('SELECT * FROM house WHERE SiteId ="4" AND HouseType="3 bed"');
					 $sh33=mysql_num_rows($bed33);
					   $studio3= mysql_query('SELECT * FROM house WHERE SiteId ="4" AND HouseType="studio"');
					 $sh43=mysql_num_rows($studio3);
					 
					 
					 
					  $ap=mysql_query('SELECT * from block WHERE siteid="1" ');
				$ass= mysql_num_rows($ap);
				

					$ap1=mysql_query('SELECT * from block WHERE siteid="2" ');
				$ass2 = mysql_num_rows($ap1);	

					$ap2=mysql_query('SELECT * from block WHERE siteid="3" ');
				$ass3 = mysql_num_rows($ap2);	

					$ap3=mysql_query('SELECT * from block WHERE siteid="4" ');
				$ass4 = mysql_num_rows($ap3);	

				 
				?>
	<tr>
        <td bgcolor="#99CCCC">site 1</td>
         <td bgcolor="#FFFFCC"><?php echo "$ass"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh4"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh1"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh2"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh3"; ?></td>			
				
</td>
      </tr>
	  
      <tr>
        <td bgcolor="#99CCCC">site 2</td>
        <td bgcolor="#FFFFCC"><?php echo "$ass2"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh41"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh11"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh21"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh31"; ?></td>
      </tr>
      <tr>
        <td bgcolor="#99CCCC">site 3</td>
        <td bgcolor="#FFFFCC"><?php echo "$ass3"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh42"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh12"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh22"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh32"; ?></td>
      </tr>
      <tr>
        <td bgcolor="#99CCCC">site 4</td>
        <td bgcolor="#FFFFCC"><?php echo "$ass4"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh43"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh13"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh23"; ?></td>
		<td bgcolor="#FFFFCC"><?php echo "$sh33"; ?></td>
      </tr>
	 
    </table></td>
  </tr>
</table>
        
        </td>
	    </tr>
	  </table>
	  <p>&nbsp;</p>
	  <p>&nbsp;	    </p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p><span id="residentid_error" class="error"></span></p>
	</td>
</tr>

<th colspan="2">&nbsp;</th>
</table>
</form>	

	<?php 
						if(isset($_POST['submit']))
						{
								$BlockType = $_POST['BlockType'];
								$SiteId = $_POST['SiteId'];
							if(empty($_POST['BlockType']) || empty($_POST['SiteId']) )
							{
								echo"UNABLE TO INSERT".mysql_error();
								exit();
							}
							
								
								
								$q="INSERT into block(BlockType,SiteId)values('$BlockType','$SiteId')"; 
							$query=mysql_query($q);
							if(!$query)
							{
							echo"UNABLE TO INSERT".mysql_error();
							}
							else
							{
							header("location:blocksuccess.php");
							exit();
							//echo"inserted successfully";
							}
						}
					 ?>

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
