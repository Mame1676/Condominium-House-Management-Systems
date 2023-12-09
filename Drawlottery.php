<?php
session_start();
error_reporting(0);
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
	<title>HOSSANA CITY CONDOMINUM HOUSE MANAGMENT SYSTEM </title>
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

				<!-- navigaation -->
		
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
				<center><h3><b>Lottery Drawing Page</b></h3></center>
				<ul><li class=""><a href="index.php">Home</a></li>
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

				<div class="featured">
				
				<center><form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="form1">
<table  height="126" width="406" style="border-top:1px black solid;border-bottom:1px black solid;" cellspacing="0">
<tr>
	<th height="51" colspan=2 style="border-bottom:1px green solid;padding-top:10px;padding-bottom:10px ">Drawing  Form </th></tr>
	<tr><td width="129">Site Name</td>
	<td width="517">
			<select name="SiteName" id="SiteName" class="input">
			<option value="0">----Select Site Name-----</option>
			<option value="site1">site1</option>
			<option value="site2">site2</option>
			<option value="site3">site3</option>
			<option value="site4">site4</option>
			</select>
	
	</td></tr>
	<tr>
	  <td>House Type </td><td>
			<select name="HouseType" id="HOuseType" class="input">
			<option value="0">----Select house Type-----</option>
			<option value="Studio">Studio</option>
			<option value="1 bed">1 bed</option>
			<option value="2 bed">2 bed</option>
			<option value="3 bed">3 bed</option>
			</select>
	</td></tr>
    <th colspan="2"><input type="submit" style="height:35px;width:120px"  value="Draw lottery" name="sub"></th>
  </table>
  <?php
				include('connection.php');
				
								$query=mysql_query('select * from applicant WHERE win="no" ');
								$TotalAplicants = mysql_num_rows($query);
									$query=mysql_query('select * from winner');
								
								
								
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
								
			//calculates house for normal applicant
									//echo "HOUSE FOR ALL=".$HouseNormal."\n";
								
									//echo "Normal Applicant=".$ApplicantNormal."\n";						
							
//******************************site and Studio Applicants**********************//
		$aplSTMen=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenST = mysql_num_rows($aplSTMen);
		$querysStudiomenaharia=mysql_query('select * from house  where HouseType="Studio" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenST = mysql_num_rows($querysStudiomenaharia);
		
						//female who are applied for studio at site1
		$aplSTMenFemale=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplSTMenFemale);
						
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenST == $ApConutTotMenST)
						{
							while($rw1=mysql_fetch_array($aplSTMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotMenST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudiomenaharia))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotMenST--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										//$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							// echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site 1*********************//			
				if(	$HoTotMenST < $ApConutTotMenST)
					{
					$app=array();
					echo "list of winners";
					if($aplSTMenFemale){
					
					/*while($rw1=mysql_fetch_array($aplSTMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 if($aplSTMenFemale>0){
								 	$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$aplSTMenFemale--;
									$ApConutTotMenST--;
									$HoTotMenST--;
									 if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
					}}*/
					//some code here to give prority for womens
					}
					while($rw1=mysql_fetch_array($aplSTMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotMenST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotMenST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								
								//echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotMenST > $ApConutTotMenST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
							
									 if($ApConutTotMenST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotMenST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}				
			
			
			
		








		
			
//*****************************site 1 and 1 bed Applicants**********************//
		$aplonebedMen=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenOnebed = mysql_num_rows($aplonebedMen);
		$queryOnebedsite1=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenOnebed = mysql_num_rows($queryOnebedsite1);
		
						//female who are applied for studio at site 1
		$aplOnebedMenFemale=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedMenFemale);
						
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenOnebed == $ApConutTotMenOnebed)
						{
							while($rw1=mysql_fetch_array($aplonebedMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotMenOnebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedsite1))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotMenOnebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ********************//			
				if(	$HoTotMenOnebed < $ApConutTotMenOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplonebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotMenOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotMenOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site =********************//			
				if(	$HoTotMenOnebed > $ApConutTotMenOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplonebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($ApConutTotMenOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotMenOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
		
		
		
		
//******************************site 1 and 2 bed Applicants**********************//
		$aplTwobedMen=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenTwobed = mysql_num_rows($aplTwobedMen);
		$queryTwobedsite1=mysql_query('select * from house  where HouseType="2 bed" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenTwobed = mysql_num_rows($queryTwobedsite1);
//female who are applied for studio at meneharia
		$aplTwobedMenFemale=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplTwobedMenFemale);
				
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenTwobed == $ApConutTotMenTwobed)
						{
							while($rw1=mysql_fetch_array($aplTwobedMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotMenTwobed>0)
										 {
								 while($rw2=mysql_fetch_array($queryTwobedsite1))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotMenTwobed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotMenTwobed < $ApConutTotMenTwobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotMenTwobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotMenTwobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE less THAN THE NUMBER OF HOUSES site*********************//			
				if(	$HoTotMenTwobed > $ApConutTotMenTwobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  
									 if($ApConutTotMenTwobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotMenTwobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
}		



		
//******************************site1 and 3 bed Applicants**********************//
		$aplThreebedMen=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenThreebed = mysql_num_rows($aplThreebedMen);
		$queryThreebedsite1=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenThreebed = mysql_num_rows($queryThreebedsite1);
//female who are applied for studio at site1
		$aplThreebedMenFemale=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedMenFemale);
		
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenThreebed == $ApConutTotMenThreebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 
										 if($ApConutTotMenThreebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedsite1))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql3 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotMenThreebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp3 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ********************//			
				if(	$HoTotMenThreebed < $ApConutTotMenThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotMenThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotMenThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site********************//			
				if(	$HoTotMenThreebed > $ApConutTotMenThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 
									 if($ApConutTotMenThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotMenThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
	
				
			/*                              studio houses information in site*/	
		$querystudioGround=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground" AND SiteId="1"');	
		$countquerystudioground=mysql_num_rows($querystudioGround);
		
		$querystudioGroundOne=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+1" AND SiteId="1"');	
		$countquerystudiogroundOne=mysql_num_rows($querystudioGroundOne);
		
		
		$querystudioGroundTwo=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+2" AND SiteId="1"');	
		$countquerystudiogroundTwo=mysql_num_rows($querystudioGroundTwo);
		
		$querystudioGroundThree=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+3" AND SiteId="1"');	
		$countquerystudiogroundThree=mysql_num_rows($querystudioGroundThree);
		
		$querystudioGroundFour=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+4" AND SiteId="1"');	
		$countquerystudiogroundFour=mysql_num_rows($querystudioGroundFour);
		
		
				
								
//******************************                    **********************//
//***************************** and Studio Applicants**********************//
//******************************                      **********************//
		$aplSTsite2=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="2" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite2ST = mysql_num_rows($aplSTsite2);
		$querysStudiosite2=mysql_query('select * from house  where HouseType="Studio" AND SiteId="2" AND reserved="no" ORDER BY RAND()');
		$HoTotsite2ST = mysql_num_rows($querysStudiosite2);
		
		//female who are applied for studio at site 1 
		$aplSTsite2Female=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="2" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplSTsite2Female);
						
						
						
//***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite2ST == $ApConutTotsite2ST)
						{
							while($rw1=mysql_fetch_array($aplSTsite2))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotsite2ST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudiosite2))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite2ST--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site********************//			
				if(	$HoTotsite2ST < $ApConutTotsite2ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite2) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite2ST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite2ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite2ST > $ApConutTotsite2ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite2) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($ApConutTotsite2ST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite2ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
//******************************site2shine and 1 bed Applicants**********************//
		$aplOnebedsite2=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="2" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite2Onebed = mysql_num_rows($aplOnebedsite2);
		$queryOnebedsite2=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="2" AND reserved="no" ORDER BY RAND()');
		$HoTotsite2Onebed = mysql_num_rows($queryOnebedsite2);
		
						//female who are applied for studio at site2eharia
		$aplOnebedsite2Female=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="2" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedsite2Female);
						
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite2Onebed == $ApConutTotsite2Onebed)
						{
							while($rw1=mysql_fetch_array($aplOnebedsite2))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotsite2Onebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedsite2))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite2Onebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite2ST == $ApConutTotsite2ST) statesite2ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ********************//			
				if(	$HoTotsite2Onebed < $ApConutTotsite2Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite2) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite2Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite2Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site*********************//			
				if(	$HoTotsite2Onebed > $ApConutTotsite2Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite2) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($ApConutTotsite2Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite2Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
		
		
//******************************site2shine and 3 bed Applicants**********************//
		$aplThreebedsite2=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="2" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite2Threebed = mysql_num_rows($aplThreebedsite2);
		$queryThreebedsite2=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="2" AND reserved="no" ORDER BY RAND()');
		$HoTotsite2Threebed = mysql_num_rows($queryThreebedsite2);
//female who are applied for studio at site2eharia
		$aplThreebedsite2Female=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="2" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedsite2Female);
				
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite2Threebed == $ApConutTotsite2Threebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedsite2))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										  
										 if($ApConutTotsite2Threebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedsite2))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql3 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite2Threebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp3 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite2ST == $ApConutTotsite2ST) statesite2ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ********************//			
				if(	$HoTotsite2Threebed < $ApConutTotsite2Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite2) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
							
									 if($HoTotsite2Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite2Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ******************//			
				if(	$HoTotsite2Threebed > $ApConutTotsite2Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite2) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 
									 if($ApConutTotsite2Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite2Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
	}
	
	/*                              studio houses information in site */	
		$querystudioGround=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground" AND SiteId="2"');	
		$countquerystudioground=mysql_num_rows($querystudioGround);
		
		$querystudioGroundOne=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+1" AND SiteId="2"');	
		$countquerystudiogroundOne=mysql_num_rows($querystudioGroundOne);
		
		
		$querystudioGroundTwo=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+2" AND SiteId="2"');	
		$countquerystudiogroundTwo=mysql_num_rows($querystudioGroundTwo);
		
		$querystudioGroundThree=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+3" AND SiteId="2"');	
		$countquerystudiogroundThree=mysql_num_rows($querystudioGroundThree);
		
		$querystudioGroundFour=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+4" AND SiteId="2"');	
		$countquerystudiogroundFour=mysql_num_rows($querystudioGroundFour);
		
		
					
//******************************                    **********************//
//************************* Studio Applicants in site 3 **********************//
//******************************                      **********************//
		$aplSTsite3=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite3ST = mysql_num_rows($aplSTsite3);
		$querysStudiosite3=mysql_query('select * from house  where HouseType="Studio" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotsite3ST = mysql_num_rows($querysStudiosite3);
		//female who are applied for studio at site3 
		$aplSTsite3Female=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplSTsite3Female);
						
//***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite3ST == $ApConutTotsite3ST)
						{
							while($rw1=mysql_fetch_array($aplSTsite3))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 
										 if($ApConutTotsite3ST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudiosite3))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite3ST--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite3ST == $ApConutTotsite3ST) statesite3ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite3ST < $ApConutTotsite3ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite3ST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite3ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES*******************//			
				if(	$HoTotsite3ST > $ApConutTotsite3ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  
									 if($ApConutTotsite3ST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite3ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}				
			
			
			
			
			
//******************************site3 site3 and 1 bed Applicants**********************//
		$aplOnebedsite3=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite3Onebed = mysql_num_rows($aplOnebedsite3);
		$queryOnebedsite2=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotsite3Onebed = mysql_num_rows($queryOnebedsite2);
		
						//female who are applied for studio at site3eharia
		$aplOnebedsite3Female=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedsite3Female);
					
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite3Onebed == $ApConutTotsite3Onebed)
						{
							while($rw1=mysql_fetch_array($aplOnebedsite3))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 
										 if($ApConutTotsite3Onebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedsite2))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite3Onebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite3ST == $ApConutTotsite3ST) statesite3ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site*********************//			
				if(	$HoTotsite3Onebed < $ApConutTotsite3Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite3Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite3Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite3Onebed > $ApConutTotsite3Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 
									 if($ApConutTotsite3Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite3Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
		
		
		
		
//******************************site3 site3 and 2 bed Applicants**********************//
		$aplTwobedsite3=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite3Twobed = mysql_num_rows($aplTwobedsite3);
		$queryTwobedsite3=mysql_query('select * from house  where HouseType="2 bed" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotsite3Twobed = mysql_num_rows($queryTwobedsite3);
//female who are applied for studio at site3eharia
		$aplTwobedsite3Female=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplTwobedsite3Female);
				
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite3Twobed == $ApConutTotsite3Twobed)
						{
							while($rw1=mysql_fetch_array($aplTwobedsite3))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotsite3Twobed>0)
										 {
								 while($rw2=mysql_fetch_array($queryTwobedsite3))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite3Twobed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite3ST == $ApConutTotsite3ST) statesite3ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite3Twobed < $ApConutTotsite3Twobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
							
									 if($HoTotsite3Twobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite3Twobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite3Twobed > $ApConutTotsite3Twobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($ApConutTotsite3Twobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite3Twobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
}		



		
//******************************site3 site3 and 3 bed Applicants**********************//
		$aplThreebedsite3=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite3Threebed = mysql_num_rows($aplThreebedsite3);
		$queryThreebedsite3site3=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotsite3Threebed = mysql_num_rows($queryThreebedsite3site3);
//female who are applied for studio at site3eharia
		$aplThreebedsite3Female=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedsite3Female);
				
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite3Threebed == $ApConutTotsite3Threebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedsite3))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotsite3Threebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedsite3site3))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql3 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite3Threebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp3 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite3ST == $ApConutTotsite3ST) statesite3ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ********************//			
				if(	$HoTotsite3Threebed < $ApConutTotsite3Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite3Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite3Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite3Threebed > $ApConutTotsite3Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite3) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
							
									 if($ApConutTotsite3Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite3Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
	}
	
	/*                              studio houses information in site site3*/	
		$querystudioGround=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground" AND SiteId="3"');	
		$countquerystudioground=mysql_num_rows($querystudioGround);
		
		$querystudioGroundOne=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+1" AND SiteId="3"');	
		$countquerystudiogroundOne=mysql_num_rows($querystudioGroundOne);
		
		
		$querystudioGroundTwo=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+2" AND SiteId="3"');	
		$countquerystudiogroundTwo=mysql_num_rows($querystudioGroundTwo);
		
		$querystudioGroundThree=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+3" AND SiteId="3"');	
		$countquerystudiogroundThree=mysql_num_rows($querystudioGroundThree);
		
		$querystudioGroundFour=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+4" AND SiteId="3"');	
		$countquerystudiogroundFour=mysql_num_rows($querystudioGroundFour);
		
		
				
//******************************                    **********************//
//******************************site4  and Studio Applicants**********************//
//******************************                      **********************//
		$aplSTsite4=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="4" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite4ST = mysql_num_rows($aplSTsite4);
		$querysStudiosite4=mysql_query('select * from house  where HouseType="Studio" AND SiteId="4" AND reserved="no" ORDER BY RAND()');
		$HoTotsite4ST = mysql_num_rows($querysStudiosite4);
		//female who are applied for studio at site4eharia
		$aplSTsite4Female=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="4" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplSTsite4Female);
						
//***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4ST == $ApConutTotsite4ST)
						{
							while($rw1=mysql_fetch_array($aplSTsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotsite4ST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudiosite4))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite4ST--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ********************//			
				if(	$HoTotsite4ST < $ApConutTotsite4ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite4ST>0)
												 {
								$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite4ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite4ST > $ApConutTotsite4ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($ApConutTotsite4ST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite4ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}				
			
			
			
			
			
//******************************site4  and 1 bed Applicants**********************//
		$aplOnebedsite4=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="4" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite4Onebed = mysql_num_rows($aplOnebedsite4);
		$queryOnebedsite4=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="4" AND reserved="no" ORDER BY RAND()');
		$HoTotsite4Onebed = mysql_num_rows($queryOnebedsite4 );
		
						//female who are applied for studio at site 4 
		$aplOnebedsite4Female=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="4" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedsite4Female);
					
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4Onebed == $ApConutTotsite4Onebed)
						{
							while($rw1=mysql_fetch_array($aplOnebedsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotsite4Onebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedsite4))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite4Onebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site ********************//			
				if(	$HoTotsite4Onebed < $ApConutTotsite4Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite4Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite4Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site *********************//			
				if(	$HoTotsite4Onebed > $ApConutTotsite4Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 
									 if($ApConutTotsite4Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite4Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}	
		
		
		
		
//******************************site4  and 2 bed Applicants**********************//
		$queryOnebedsite4=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="4" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite4Twobed = mysql_num_rows($queryOnebedsite4);
		$queryTwobedsite4=mysql_query('select * from house  where HouseType="2 bed" AND SiteId="4" AND reserved="no" ORDER BY RAND()');
		$HoTotsite4Twobed = mysql_num_rows($queryTwobedsite4 );
//female who are applied for studio at site4eharia
		$queryOnebedsite4Female=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="4" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($queryOnebedsite4Female);
			
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4Twobed == $ApConutTotsite4Twobed)
						{
							while($rw1=mysql_fetch_array($queryOnebedsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										
										 if($ApConutTotsite4Twobed>0)
										 {
								 while($rw2=mysql_fetch_array($queryTwobedsite4))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite4Twobed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site  *********************//			
				if(	$HoTotsite4Twobed < $ApConutTotsite4Twobed)
					{
					$app=array();
					//echo "list of winners";
					while($rw1=mysql_fetch_array($queryOnebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($HoTotsite4Twobed>0)
												 {
								$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite4Twobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site a *********************//			
				if(	$HoTotsite4Twobed > $ApConutTotsite4Twobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($queryOnebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($ApConutTotsite4Twobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite4Twobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
}		
		
//******************************site4  and 3 bed Applicants**********************//
		$aplThreebedsite4=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="4" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite4Threebed = mysql_num_rows($aplThreebedsite4);
		$queryThreebedsite4=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="4" AND reserved="no" ORDER BY RAND()');
		$HoTotsite4Threebed = mysql_num_rows($queryThreebedsite4 );
//female who are applied for studio at site4eharia
		$aplThreebedsite4Female=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="4" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedsite4Female);
				
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4Threebed == $ApConutTotsite4Threebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
									
										 if($ApConutTotsite4Threebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedsite4))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
if($sql){
$sql3 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotsite4Threebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp3 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							//echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site  *********************//			
				if(	$HoTotsite4Threebed < $ApConutTotsite4Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
							
									 if($HoTotsite4Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$HoTotsite4Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site*******************//			
				if(	$HoTotsite4Threebed > $ApConutTotsite4Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								
									 if($ApConutTotsite4Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`)VALUES ('$ApplicantId');");
									$ApConutTotsite4Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								//echo "no applicant ";								
	}
	
	/*                              studio houses information in site site4aharia*/	
		$querystudioGround=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground" AND SiteId="4"');	
		$countquerystudioground=mysql_num_rows($querystudioGround);
		
		$querystudioGroundOne=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+1" AND SiteId="4"');	
		$countquerystudiogroundOne=mysql_num_rows($querystudioGroundOne);
		
		
		$querystudioGroundTwo=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+2" AND SiteId="4"');	
		$countquerystudiogroundTwo=mysql_num_rows($querystudioGroundTwo);
		
		$querystudioGroundThree=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+3" AND SiteId="4"');	
		$countquerystudiogroundThree=mysql_num_rows($querystudioGroundThree);
		
		$querystudioGroundFour=mysql_query('select * from house  where HouseType="Studio" AND FloorType="Ground+4" AND SiteId="4"');	
		$countquerystudiogroundFour=mysql_num_rows($querystudioGroundFour);
		
				
	?>
</form>	</center>		
				</div>
			
			
			<div class="cl">&nbsp;</div>
			
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
