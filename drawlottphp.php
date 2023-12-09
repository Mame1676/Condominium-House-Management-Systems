<?php
				include('connection.php');
				
								$query=mysql_query('select * from applicant');
								$TotalAplicants = mysql_num_rows($query);
								
								
// Total applicant for studio house type
				$applicantstudio=mysql_query('select Gender from applicant WHERE HouseType="Studio"');
				$appstudio = mysql_num_rows($applicantstudio);

// Total applicant for 1 bed house type
				$applicants1bed=mysql_query('select Gender from applicant WHERE HouseType="1 bed" ');
				$apps1bed = mysql_num_rows($applicants1bed);

// Total applicant for 2 bed house type
			$applicants12bed=mysql_query('select Gender from applicant WHERE HouseType="2 bed" ');
			$apps2bed = mysql_num_rows($applicants12bed);
			
// Total applicant for 3 bed house type
			$applicants13bed=mysql_query('select Gender from applicant WHERE HouseType="3 bed" ');
			$apps3bed = mysql_num_rows($applicants13bed);

				echo "<table border='1'>
				<th colspan=12 align=center> Information about Applicants and Theire house Selection</th>
								<tr><td>Applicant for studio</td> <td>Applicant for 1 bed</td><td>Applicant for 2 bed</td><td>Applicant for 3 bed</td></tr>";
								echo "<tr>";
								echo "<td>".$appstudio."</td>";
								echo "<td>".$apps1bed."</td>";
								echo "<td>".$apps2bed."</td>";
								echo "<td>".$apps3bed."</td>";
								echo  "</tr>";
								echo "</table>";
								
			
					//echo "$TotalAplicants Applicants\n";
								 
								$queryFemale=mysql_query('select Gender from applicant WHERE Gender="Female" ');
								$TotalFemals = mysql_num_rows($queryFemale);
					//echo "$TotalFemals Females\n";
							
								$queryDisable=mysql_query('select PhysicalStatus from applicant WHERE PhysicalStatus="Disable" ');
								$TotalDisable = mysql_num_rows($queryDisable);
					//echo "$TotalDisable Disable applicants\n";
								$queryId=mysql_query('select distinct ApplicantId from applicant ');
								$WinnerId = mysql_num_rows($queryId);
					// count total studio								
								$querystudio=mysql_query('select * from house  where HouseType="Studio"');
								$Totalstudio = mysql_num_rows($querystudio);
					// count total 1 bed
								$querys1bed=mysql_query('select * from house  where HouseType="1 bed"');
								$Total1bed = mysql_num_rows($querys1bed);
								
					// count total 2 bed
								$querys2bed=mysql_query('select * from house  where HouseType="2 bed"');
								$Total2bed = mysql_num_rows($querys2bed); 
								
					// count total 3 bed
								$query3bed=mysql_query('select * from house  where HouseType="3 bed"');
								$Total3bed = mysql_num_rows($query3bed);
					
						 		$query1=mysql_query('select * from house');
								$totalHouse = mysql_num_rows($query1);
									//echo "\n $totalHouse  are the Total Houses\n";
								$HouseFemale=ceil((20*$totalHouse)/100);
									//echo $HouseFemale."\n";
								$HouseAll=$totalHouse-$HouseFemale;
								   	//echo " \n House All=".$HouseAll." \n";
								
									//echo "  \n house for female=".$HouseFemale." \n";
								$femalepercent=ceil((20*$totalHouse)/100);//calculates the total houses required to female people in percent
									//echo "totalhouse for Female=".$femalepercent." \n";
								$disablepercent=ceil((20*$totalHouse)/100);//calculates the total houses required to disable people in percent
									//echo "totalhouse for Disable=".$disablepercent." \n";
								$HouseNormal=($totalHouse-($disablepercent+$femalepercent));//calculates house for normal applicant
									//echo "HOUSE FOR ALL=".$HouseNormal."\n";
								$ApplicantNormal=($totalHouse-($TotalDisable+$TotalFemals));// calculates normal applicants 
									//echo "Normal Applicant=".$ApplicantNormal."\n";						
									echo "<table border='1'>
									<th colspan=12 align=center> Information about Applicants and Houses Available to Applicants</th>
								<tr> <td>Total Applicant</td><td>Total House</td><td>Total Female</td><td>Total Disable</td>  <td>Total Normal Applicant</td>   <td>House For Normal Applicant </td>   <td>House for Disable 20% </td>  <td>House for Female 20% </td>  <td>Studio </td><td>1 bed </td> <td>2 bed </td> <td>3 bed </td></tr>";
								echo "<tr>";
								echo "<td>".$TotalAplicants."</td>";
								echo "<td>".$totalHouse."</td>";
								echo "<td>".$TotalFemals."</td>";
								echo "<td>".$TotalDisable."</td>";
								echo "<td>".$ApplicantNormal."</td>";
								echo "<td>".$HouseNormal."</td>";
								echo "<td>".$disablepercent."</td>";
								echo "<td>".$femalepercent."</td>";
								echo "<td>".$Totalstudio."</td>";
								echo "<td>".$Total1bed."</td>";
								echo "<td>".$Total2bed."</td>";
								echo "<td>".$Total3bed."</td>";
								echo  "</tr>";
								echo "</table>";
//******************************site1 and Studio Applicants**********************//
		$aplSTMen=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenST = mysql_num_rows($aplSTMen);
		$querysStudiomenaharia=mysql_query('select * from house  where HouseType="Studio" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenST = mysql_num_rows($querysStudiomenaharia);
		
						//female who are applied for studio at meneharia
		$aplSTMenFemale=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplSTMenFemale);
						echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenST == $ApConutTotMenST)
						{
							while($rw1=mysql_fetch_array($aplSTMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email= $rw1['Email'];
										 if($ApConutTotMenST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudiomenaharia))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
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
								  $Email= $rw1['Email'];
									 if($HoTotMenST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotMenST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
				if(	$HoTotMenST > $ApConutTotMenST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotMenST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotMenST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}				
			
			
			
			
			
//******************************site1 and 1 bed Applicants**********************//
		$aplonebedMen=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenOnebed = mysql_num_rows($aplonebedMen);
		$queryOnebedmenaharia=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenOnebed = mysql_num_rows($queryOnebedmenaharia);
		
						//female who are applied for studio at meneharia
		$aplOnebedMenFemale=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedMenFemale);
						echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenOnebed == $ApConutTotMenOnebed)
						{
							while($rw1=mysql_fetch_array($aplonebedMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotMenOnebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedmenaharia))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
				if(	$HoTotMenOnebed < $ApConutTotMenOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplonebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotMenOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotMenOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
				if(	$HoTotMenOnebed > $ApConutTotMenOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplonebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotMenOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotMenOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
		
		
//******************************site1 and 2 bed Applicants**********************//
		$aplTwobedMen=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenTwobed = mysql_num_rows($aplTwobedMen);
		$queryTwobedmenaharia=mysql_query('select * from house  where HouseType="2 bed" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenTwobed = mysql_num_rows($queryTwobedmenaharia);
//female who are applied for studio at meneharia
		$aplTwobedMenFemale=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplTwobedMenFemale);
				echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenTwobed == $ApConutTotMenTwobed)
						{
							while($rw1=mysql_fetch_array($aplTwobedMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotMenTwobed>0)
										 {
								 while($rw2=mysql_fetch_array($queryTwobedmenaharia))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
				if(	$HoTotMenTwobed < $ApConutTotMenTwobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotMenTwobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotMenTwobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
				if(	$HoTotMenTwobed > $ApConutTotMenTwobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($ApConutTotMenTwobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotMenTwobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
}		



		
//******************************site1 and 3 bed Applicants**********************//
		$aplThreebedMen=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="1" AND win="no" ORDER BY RAND()');	
		$ApConutTotMenThreebed = mysql_num_rows($aplThreebedMen);
		$queryThreebedmenaharia=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="1" AND reserved="no" ORDER BY RAND()');
		$HoTotMenThreebed = mysql_num_rows($queryThreebedmenaharia);
//female who are applied for studio at meneharia
		$aplThreebedMenFemale=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="1" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedMenFemale);
				echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotMenThreebed == $ApConutTotMenThreebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedMen))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotMenThreebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedmenaharia))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
				if(	$HoTotMenThreebed < $ApConutTotMenThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotMenThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotMenThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site1*********************//			
				if(	$HoTotMenThreebed > $ApConutTotMenThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedMen) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								   $Email=$rw1['Email'];
									 if($ApConutTotMenThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotMenThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
	
				
			/*                              studio houses information in site menaharia*/	
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
		
		
				echo "<table border='1'>
				<th colspan=5> List Floor Type For Studio in site1.</th>
								<tr><td>Total Ground</td><td>Total G+1</td><td>Total G+2</td>  <td>Total G+3</td>   <td>Total G+4 </td> </tr>";
								echo "<tr>";
								echo "<td>".$countquerystudioground."</td>";
								echo "<td>".$countquerystudiogroundOne."</td>";
								echo "<td>".$countquerystudiogroundTwo."</td>";
								echo "<td>".$countquerystudiogroundThree."</td>";
								echo "<td>".$countquerystudiogroundFour."</td>";
								echo  "</tr>";
								echo "</table>";
								
//******************************                    **********************//
//******************************site2 and Studio Applicants**********************//
//******************************                      **********************//
		$aplSTSun=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="2" AND win="no" ORDER BY RAND()');	
		$ApConutTotSunST = mysql_num_rows($aplSTSun);
		$querysStudiosunshine=mysql_query('select * from house  where HouseType="Studio" AND SiteId="2" AND reserved="no" ORDER BY RAND()');
		$HoTotSunST = mysql_num_rows($querysStudiosunshine);
		
		//female who are applied for studio at meneharia
		$aplSTSunFemale=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="2" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplSTSunFemale);
						echo "Female=====".$TotalFemale."<br/>";
						
						
//***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotSunST == $ApConutTotSunST)
						{
							while($rw1=mysql_fetch_array($aplSTSun))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotSunST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudiosunshine))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotSunST--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							echo "no applicant ";			
		}//end of the if(	$HoTotMenST == $ApConutTotMenST) statements								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site2*********************//			
				if(	$HoTotSunST < $ApConutTotSunST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTSun) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($HoTotSunST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotSunST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site2*********************//			
				if(	$HoTotSunST > $ApConutTotSunST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTSun) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($ApConutTotSunST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotSunST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
//******************************site2 and 1 bed Applicants**********************//
		$aplOnebedSun=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="2" AND win="no" ORDER BY RAND()');	
		$ApConutTotSunOnebed = mysql_num_rows($aplOnebedSun);
		$queryOnebedsite2=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="2" AND reserved="no" ORDER BY RAND()');
		$HoTotSunOnebed = mysql_num_rows($queryOnebedsite2);
		
						//female who are applied for studio at Suneharia
		$aplOnebedSunFemale=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="2" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedSunFemale);
						echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotSunOnebed == $ApConutTotSunOnebed)
						{
							while($rw1=mysql_fetch_array($aplOnebedSun))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotSunOnebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedsite2))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotSunOnebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							echo "no applicant ";			
		}//end of the if(	$HoTotSunST == $ApConutTotSunST) stateSunts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site2*********************//			
				if(	$HoTotSunOnebed < $ApConutTotSunOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedSun) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($HoTotSunOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotSunOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site2*********************//			
				if(	$HoTotSunOnebed > $ApConutTotSunOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedSun) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($ApConutTotSunOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotSunOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
//******************************site2 and 3 bed Applicants**********************//
		$aplThreebedSun=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="2" AND win="no" ORDER BY RAND()');	
		$ApConutTotSunThreebed = mysql_num_rows($aplThreebedSun);
		$queryThreebedsite2=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="2" AND reserved="no" ORDER BY RAND()');
		$HoTotSunThreebed = mysql_num_rows($queryThreebedsite2);
//female who are applied for studio at Suneharia
		$aplThreebedSunFemale=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="2" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedSunFemale);
				echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotSunThreebed == $ApConutTotSunThreebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedSun))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										  $Email=$rw1['Email'];
										 if($ApConutTotSunThreebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedsite2))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
if($sql){
$sql3 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotSunThreebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp3 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							echo "no applicant ";			
		}//end of the if(	$HoTotSunST == $ApConutTotSunST) stateSunts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site2*********************//			
				if(	$HoTotSunThreebed < $ApConutTotSunThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedSun) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotSunThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotSunThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site2*********************//			
				if(	$HoTotSunThreebed > $ApConutTotSunThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedSun) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($ApConutTotSunThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotSunThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
	}
	
	/*                              studio houses information in site Sunaharia*/	
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
		
		
				echo "<table border='1'>
				<th colspan=5> List Floor Type For Studio in site2.</th>
								<tr><td>Total Ground</td><td>Total G+1</td><td>Total G+2</td>  <td>Total G+3</td>   <td>Total G+4 </td> </tr>";
								echo "<tr>";
								echo "<td>".$countquerystudioground."</td>";
								echo "<td>".$countquerystudiogroundOne."</td>";
								echo "<td>".$countquerystudiogroundTwo."</td>";
								echo "<td>".$countquerystudiogroundThree."</td>";
								echo "<td>".$countquerystudiogroundFour."</td>";
								echo  "</tr>";
								echo "</table>";	
//******************************                    **********************//
//******************************site3 and Studio Applicants**********************//
//******************************                      **********************//
		$aplSTOLD=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotOLDST = mysql_num_rows($aplSTOLD);
		$querysStudioOldairport=mysql_query('select * from house  where HouseType="Studio" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotOLDST = mysql_num_rows($querysStudioOldairport);
		//female who are applied for studio at OLDeharia
		$aplSTOLDFemale=mysql_query('select * from applicant  where HouseType="Studio" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplSTOLDFemale);
						echo "Female=====".$TotalFemale."<br/>";
//***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotOLDST == $ApConutTotOLDST)
						{
							while($rw1=mysql_fetch_array($aplSTOLD))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										  $Email=$rw1['Email'];
										 if($ApConutTotOLDST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudioOldairport))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotOLDST--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							echo "no applicant ";			
		}//end of the if(	$HoTotOLDST == $ApConutTotOLDST) stateOLDts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDST < $ApConutTotOLDST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($HoTotOLDST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotOLDST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDST > $ApConutTotOLDST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								  $Email=$rw1['Email'];
									 if($ApConutTotOLDST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotOLDST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}				
			
			
			
			
			
//******************************site3 and 1 bed Applicants**********************//
		$aplOnebedOLD=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotOLDOnebed = mysql_num_rows($aplOnebedOLD);
		$queryOnebedOldairport=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotOLDOnebed = mysql_num_rows($queryOnebedOldairport);
		
						//female who are applied for studio at OLDeharia
		$aplOnebedOLDFemale=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedOLDFemale);
						echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotOLDOnebed == $ApConutTotOLDOnebed)
						{
							while($rw1=mysql_fetch_array($aplOnebedOLD))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotOLDOnebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedOldairport))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotOLDOnebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							echo "no applicant ";			
		}//end of the if(	$HoTotOLDST == $ApConutTotOLDST) stateOLDts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDOnebed < $ApConutTotOLDOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotOLDOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotOLDOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDOnebed > $ApConutTotOLDOnebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotOLDOnebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotOLDOnebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
		
		
//******************************site3 and 2 bed Applicants**********************//
		$aplTwobedOLD=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotOLDTwobed = mysql_num_rows($aplTwobedOLD);
		$queryTwobedOldairport=mysql_query('select * from house  where HouseType="2 bed" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotOLDTwobed = mysql_num_rows($queryTwobedOldairport);
//female who are applied for studio at OLDeharia
		$aplTwobedOLDFemale=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplTwobedOLDFemale);
				echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotOLDTwobed == $ApConutTotOLDTwobed)
						{
							while($rw1=mysql_fetch_array($aplTwobedOLD))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotOLDTwobed>0)
										 {
								 while($rw2=mysql_fetch_array($queryTwobedOldairport))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
if($sql){
$sql2 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotOLDTwobed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp2 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							echo "no applicant ";			
		}//end of the if(	$HoTotOLDST == $ApConutTotOLDST) stateOLDts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDTwobed < $ApConutTotOLDTwobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotOLDTwobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotOLDTwobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDTwobed > $ApConutTotOLDTwobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotOLDTwobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotOLDTwobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
}		



		
//******************************site3 and 3 bed Applicants**********************//
		$aplThreebedOLD=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="3" AND win="no" ORDER BY RAND()');	
		$ApConutTotOLDThreebed = mysql_num_rows($aplThreebedOLD);
		$queryThreebedOldairport=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="3" AND reserved="no" ORDER BY RAND()');
		$HoTotOLDThreebed = mysql_num_rows($queryThreebedOldairport);
//female who are applied for studio at OLDeharia
		$aplThreebedOLDFemale=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="3" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedOLDFemale);
				echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotOLDThreebed == $ApConutTotOLDThreebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedOLD))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotOLDThreebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedOldairport))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
if($sql){
$sql3 = mysql_query("UPDATE`gr`.`winner` SET `SiteId`=$sitId,`HouseNumber`=$HouseNumber,`BlockNo`=$BlockNo;");
}
										 $ApConutTotOLDThreebed--;
										if($sql){
										$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
										$sqlupp3 = mysql_query("UPDATE `gr`.`house` SET `reserved` = 'yes' WHERE `house`.`HouseNumber` = $HouseNumber;");
										}
										  echo $ApplicantId."<br/>";
											// echo "winner=".$ApplicantId."<br\>"; 
										}//end of the
									}
						}
							echo "no applicant ";			
		}//end of the if(	$HoTotOLDST == $ApConutTotOLDST) stateOLDts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDThreebed < $ApConutTotOLDThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['email'];
									 if($HoTotOLDThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotOLDThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site3*********************//			
				if(	$HoTotOLDThreebed > $ApConutTotOLDThreebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedOLD) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotOLDThreebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotOLDThreebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
	}
	
	/*                              studio houses information in site OLDaharia*/	
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
		
		
				echo "<table border='1'>
				<th colspan=5> List Floor Type For Studio in site3.</th>
								<tr><td>Total Ground</td><td>Total G+1</td><td>Total G+2</td>  <td>Total G+3</td>   <td>Total G+4 </td> </tr>";
								echo "<tr>";
								echo "<td>".$countquerystudioground."</td>";
								echo "<td>".$countquerystudiogroundOne."</td>";
								echo "<td>".$countquerystudiogroundTwo."</td>";
								echo "<td>".$countquerystudiogroundThree."</td>";
								echo "<td>".$countquerystudiogroundFour."</td>";
								echo  "</tr>";
								echo "</table>";
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
						echo "Female=====".$TotalFemale."<br/>";
//***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4ST == $ApConutTotsite4ST)
						{
							while($rw1=mysql_fetch_array($aplSTsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										  $Email=$rw1['Email'];
										 if($ApConutTotsite4ST>0)
										 {
								 while($rw2=mysql_fetch_array($querysStudiosite4))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4ST < $ApConutTotsite4ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotsite4ST>0)
												 {
								$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotsite4ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4ST > $ApConutTotsite4ST)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplSTsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotsite4ST>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotsite4ST--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}				
			
			
			
			
			
//******************************site4  and 1 bed Applicants**********************//
		$aplOnebedsite4=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="4" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite4Onebed = mysql_num_rows($aplOnebedsite4);
		$queryOnebedsite4=mysql_query('select * from house  where HouseType="1 bed" AND SiteId="4" AND reserved="no" ORDER BY RAND()');
		$HoTotsite4Onebed = mysql_num_rows($queryOnebedsite4 );
		
						//female who are applied for studio at site4eharia
		$aplOnebedsite4Female=mysql_query('select * from applicant  where HouseType="1 bed" AND SiteId="4" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplOnebedsite4Female);
						echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4Onebed == $ApConutTotsite4Onebed)
						{
							while($rw1=mysql_fetch_array($aplOnebedsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotsite4Onebed>0)
										 {
								 while($rw2=mysql_fetch_array($queryOnebedsite4))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4Onebed < $ApConutTotsite4Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotsite4Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotsite4Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4Onebed > $ApConutTotsite4Onebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplOnebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotsite4Onebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotsite4Onebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}	
		
		
		
		
//******************************site4  and 2 bed Applicants**********************//
		$aplTwobedsite4=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="4" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite4Twobed = mysql_num_rows($aplTwobedsite4);
		$queryTwobedsite4=mysql_query('select * from house  where HouseType="2 bed" AND SiteId="4" AND reserved="no" ORDER BY RAND()');
		$HoTotsite4Twobed = mysql_num_rows($queryTwobedsite4 );
//female who are applied for studio at site4eharia
		$aplTwobedsite4Female=mysql_query('select * from applicant  where HouseType="2 bed" AND SiteId="4" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplTwobedsite4Female);
				echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4Twobed == $ApConutTotsite4Twobed)
						{
							while($rw1=mysql_fetch_array($aplTwobedsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotsite4Twobed>0)
										 {
								 while($rw2=mysql_fetch_array($queryTwobedsite4))
										{ 
										$sitId=$rw2['SiteId'];
										$HouseNumber=$rw2['HouseNumber'];
										$BlockNo=$rw2['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4Twobed < $ApConutTotsite4Twobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotsite4Twobed>0)
												 {
								$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotsite4Twobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4Twobed > $ApConutTotsite4Twobed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplTwobedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotsite4Twobed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotsite4Twobed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
}		
		
//******************************site4  and 3 bed Applicants**********************//
		$aplThreebedsite4=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="4" AND win="no" ORDER BY RAND()');	
		$ApConutTotsite4Threebed = mysql_num_rows($aplThreebedsite4);
		$queryThreebedsite4=mysql_query('select * from house  where HouseType="3 bed" AND SiteId="4" AND reserved="no" ORDER BY RAND()');
		$HoTotsite4Threebed = mysql_num_rows($queryThreebedsite4 );
//female who are applied for studio at site4eharia
		$aplThreebedsite4Female=mysql_query('select * from applicant  where HouseType="3 bed" AND SiteId="4" AND Gender="Female" AND win="no" ORDER BY RAND()');
		$TotalFemale=mysql_num_rows($aplThreebedsite4Female);
				echo "Female=====".$TotalFemale."<br/>";
// ***********************THE NUMBER OF APPLICANTS ARE EQUAL TO THE NUMBER OF HOUSES*********************//				
				if(	$HoTotsite4Threebed == $ApConutTotsite4Threebed)
						{
							while($rw1=mysql_fetch_array($aplThreebedsite4))
								{ 
										 $ApplicantId= $rw1['ApplicantId'];
										 $Email=$rw1['Email'];
										 if($ApConutTotsite4Threebed>0)
										 {
								 while($rw3=mysql_fetch_array($queryThreebedsite4))
										{ 
										$sitId=$rw3['SiteId'];
										$HouseNumber=$rw3['HouseNumber'];
										$BlockNo=$rw3['BlockNo'];
$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
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
							echo "no applicant ";			
		}//end of the if(	$HoTotsite4ST == $ApConutTotsite4ST) statesite4ts								
// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4Threebed < $ApConutTotsite4Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($HoTotsite4Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$HoTotsite4Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
		}		
		
		// ***********************THE NUMBER OF APPLICANTS ARE Greater THAN THE NUMBER OF HOUSES site site4 *********************//			
				if(	$HoTotsite4Threebed > $ApConutTotsite4Threebed)
					{
					$app=array();
					echo "list of winners";
					while($rw1=mysql_fetch_array($aplThreebedsite4) )
								{ 
								 $ApplicantId= $rw1['ApplicantId'];
								 $Email=$rw1['Email'];
									 if($ApConutTotsite4Threebed>0)
												 {
									$sql = mysql_query("INSERT INTO `gr`.`winner` (`WinnerId`,`Email`)VALUES ('$ApplicantId','$Email');");
									$ApConutTotsite4Threebed--;
									 echo $ApplicantId."<br/>";
									  if($sql){
				$sqlupp1 = mysql_query("UPDATE `gr`.`applicant` SET `win` = 'yes' WHERE `applicant`.`ApplicantId` = $ApplicantId;");
											}
										}
									}
								echo "no applicant ";								
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
		
				echo "<table border='1'>
				<th colspan=5> List Floor Type For Studio in site4 .</th>
								<tr><td>Total Ground</td><td>Total G+1</td><td>Total G+2</td>  <td>Total G+3</td>   <td>Total G+4 </td> </tr>";
								echo "<tr>";
								echo "<td>".$countquerystudioground."</td>";
								echo "<td>".$countquerystudiogroundOne."</td>";
								echo "<td>".$countquerystudiogroundTwo."</td>";
								echo "<td>".$countquerystudiogroundThree."</td>";
								echo "<td>".$countquerystudiogroundFour."</td>";
								echo  "</tr>";
								echo "</table>";		
	?>