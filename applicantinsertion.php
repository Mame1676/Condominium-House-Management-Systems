<?php
session_start();
if( !$_SESSION['ResidentId'])
{
header('location: login.php');
}

?>
<?php
include("connection.php");
$user_id=$_SESSION['ResidentId'];

$result=mysql_query("select * from resident  where ResidentId='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);

$ApplicantId=$row['ResidentId'];
$ResidentId=$row['ResidentId'];


?>
				<?php 
		$ServiceType = $_POST['ServiceType'];
		$HouseType = $_POST['HouseType'];
		$SiteId = $_POST['SiteId'];

if(empty($row['ApplicantId']) && empty($row['ResidentId']) || empty($_POST['ServiceType']) || empty($_POST['HouseType']))
{
echo "empty value";
	header("location:Applicant.php");
}
	if($ResidentId != '') {
		$qry = "SELECT * FROM applicant WHERE ResidentId='$ResidentId'";
		$result = mysql_query($qry);
		$_SESSION['SESS_ResidentId'] = $result['ResidentId'];
		if($result) {
			if(mysql_num_rows($result) > 0) {
			echo"you are aleady applayed ";
			header("location:residentLog.php");
	      exit();
			}
		else{
		
	
 	$q=mysql_query("insert into applicant(ApplicantId,ResidentId,ServiceType,HouseType,SiteId,win)
	values('$ApplicantId','$ResidentId','$ServiceType','$HouseType','$SiteId','no')"); 
	header("location:applied.php");
	
	
	}
	}
	}
 ?>
			