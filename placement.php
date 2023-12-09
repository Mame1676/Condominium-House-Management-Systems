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
<html >
<head>
	<meta  />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>DEBREBERHAN CONDOMINUM HOUSE MANAGMENT SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
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
		

			<!-- main -->
				<div class="main">
			
				
				<div class="featured">
					
				</div>
			
			<div class="main">
			<nav id="navigationsub">
				<i style="padding-left:50em"><a href="manageAcc.php?id=<?php echo$user_id?>">Manage Account</a>  |<a href="logout.php" >Logout</a>|<a href="signup.php">signup</a></i>

				<center><h3><b>placement page </b></h3></center>
				<ul>	<li class=""><a href="placement.php">Home</a></li>
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

				<div class="featured">
			<?php
				
				
								$query=mysql_query('select * from applicant WHERE win="no"');
								$TotalAplicants = mysql_num_rows($query);
								
// Total applicant for studio house type
			$ap=mysql_query('SELECT * from applicant WHERE HouseType="studio" AND win="no"');
				$ass = mysql_num_rows($ap);

// Total applicant for 1 bed house type
				$ap1=mysql_query('SELECT * from applicant WHERE HouseType="1 bed" AND win="no"');
				$ass1= mysql_num_rows($ap1);
			

// Total applicant for 2 bed house type
			$ap2=mysql_query('SELECT * from applicant WHERE HouseType="2 bed" AND win="no"');
				$ass2 = mysql_num_rows($ap2);
			
// Total applicant for 3 bed house type
		     $ap3=mysql_query('SELECT * from applicant WHERE HouseType="3 bed" AND win="no"');
				$ass3= mysql_num_rows($ap3);

				$query=mysql_query('select * from applicant WHERE win="no" ');
			$TotalAplicants = mysql_num_rows($query);

				$query1=mysql_query('select * from house WHERE reserved="no" ');
								$totalHouse = mysql_num_rows($query1);

				echo "<table border='1'>
				<th colspan=12 align=center> Information about Applicants and Theire house Selection</th>
								<tr><td>Applicant for studio</td> <td>Applicant for 1 bed</td><td>Applicant for 2 bed</td><td>Applicant for 3 bed</td><td>total applicant</td><td>total house</td></tr>";
								echo "<tr>";
								echo "<td>".$ass."</td>";
								echo "<td>".$ass1."</td>";
								echo "<td>".$ass2."</td>";
								echo "<td>".$ass3."</td>";
								echo "<td>".$TotalAplicants."</td>";
								echo "<td>".$totalHouse."</td>";
								echo  "</tr>";
								echo "</table>";
								
			
//****************************** and Studio Applicants**********************//
				        $winn=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='Studio' AND `house`.`SiteId`='1' AND `winner`.`placed`=''  ORDER BY RAND()");	
						$Towinn = mysql_num_rows($winn);
						//$querysStudiomenaharia=mysql_query('select * from house  where HouseType="Studio" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
						//$HoTotMenST = mysql_num_rows($querysStudiomenaharia);	
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn>0)
						{					
							while($rw3=mysql_fetch_array($winn))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`) VALUES('$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn--;
													}
									//$sql = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`)VALUES ('$WinnerId','$HouseNumber');");
									}
//******************************  1 bed Applicants**********************//
				    $winn1bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='1 bed' AND `house`.`SiteId`='1' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn1bed = mysql_num_rows( $winn1bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn1bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn1bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`) VALUES('$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
									
		//****************************** and 2 bed Applicants**********************//
				    $winn2bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='2 bed' AND `house`.`SiteId`='1' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn2bed = mysql_num_rows( $winn2bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn2bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn2bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`) VALUES('$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
//*****************************3 bed Applicants**********************//
				    $winn3bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='3 bed' AND `house`.`SiteId`='1' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn3bed = mysql_num_rows( $winn3bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$Towinn3bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn3bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`) VALUES('$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
								
	//****************************** and Studio Applicants**********************//
				        $winn=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='Studio' AND `house`.`SiteId`='2' AND `winner`.`placed`=''  ORDER BY RAND()");	
						$Towinn = mysql_num_rows($winn);
						//$querysStudiomenaharia=mysql_query('select * from house  where HouseType="Studio" AND SiteId="2" AND reserved="no" ORDER BY RAND()');
						//$HoTotMenST = mysql_num_rows($querysStudiomenaharia);	
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			  
				if(	$Towinn>0)
						{					
							while($rw3=mysql_fetch_array($winn))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`) VALUES('$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn--;
													}
									//$sql = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`)VALUES ('$WinnerId','$HouseNumber');");
									}
//******************************sunshine and 1 bed Applicants**********************//
				    $winn1bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='1 bed' AND `house`.`SiteId`='2' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn1bed = mysql_num_rows( $winn1bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn1bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn1bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber' ORDER BY RAND()");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
									
		//****************************** and 2 bed Applicants**********************//
				    $winn2bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='2 bed' AND `house`.`SiteId`='2' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn2bed = mysql_num_rows( $winn2bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn2bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn2bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
//****************************** and 3 bed Applicants**********************//
				    $winn3bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='3 bed' AND `house`.`SiteId`='2' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn3bed = mysql_num_rows( $winn3bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$Towinn3bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn3bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`) VALUES('$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 

								
	//******************************Studio Applicants**********************//
				        $winn=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='Studio' AND `house`.`SiteId`='3' AND `winner`.`placed`=''  ORDER BY RAND()");	
						$Towinn = mysql_num_rows($winn);
						//$querysStudiomenaharia=mysql_query('select * from house  where HouseType="Studio" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
						//$HoTotMenST = mysql_num_rows($querysStudiomenaharia);	
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			  
				if(	$Towinn>0)
						{					
							while($rw3=mysql_fetch_array($winn))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn--;
													}
									//$sql = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`)VALUES ('$WinnerId','$HouseNumber');");
									}
//******************************old airport and 1 bed Applicants**********************//
				    $winn1bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='1 bed' AND `house`.`SiteId`='3' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn1bed = mysql_num_rows( $winn1bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn1bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn1bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES(''',$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
									
		//****************************** and 2 bed Applicants**********************//
				    $winn2bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='2 bed' AND `house`.`SiteId`='3' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn2bed = mysql_num_rows( $winn2bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn2bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn2bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
//******************************and 3 bed Applicants**********************//
				    $winn3bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='3 bed' AND `house`.`SiteId`='3' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn3bed = mysql_num_rows( $winn3bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$Towinn3bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn3bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
									
	//***************************and Studio Applicants**********************//
				        $winn=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='Studio' AND `house`.`SiteId`='4' AND `winner`.`placed`=''  ORDER BY RAND()");	
						$Towinn = mysql_num_rows($winn);
						//$querysStudiomenaharia=mysql_query('select * from house  where HouseType="Studio" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
						//$HoTotMenST = mysql_num_rows($querysStudiomenaharia);	
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			  
				if(	$Towinn>0)
						{					
							while($rw3=mysql_fetch_array($winn))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn--;
													}
									//$sql = mysql_query("INSERT INTO `gr`.`placement` (`WinnerId`,`HouseNumber`)VALUES ('$WinnerId','$HouseNumber');");
									}
//***********************and 1 bed Applicants**********************//
				    $winn1bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='1 bed' AND `house`.`SiteId`='4' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn1bed = mysql_num_rows( $winn1bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn1bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn1bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber' ORDER BY RAND()");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
									
		//**************************** and 2 bed Applicants**********************//
				    $winn2bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='2 bed' AND `house`.`SiteId`='4' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn2bed = mysql_num_rows( $winn2bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
			
			   
				if(	$Towinn2bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn2bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber'");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
//******************************3 bed Applicants**********************//
				    $winn3bed=mysql_query("select distinct WinnerId,  HouseNumber from winner, house  where  `house`.`reserved`='no' AND `house`.`HouseType`='3 bed' AND `house`.`SiteId`='4' AND `winner`.`placed`=''  ORDER BY RAND()");	
					$Towinn3bed = mysql_num_rows( $winn3bed);
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$Towinn3bed >0)
						{					
							while($rw3=mysql_fetch_array( $winn3bed))
												{ 
									$WinnerId=$rw3['WinnerId']."<br/>";
									 $HouseNumber=$rw3['HouseNumber']."<br/>";
											//$sqll =mysql_query("select WinnerId from placement ");
									if($WinnerId != "" && $HouseNumber !="") 
										{
									$qry = mysql_query("SELECT * FROM placement WHERE WinnerId='$WinnerId' AND HouseNumber='$HouseNumber'");
									if($qry)
										 {
									if(mysql_num_rows($qry) > 0) {
									echo "placed already";
								  exit();
									}
								}
								else {
									die("Query failed");
								}
							}
											
										$sqll = mysql_query("INSERT INTO `gr`.`placement` (place_id,`WinnerId`,`HouseNumber`) VALUES('','$WinnerId','$HouseNumber');");
										
												if($sqll)
											{
					$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` ='$HouseNumber'");
					$sqlupp2 = mysql_query("UPDATE `gr`.`winner` SET `placed` = 'yes' WHERE `winner`.`WinnerId` ='$WinnerId'");
											}
										$Towinn1bed --;
													}
									} 
								
	?>
		
<form  method="post" action="placement.php" style="border:outset" name="form1">
<table   width="335" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
<tr>
	<th width="523" height="51" colspan=2 style="border-bottom:1px green solid;padding-top:10px;padding-bottom:10px "> placemnt registration  Form </th>
</tr>
  <th colspan="2"><input type="submit" style="height:35px;width:120px"  value="Place Winner" name="sub"></th>
</table>
</form>			
				</div>
			
			
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
