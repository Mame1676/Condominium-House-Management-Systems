
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
	<meta  />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<script language="javascript">
        var flag=0;
		
		
// ************************site Id validation *********************************************//		
        function siteid()
        {
            user=form1.SiteId.value;
            if(user=="0")
            {
                document.getElementById("error0").innerHTML="select site id ";
				document.getElementById("SiteId").style.borderColor='green';
                flag=1;
				return false;
			exit();
            }
        }   
// ************************site name validation *********************************************//
							function Sitename()
							{
								site=form1.SiteName.value;
								if(site=="0")
								{
									document.getElementById("error1").innerHTML="select site name"; 
									document.getElementById("SiteName").style.borderColor='red';  
									flag=1;
									return false;
								}
								else
								{
								document.getElementById("SiteName").style.borderColor='green';
								}
							}
// *******************************site city validation *****************************************//
							function city()
							{
								city=form1.City.value;
								if(city=="0")
								{
									document.getElementById("error2").innerHTML="select city";  
									document.getElementById("City").style.borderColor='red'; 
									flag=1;
									return false;
								}
							}
// *******************************site Wereda validation *****************************************//
							function wereda()
							{
								were=form1.Wereda.value;
								if(were=="0")
								{
									document.getElementById("error3").innerHTML="select site wereda";  
									document.getElementById("Wereda").style.borderColor='red'; 
									flag=1;
									return false;
								}
							}
// *******************************site kebele validation *****************************************//
					function kebele()
					{
						ke=form1.Kebele.value;
						if(ke=="0")
						{
							document.getElementById("error4").innerHTML="select site kebele";  
							document.getElementById("Kebele").style.borderColor='red'; 
							flag=1;
							return false;
						}
						else {
						document.getElementById("Kebele").style.borderColor='green'; 
						 flag=0;
						return true;
						}
					}
// *******************************main validation *****************************************//
        function check(form)
        {
            flag=0;
           siteid();
            Sitename();
			city();
			wereda();
			kebele();
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
			<nav id="navigation">
				<a href="index.php" class="nav-btn">HOME<span></span></a>
				
			
			<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<div class="main">
			
			<!-- slider-holder -->
			<div class="slider-holder">
				

			<!-- main -->
			<div class="main">
				
				<div class="featured">
				
				</div>
				<nav id="navigationsub">
					<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>
				<center><h3><b>Site Registration Page</b></h3></center>
				<ul>
					<li><a href="condominiumAdmin.php">Home</a></li>
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
						
<form  action="siteinsertion.php" style="border:outset" name="form1" method="post"  onSubmit="return(check(this))" >
  <table width="650" height="93" border="0">
    <tr>
    <td width="376"><table width="365" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
      <tr>
        <td width="87" height="47" class="td">Site Id :</td>
        <td width="272" class="td"><select name="SiteId"  class="input" id="SiteId" >
          <option value='0'>-----Select site ID-------</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
          <option value='4'>4</option>
        </select>
          <font color="red"><span id="error0" class="error"></span></font></td>
      </tr>
      <tr>
        <td height="40" class="td">Site Name:</td>
        <td class="td"><select name="SiteName"  class="input" id="SiteName" >
          <option value='0'>-----Select site name-------</option>
          <option value='site1'>site1</option>
          <option value='Site2'>site2</option>
          <option value='site3'>site3</option>
          <option value='site4'>site4</option>
        </select>
          <font color="red"><span id="error1" class="error"></span></font></td>
      </tr>
      <tr>
        <td height="50" class="td">City:</td>
        <td class="td"><select name="City"  class="input" id="City" >
          <option value='0'>-----Select-------</option>
          <option value='deberbrehan'>Deberbrehan</option>
        </select>
          <font color="red"><span id="error2" class="error"></span></font></td>
      </tr>
      <tr>
        <td height="30" class="td">Wereda:</td>
        <td class="td"><select name="Wereda"  class="input" id="Wereda">
          <option value='0'>-----Select-------</option>
          <option value='deberbrehan'>Deberbrehan</option>
        </select>
          <font color="red"><span id="error3" class="error"></span></font></td>
      </tr>
      <tr>
        <td height="44" class="td">Kebele:</td>
        <td class="td"><select name="Kebele"  class="input" id="Kebele" >
          <option value='0'>-----Select kebele-------</option>
          <option value='01'>01</option>
          <option value='02'>02</option>
          <option value='03'>03</option>
          <option value='04'>04</option>
          <option value='05'>05</option>
          <option value='06'>06</option>
          <option value='07'>07</option>
          <option value='08'>08</option>
          <option value='09'>09</option>
        </select>
          <font color="red"><span id="error4" class="error"></span></font></td>
      </tr>
  <th height="35" colspan="2"><input type="submit" onClick="return validation()" value="Submit"></th>
    </table></td>
    <td width="258"><table width="248" height="144" border="0">
      <tr>
        <td width="146" bgcolor="#FFCCCC">site_id</td>
        <td width="92" bgcolor="#FFCCCC">Total block</td>
      </tr>
      <tr>
        <td bgcolor="#99CCCC">site 1</td>
        <td bgcolor="#FFFFCC"><?php
	                 $ap=mysql_query('SELECT * from block WHERE siteid="1" ');
				$ass= mysql_num_rows($ap);

					$ap1=mysql_query('SELECT * from block WHERE siteid="2" ');
				$ass2 = mysql_num_rows($ap1);	

					$ap2=mysql_query('SELECT * from block WHERE siteid="3" ');
				$ass3 = mysql_num_rows($ap2);	

					$ap3=mysql_query('SELECT * from block WHERE siteid="4" ');
				$ass4 = mysql_num_rows($ap3);	

				echo "$ass"; 
?></td>
      </tr>
      <tr>
        <td bgcolor="#99CCCC">site 2</td>
        <td bgcolor="#FFFFCC"><?php echo "$ass2"; ?></td>
      </tr>
      <tr>
        <td bgcolor="#99CCCC">site 3</td>
        <td bgcolor="#FFFFCC"><?php echo "$ass3"; ?></td>
      </tr>
      <tr>
        <td bgcolor="#99CCCC">site 4</td>
        <td bgcolor="#FFFFCC"><?php echo "$ass4"; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
				  </div>

					<div class="cl">&nbsp;</div>
				</section>

				<section class="entries">

			<!-- end of main -->
		
			
			<!-- footer -->
			<div id="footer">
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
