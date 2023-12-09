
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
				<ul>
					
					<li class=""><a href="bankAdmin.php">Bank Admin</a></li>
					<li><a href="payment.php">Add payment</a></li>
					<li><a href="displaypayment.php">Display payment</a></li>
					<li><a href="updatepayment.php">Update payment</a></li>
					<li><a href="deletepayment.php">Delete Payment</a></li>
				

					</li>
			
					
				</ul>
			
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<!-- search -->
				<div class="search">
					
				</div>
				<!-- end of search -->
			

			<!-- main -->
			<div class="main">
			<!-- navigaation -->
			<i style="padding-left:60em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|</i>
			<center><h3><b>Payment Registration Page.</b></h3></center>
			<nav id="navigation">
				
			
				<div class="cl">&nbsp;</div>
			</nav>

				<section class="cols">
					<div class="col">
	
					</div>
					<div class="featured">
<form  action="updatepaymentinsertion.php" style="border:outset" name="form1" method="post"  onSubmit="">
<table  height="450px" width="704" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
<tr>
	<td class="td">Payment Type:</td>
	<td class="td"><select name="PaymentType"  class="input" id="PaymentType">    
	  						  <option value='0'><i>Select</i></option>        
                              <option value='Full'><i>Full</i></option>
                              <option value='20/80'><i>20/80</i></option>
                              <option value='40/60'><i>40/60</i></option>
                            </select>
	<font color="red"><span id="paymenttype_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Amount :</td>
	<td class="td"><input type="text" name="Amount" class="input" id="Amount" onKeyPress="return num(event)">
	<span id="amount_error" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">Date:</td>
	<td class="td"><input type="Date" name="Dates" class="input" id="Dates" value=" <?php
echo date("Y-m-d")?>" readonly="true">
	<font color="red"><span id="date_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Pre payment:</td>
	<td class="td"><input name="PrePayment"  class="input" id="PrePayment">    
	  			
	<span id="prepayment_error" class="error"></span>
	</td>
</tr>
<tr>
	<td class="td">AcountNumber:</td>
	<td class="td"><input name="AcountNumber"  class="input" id="AcountNumber">    
	<font color="red"><span id="acountnumber_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Bank Name :</td>
	<td class="td"><input type="text" name="BankName" class="input" id="BankName" maxlength="" value="<?php echo "Comercial bank" ?>" readonly="true" >
	<font color="red"><span id="bankname_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">TT Number :</td>
	<td class="td"><input type="text" name="TTNumber" class="input" id="TTNumber" maxlength="">
	<font color="red"><span id="ttnumber_error" class="error"></span></font>
	</td>
</tr>
<tr>
	<td class="td">Winner Id:</td>
	<td class="td"><select name="WinnerId" id="WinnerId" class="input">
	  <option value="0">--select your placement Id--</option>
	  <?php
	  include('connection.php');
	  $query=mysql_query("select WinnerId from winner");
	   while($row=mysql_fetch_array($query))
	   {
	   echo "<option>".$row['WinnerId']."</option>";
	   }
	  ?>
	  </select>
	<font color="red"><span id="winnerid_error" class="error"></span></font>
	</td>
</tr>
<th colspan="2"><input type="submit" style="height:35px;width:120px" onClick="return validation()" value="Register payment"></th>
</table>
</form>
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
</html>