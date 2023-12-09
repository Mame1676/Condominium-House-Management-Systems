<?php
	session_start();
	if( !$_SESSION['SESS_UTYPE'])
	{
	header('location: login.php');
	}
?>