<?php
include("connection.php");
?>
<?php 
		session_start();
		if(empty($_POST))
			{	
			}
		$_SESSION['house']=array();
				$BlockNo = $_POST['BlockNo'];
				$SiteId = $_POST['SiteId'];
				$HouseType = $_POST['HouseType'];
				$FloorType = $_POST['FloorType'];
				$ServiceType = $_POST['ServiceType'];
				$reserved = $_POST['reserved'];
		if(empty($BlockNo) && empty($SiteId) || empty($HouseType)  || empty($FloorType) || empty($ServiceType) || empty($reserved))
			{
				header("location:house.php");
				exit();
			}
				$link=mysql_connect("localhost","root","");
				mysql_select_db("condominium",$link);
				$p="select * from house";
				$ros=mysql_query($p,$link);
				$q="insert into house(BlockNo,SiteId,HouseType,FloorType,ServiceType,reserved)
				values('$BlockNo','$SiteId','$HouseType','$FloorType','$ServiceType','$reserved')"; 
			$query=$link.mysql_query($q);
			if(!$query)
			{
			echo"UNABLE TO INSERT".mysql_error();
			}else{
			header("location:housesuccess.php");
				echo"inserted successfully";
			exit();
			}
			$link.mysql_close();
 ?>
