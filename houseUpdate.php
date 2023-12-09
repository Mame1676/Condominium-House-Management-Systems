
<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
?>
<?php
include("connection.php")?>

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
				
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
		<!-- search -->
				<div class="search">
					
				</div>
				<!-- end of search -->
			<!-- main -->
			<div class="featured">
			</div>
		  <div class="main">
		 <!-- navigaation -->
			<center><h3><b>House updation form Page</b></h3></center>
			<nav id="navigationsub">
				<ul><li class=""><a href="index.php">Home</a></li>
					<li><a href="condominiumAdmin.php">Admin</a></li>
					<li class=""><a href="site.php">Add site</a></li>
					<li><a href="block.php">Add block</a></li>
					<li><a href="house.php">Add house</a></li>
					<li><a href="displayhouse.php">Display</a></li>
					<li><a href="Drawlottery.php">Draw</a></li>
					<li><a href="placement.php">Placement</a></li>
				
			
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
				<div class="featured">
				
		<script type="text/javascript">
		function validate(){
			if (!form1.blockNo.value.match(/^[0-9]+$/) && form1.blockNo.value !="")
               {
                    form1.blockNo.value="";
                    form1.blockNo.focus(); 
                    alert("Please Enter only Number for Block Number");
               }
			if (!form1.siteid.value.match(/^[0-9]+$/) && form1.siteid.value !="")
               {
                    form1.siteid.value="";
                    form1.siteid.focus(); 
                    alert("Please Enter only Number for Site ID");
               }
			if (!form1.service.value.match(/^[a-zA-Z]+$/) && form1.service.value !="")
               {
                    form1.service.value="";
                    form1.service.focus(); 
                    alert("Please Enter only alphabets for Service Type");
               }
			if (!form1.status.value.match(/^[a-zA-Z]+$/) && form1.status.value !="")
               {
                    form1.status.value="";
                    form1.status.focus(); 
                    alert("Please Enter only alphabets for Reserved Status");
               }
			
			
		}
	
		</script>
<form  method="post" style="border:outset" name="form1">
<table  height="715" width="1632"  cellspacing="3">
<?php
$id = $_REQUEST['id'];
$sel= mysql_query("SELECT * FROM house WHERE HouseNumber = '$id'");
$row = mysql_fetch_array($sel);
?>
<tr>
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<td class="td">Block Number :</td>
	<td width="540" class="td"><input type="text" name="blockNo" class="input" value="<?php echo $row['BlockNo']?>" onKeyUp="validate()">
	</td>
</tr>
<tr>
	<td class="td">Site ID:</td>
	<td class="td"><input type="text" name="siteid" class="input" value="<?php echo $row['SiteId']?>" onKeyUp="validate()">
	</td><td width="924"></br>
</tr>
<tr>
	<td class="td">House Type :</td>
	<td class="td"><select name="HouseType"  class="input" id="PhysicalStatus">    
	  						  <option value='<?php echo $row['HouseType']?>' selected><i><?php echo $row['HouseType']?></i></option>        
                              <option value='1 bed'><i>1 bed</i></option>
                              <option value='2 bed'><i>2 bed</i></option>
                              <option value='3 bed'><i>3 bed</i></option>
                              <option value='Studio'><i>Studio</i></option>
                            </select>
	</td>
</tr>
<tr>
	<td class="td">Floor Type :</td>
	<td class="td"><select name="floorType"  class="input" id="PhysicalStatus">    
	  						  <option value='<?php echo $row['FloorType']?>' selected><i><?php echo $row['FloorType']?></i></option>        
                              <option value='Ground'><i>Ground</i></option>
                              <option value='Ground+1'><i>Ground+1</i></option>
                              <option value='Ground+2 '><i>Ground+2</i></option>
                              <option value='Ground+3'><i>Ground+3</i></option>
							   <option value='Ground+4'><i>Ground+4</i></option>
                              <option value='Ground+5'><i>Ground+5</i></option>
                              <option value='Ground+6'><i>Ground+6</i></option>
                            </select>
	</td>
</tr>
<tr>
	<td class="td">Service Type:</td>
	<td class="td"><input type="text" name="service" class="input" value="<?php echo $row['ServiceType']?>" onKeyUp="validate()">
	</td><td width="924"></br>
</tr>
<tr>
	<td class="td">House Number:</td>
	<td class="td"><input type="text" name="HouseNumber" class="input" value="<?php echo $row['HouseNumber']?>" onKeyUp="validate()" readonly>
	</td><td width="924"></br>
</tr>
<tr>
	<td class="td">Reserved Status:</td>
	<td class="td"><input type="text" name="status" class="input" value="<?php echo $row['reserved']?>" onKeyUp="validate()">
	</td><td width="924"></br>
</tr>


<tr><th colspan="2"><input type="submit" style="height:35px;width:120px" name='go' value="Update House"></th></tr>
</table>
</form>
<?php
if(isset($_POST['go'])){
		$blockNo=$_POST['blockNo'];
		$HouseType=$_POST['HouseType'];
		$floorType=$_POST['floorType'];
		$service=$_POST['service'];	
		$HouseNumber=$_POST['HouseNumber'];	
		$status=$_POST['status'];	
		
		$sql=mysql_query("UPDATE house SET blockNo='$blockNo', HouseType='$HouseType', floorType='$floorType',
			ServiceType='$service', reserved='$status' WHERE HouseNumber='$HouseNumber'");
	if($sql ){
			echo '<meta content="2;updatehouse.php" http-equiv="refresh"/>';
			echo "<img src='images/tick.png' height=20 width=20 align=center/> House Information Updated Successful!";
						}
		else {
		echo "ERROR WHILE UPDATING!";
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
