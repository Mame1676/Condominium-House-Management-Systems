<?php
session_start();
if( !$_SESSION['proid'])
{
header('location: login.php');
}

?>
<?php
include("connection.php");
$user_id=$_SESSION['proid'];

$result=mysql_query("select * from profile where proid='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);

$fn=$row['firstName'];
$ln=$row['lastName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM </title>
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
				 
				    document.getElementById("residentid_error").innerHTML="";
					  document.getElementById("lastname_error").innerHTML="";
					var ResidentId=document.getElementById("ResidentId").value;
					var LastName=document.getElementById("LastName").value;
					var flag=true;
					var focus="";


//-----------------------------Resident Id validation------------------------------------------
							var val=document.getElementById("ResidentId").value;
							if(val=="0")
							{
								document.getElementById("residentid_error").innerHTML="Please enter Resident Id Number.";
								document.getElementById("ResidentId").style.borderColor='red';
								if(focus=="")focus="ResidentId";
								flag=false;
							}
							else if(!val.match(/^[0-9]+$/))
							{
								document.getElementById("residentid_error").innerHTML="Please enter number only.";
								document.getElementById("ResidentId").style.borderColor='red';
								if(focus=="")focus="ResidentId";
								flag=false;
							}
							else if(val.match(/^[0-9]+$/))
							{
								
								document.getElementById("ResidentId").style.borderColor='green';
							
								flag=true;
							}

//-----------------------------Last Name validation---------------------------------
					var val = document.getElementById('LastName').value;
					if(val=="")
					{
						document.getElementById("lastname_error").innerHTML="Please enter Last Name.";
						document.getElementById("LastName").style.borderColor='red';
						if(focus=="")focus="LastName";
						flag=false;
					}
					else if(!val.match(/^[a-zA-Z]+$/)) 
						{
					    document.getElementById("lastname_error").innerHTML="Please enter only character.";
						document.getElementById("LastName").style.borderColor='red';
						if(focus=="")focus="LastName";
						flag=false;
						}
						 else if(val.match(/^[a-zA-Z]+$/)) 
					{
			
					document.getElementById("LastName").style.borderColor='green';
				
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
					<li class=""><a href="residentLog.php">Home</a></li>
					
					<li><a href="aplayform.php">Apply</a></li>
					<li><a href="winStatus.php">Winning Status</a></li>
					</ul><ul>
					<li><div style="padding-left:25em"><a href="manageAccount.php">Manage Account</div></a></li>
					<li><a href="logout.php">Logout</a></li>
					
					
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			
				<!-- search -->
				<div class="search">
					
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</nav>
		
			<!-- main -->
		  <div class="main">

				<div class="featured">
				<form  method="post" action="aplayform.php"  name="form1">
<table  height="205" width="570" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="3">
<th height="172" colspan="5">PLEASE ENTER YOUR RESIDENT ID TO APPLY </th>
<tr>
	
	<td width="" > Resident Id :<?php echo $fn;?>
	  <select name="ResidentId" class="input">
	  <option value="0">--select your Resident Id--</option>
	  <?php
	  include('connection.php');
	
	  $query1=mysql_query("select ResidentId from resident");
	   while($row=mysql_fetch_array($query1))
	  {
	  $id=$row['ResidentId'];
	  
	   $query=mysql_query("select ResidentId from applicant where ResidentId='$id'");
	   $num=mysql_num_rows($query);
	   if($num==0){
	     echo "<option>".$id."</option>";
		 }
	   }
	  ?>
	  </select></td>
	<td width="256" class="td"><span id="residentid_error" class="error"></span>	  </td>
</tr>

<tr>
	
	<td width="" > Last Name :
	  <input name="LastName" class="input" id="LastName"></td>
	<td width="256" class="td"><span id="lastname_error" class="error"></span>	  </td>
</tr>
<th height="172" colspan="2"><input type="submit" style="height:35px;width:127px" onClick="return validation()" value=" GO TO APPLY FORM "></th>
</table>
<?php
	
	//Function to sanitize values received from the form. Prevents SQL injection
	/*?>function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	<?php */
	//Sanitize the POST values
	if(isset($_POST['ResidentId']))
	{
	$ResidentId = $_POST['ResidentId'];
	$LastName = $_POST['LastName'];
	if(empty( $_POST['ResidentId']) && empty( $_POST['LastName'])  )
	{
	echo "please select your id and enter your last name";
	}
	
	if(empty( $_POST['ResidentId']) && ( $_POST['LastName']))
	{
	echo "please select your id";
	}
	
	if(empty( $_POST['LastName']) && ( $_POST['ResidentId']))
	{
	echo "please select your last Name";
	}
	
	if(($ResidentId != '')&&($LastName != '')) {
		$qry = "SELECT * FROM applicant WHERE ResidentId='$ResidentId'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
			//echo"you are aleady applayed ";
			header("location:aplayform.php");
	      exit();
			}
		}
		else {
			die("Query failed");
		}
	}
	//Create query
	$qry="SELECT * FROM resident WHERE ResidentId='$ResidentId' and LastName='$LastName'";
	$result=mysql_query($qry);
		
	//Check whether the query was successful or not
	if($result) {
		if((mysql_num_rows($result) == 1)) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
		
			$_SESSION['SESS_ResidentId'] = $user['ResidentId'];
			session_write_close();
			header("location:Applicant.php");
			exit();
		}
	}else {
		die("please enter try by inserting your correct number");
}}
?>

</form>	
</div>

<section class="entries">

					
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
	<font color="#D91107"><center><p class="">&copy; Copyright 2015<span>|</span>information system Graduate class of 2007 E.C.</p></center>
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