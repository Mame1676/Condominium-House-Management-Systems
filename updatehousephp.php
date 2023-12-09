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
<?php
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="gr"; // Database name 
		$tbl_name="house"; // Table name 
		$HouseNumber_save=$_POST['HouseNumber'];
		$BlockNumber_save = $_POST['BlockNo'];
		$SiteId_save = $_POST['SiteId'];
		$FloorType_save = $_POST['FloorType'];
		$HouseType_save = $_POST['HouseType'];
		$ServiceType_save = $_POST['ServiceType'];
		$reserved_save=$_POST['reserved'];
		// Connect to server and select database.
		mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
			// update data in mysql database 
			$sql="UPDATE $tbl_name SET HouseNumber='$HouseNumber_save',BlockNo='$BlockNumber_save',SiteId='$SiteId_save', FloorType='$FloorType_save',HouseType='$HouseType_save', 
			      ServiceType='$ServiceType_save', reserved='$reserved_save' WHERE   HouseNumber='$HouseNumber_save'";
			$result=mysql_query($sql);
			// if successfully updated. 
			if($result){
			echo "Update Successful";
			echo "<BR>";
			header("Location: houseupdatesuccess.php");	
			}
		else {
		echo "ERROR";
		}
?>