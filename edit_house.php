<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>HOSSANA CITY CONDOMINUM HOUSE MANAGMENT SYSTEM </title>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no, width=device-width">
<link rel="stylesheet" href="mycss.css" type="text/css">
</head>
<body>
<div class="general-background">
<header id="heading">
<img src="images/Header.jpg" alt="header gif" width="96%" height="100"></header>
<nav>
<!--Edit links here - Add remove as needed-->
  <ul class="hnavbar" id="menu">
       <li><a href="index.php">Home</a></li>
		
         <li><a href="#heading">Adminstrator</a>
		 	<ul>
               <li><a href="condominiumAdmin.php">Condominium-></a></li>
               <li><a href="kebleAdmin.php">Kebele</a></li>
               <li><a href="bakAdmin.php">Bannk</a></li>
			    <li><a href="lottery.php">lottery</a></li>
			     <li><a href="house.php">gallery</a></li>
			    <li><a href="feedback.php">feedback</a></li>
				<li><a href="displayhouse.php">Display</a></li>
				<li><a href="idvalidation.php">Applay</a></li>
				<li><a href="residentuppdateform.php">resident update</a></li>
            </ul>
         </li>  
		 <li><a href="ApplayForm.php">Apply</a></li>                
		  <li><a href="uoload.html">About</a></li>
		   <li><a href="download.html">Houses</a></li>
		  <li><a href="uoload.html">Sites</a></li>
		   <li><a href="download.html">Information</a></li>
		    <li><a href="login.php">Login</a></li>
		  <li><a href="Signup.php">Signup</a></li>
         <li><a href="#heading">Contact</a>
            <ul>
               <li><a href="#heading">About Us</a></li>
               <li><a href="#heading">Contact Form</a></li>
           </ul>
        </li>              
      </ul>
</nav>
   <div class="main">
<div class="left">
<div><p><h3> </h3></p></div>
<div class="main">
    <div class="left">
    </div>
    <div class="main">
     
  <div class="content">
  	<?php
	$HouseNumber = $_GET['HouseNumber'];
	
	echo "Welcome, " .$HouseNumber. "! | <a href='houses.php'>Logout</a>";
	?>    
  </div>

        <?php
			$con=mysql_connect("localhost","root","","condominium");
			// Check connection
			if (mysql_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			
			$result = mysql_query($con,"SELECT * FROM house WHERE HouseNumber='$HouseNumber'");
			
			while($row = mysql_fetch_array($result))
			  {
			?>
             <form action="update_house.php?HouseNumber=<?php echo $row['HouseNumber'] ?>" method="POST">
			<table width="250" border="0" align="center">
            
				<tr align="center"><td colspan="2"><b>HOUSE INFORMATION</b></td></tr>
				<tr align="left"><td>BlockNo:</br></td><td><input type="text" name="BlockNo" id="BlockNo" value="<?php echo 					$row['BlockNo'] ?>"></td></tr>
                <tr align="left"><td>House Type:</br></td><td><input type="text" name="HouseType" id="HouseType" value="<?php echo 						 					$row['HouseType'] ?>"></td></tr>
				 <tr align="left"><td>FloorType:</br></td><td><input type="text" name="FloorType" id="FloorType" value="<?php echo 						 					$row['FloorType'] ?>"></td></tr>
                <tr align="left"><td>ServiceType:</br></td><td><input type="text" name="ServiceType" id="ServiceType" value="<?php echo 		 					$row['ServiceType'] ?>"></td></tr>
				            <tr align="left"><td>HouseNumber:</br></td><td><input type="text" name="HouseNumber" id="HouseNumber" value="<?php echo $row['HouseNumber'] ?>"></td></tr>
							
			  		<tr>
					 <td align="right" colspan="2"><input type="submit" name="submit" value="Save"></br></td>
			  		</tr>
			</table>
			</form>
			<?php
			  }
			
			mysqli_close($con);
			?>
    </div>
</div>
<p class="clear">&nbsp;</p>
<!--<h1>Free Web Template #117</h1>-->

<p>This template uses a liquid design.</p>
<p>The web page will expand and contract with the width of the visiting browser.</p>
<p>It will also adjust to the various resolutions of different viewing devices.</p>
<!--<h2>Free Logo</h2>-->
<!--<p>Order a FREE replacement logo for this template <a href="http://www.freeliquidtemplates.com/free-header-image.html">Here</a>.</p>
--></div>
<div class="content">
<!--edit page content here-->
<h1>Your Farm Blog</h1>

<h2>What are you missing?</h2>
<p><img src="images/farm1.jpg" style="display: block; margin: 0 auto" alt="farm image"></p>
<p>If you don't see shaded or raised text on the pages of our templates, you're using an <strong>Internet Explorer</strong> browser. The IE browser is always the last to comply with W3C standards and the latest in HTML/CSS enhancements.</p>
<p>All of the other major browsers are better for viewing web pages these days.</p>
<p>You can download and install all of them for free and improve your browsing experience.</p>
<p>Search your favorite search engine for <strong>Opera, Fire Fox, Google Chrome and Safari</strong> browsers and find out what you're missing!</p>


<h2>Linked Style Sheet</h2>
<p><img src="images/farm2.jpg" style="display: block; margin: 0 auto" alt="farm image"></p>
<p>This web page uses a linked style sheet.</p>
<p>It can be edited with any simple text editor.</p>

<p>It controls things like font size, color, weight and alignment.</p>
<p>Linked style sheets reduce the size of your web page and make your web site easier to manage.</p>
<p>They also make it a lot easier when you decide to do a complete redesign.</p>


</div>
</div>

<footer>
<!--Edit footer here-->
<!--<p>&copy; COPYRIGHT 2014 All Rights Reserved yourdomain.com</p>-->
<p><SCRIPT type="text/javascript">
<!--
var date
date=document.lastModified
document.write("Last Modified: "+date)
// -->
</SCRIPT></br>
Another <a href="http://www.freeliquidtemplates.com">Free Liquid Templates</a> Design</p></footer>
</div>
</body>

</html>
<?php
session_start();
    include('connection.php');
	?>

