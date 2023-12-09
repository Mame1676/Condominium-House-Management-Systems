
<?php
	include("connection.php");
	session_start();
	if( !$_SESSION['SESS_UTYPE'])
	{
	header('location: displayresident.php');
	}
	$ctrl = $_REQUEST['id'];
	mysql_query("DELETE FROM resident WHERE ResidentId = '$ctrl'");

	print "<script>location.href = 'displayresident.php'</script>";
?>

