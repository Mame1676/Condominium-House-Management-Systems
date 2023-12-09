

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
<html >
<head>
	<meta />
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
			  document.getElementById("paymenttype_error").innerHTML="";
			  document.getElementById("amount_error").innerHTML="";
			  document.getElementById("date_error").innerHTML="";
			  document.getElementById("prepayment_error").innerHTML="";
			  document.getElementById("acountnumber_error").innerHTML="";
			  document.getElementById("bankname_error").innerHTML="";
			  document.getElementById("ttnumber_error").innerHTML="";
			  document.getElementById("winnerid_error").innerHTML="";
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var PaymentType=document.getElementById("PaymentType").value;
				var Amount=document.getElementById("Amount").value;
				var Dates=document.getElementById("Dates").value;
				var PrePayment=document.getElementById("PrePayment").value;
				var BankName=document.getElementById("BankName").value;
				var AcountNumber=document.getElementById("AcountNumber").value;
				var TTNumber=document.getElementById("TTNumber").value;
				var WinnerId=document.getElementById("WinnerId").value;
				var flag=true;
				var focus="";
				
//-----------------------------payment type validation---------------------------------
			var val = document.getElementById('PaymentType').value;
			if(val=="0")
				{
				document.getElementById("paymenttype_error").innerHTML="Please select payment type.";
				document.getElementById("PaymentType").style.borderColor='red';
				if(focus=="")focus="PaymentType";
				flag=false;
				}   
					 else
					 {
					 
					 	document.getElementById("PaymentType").style.borderColor='green';
						flag =true;
					 }
//-----------------------------Amount validation---------------------------------
				var val = document.getElementById('Amount').value;
				if(val=="")
				{
					document.getElementById("amount_error").innerHTML="Please enter valid amount.";
					document.getElementById("Amount").style.borderColor='red';
					if(focus=="")focus="Amount";
					flag=false;
				}
				else if(!val.match(/^[0-9]+$/)) 
					{
					document.getElementById("amount_error").innerHTML="Please enter number only.";
					document.getElementById("Amount").style.borderColor='red';
					if(focus=="")focus="Amount";
					flag=false
					}
					 
					 else if(val.match(/^[0-9]+$/))
					 {
					 
					 	document.getElementById("Amount").style.borderColor='green';
						flag =true;
					 }
//-----------------------------pre payment validation---------------------------------
					var val = document.getElementById('PrePayment').value;
					if(val=="")
					{
						document.getElementById("prepayment_error").innerHTML="Please select prepayment.";
						document.getElementById("PrePayment").style.borderColor='red';
						if(focus=="")focus="PrePayment";
						flag=false;
					}
						 
					 else if(val.match(/^[0-9]+$/))
					 {
					 
					 	document.getElementById("PrePayment").style.borderColor='green';
						flag =true;
					 }
//-----------------------------Acount number validation------------------------------------------
							var val=document.getElementById("AcountNumber").value;
							if(val=="")
							{
								document.getElementById("acountnumber_error").innerHTML="Please enter your acount number.";
								document.getElementById("AcountNumber").style.borderColor='red';
								if(focus=="")focus="AcountNumber";
								flag=false;
							}
							else if(val.match(/^[0-9]+$/))
							{
							document.getElementById("AcountNumber").style.borderColor='green';
							flag=True;
							}
//-----------------------------Bank Name validation------------------------------------------
							var val=document.getElementById("BankName").value;
							if(val=="")
							{
								document.getElementById("bankname_error").innerHTML="Please enter  your bank name.";
								document.getElementById("BankName").style.borderColor='red';
								if(focus=="")focus="BankName";
								flag=false;
							}
							else if(!val.match(/^[a-zA-Z]+$/)) 
							{
							document.getElementById("bankname_error").innerHTML="Please enter only alphabet.";
							document.getElementById("BankName").style.borderColor='red';
							focus="BanknName";
							flag=false;
							}
							else if(val.match(/^[a-zA-Z]+$/)) 
							{
							document.getElementById("BankName").style.borderColor='green';
							flag=True;
							}											

//-----------------------------TT  number validation------------------------------------------
							var val=document.getElementById("TTNumber").value;
							if(val=="")
							{
								document.getElementById("ttnumber_error").innerHTML="Please enter your tt number.";
								document.getElementById("TTNumber").style.borderColor='red';
								if(focus=="")focus="TTNumber";
								flag=false;
							}
							 else
					 {
					 
					 	document.getElementById("TTNumber").style.borderColor='green';
						flag =true;
					 }
//-----------------------------winner Id  number validation------------------------------------------
							var val=document.getElementById("WinnerId").value;
							if(val=="0")
							{
								document.getElementById("winnerid_error").innerHTML="Please select  Winner Id.";
								document.getElementById("WinnerId").style.borderColor='red';
								if(focus=="")focus="WinnerId";
								flag=false;
							}
							 else if(val.match(/^[0-9]+$/))
					 {
					 
					 	document.getElementById("WinnerId").style.borderColor='green';
						flag =true;
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
			<!-- search -->
				<div class="search">
					
				</div>
				<!-- end of search -->
			<!-- main -->
					<div class="featured">
			</div>
			<div class="main">
			<!-- navigaation -->
			<center><h3><b>Payment Registration Page.</b></h3></center>
			<nav id="navigation">
				<ul>
				<li class=""><a href="index.php">Home</a></li>
					<li class=""><a href="bankAdmin.php">Bank Admin</a></li>
					<li><a href="payment.php">Add payment</a></li>
					<li><a href="displaypayment.php">Display payment</a></li>
					<!--<li><a href="updatepayment.php">Update payment</a></li>
					<li><a href="deletepayment.php">Delete Payment</a></li>-->
					<li><a href="login.php">Log out</a>
					</li>
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>

				<section class="cols">
					<div class="col">
	
					</div>
					<div class="featured">
<?php 
if(isset($_POST['submit']))
{
	$_SESSION['payment']=array();
	    $PaymentType = $_POST['PaymentType'];
		$Amount = $_POST['Amount'];
		$Dates = $_POST['Dates'];
		$PrePayment = $_POST['PrePayment'];
		$AcountNumber = $_POST['AcountNumber'];
		$BankName = $_POST['BankName'];
		$TTNumber = $_POST['TTNumber'];
		$WinnerId = $_POST['WinnerId'];

	
	$sub=mysql_query("select * from finance where AcountNumber='{$AcountNumber}'");
	$row=mysql_fetch_array($sub);
	
	if(mysql_num_rows($sub)==1)
	{
		
		$balance=$row['Balance'];
	$b=$balance-$PrePayment ;
	if($b<0)
	{
		echo"you have insufficient balance";
		
		
	}
	else
	{
	
	$up=mysql_query("update finance set Balance='{$b}' where AcountNumber='{$AcountNumber}'");
	if($up)
	{
	$check=mysql_query("select * from payment where AcountNumber='{$AcountNumber}'");
	if(mysql_num_rows($check)==1)
	{
		$row1=mysql_fetch_array($check);
		$pre=$row1['PrePayment'];
		$p=$pre+$PrePayment;
		$up=mysql_query("update payment set PrePayment='{$p}' where AcountNumber='{$AcountNumber}' ");
			
		if($up)
		{
			echo"your payment is succesfully updated!";
			
		}			
		
		
		}
		else
		{
	
 	$query=mysql_query("insert into payment(PaymentType,Amount,Dates,PrePayment,AcountNumber,BankName,TTNumber,WinnerId)
	values('$PaymentType','$Amount','$Dates','$PrePayment','$AcountNumber','$BankName','$TTNumber','$WinnerId')"); 
	
if($query)
{
$sub=mysql_query("select * from finance where AcountNumber='{$AcountNumber}'");
	$row=mysql_fetch_array($sub);
	
	$balance=$row['Balance'];
	$b=$balance-$PrePayment ;
	$up=mysql_query("update finance set Balance='{$b}'");
	if($up)
		{
			echo"your payment is succesfully updated!";
			
		}	
}
else

{
echo" error";
	}}}}}
else
{
	echo"this account number is invalid";
}
}
 ?>
 				</div>
	
			</div>
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			
			<div id="footer">
			
						<div class="featured"></div>
				<div class="footer-nav">
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