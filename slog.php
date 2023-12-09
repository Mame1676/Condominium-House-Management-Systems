		
<?php
	session_start();//Start session
	require_once('connection.php');//Include database connection details
	$errmsg_arr = array();//Array to store validation errors
	$errflag = false;      //Validation error flag
	             //Connect to mysql server
	$link = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
		if(!$link) {
			die('Failed to connect to server: ' . mysql_error());
					}
	$db = mysql_select_db("condominium");
	if(!$db) {
		header("location:login.php");
		exit();
		//echo"try to insert all necessary values";
		$errflag = true;
		//exit();
	}
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	//Sanitize the POST values
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	//Create query
	    $qry1=mysql_query("SELECT * FROM User_Type WHERE UserType='resident' AND UserName='$UserName' AND Password='".md5($_POST['Password'])."'");
	    	    $qry=mysql_query("SELECT * FROM User_Type WHERE UserType='kebele' AND UserName='$UserName' AND Password='".md5($_POST['Password'])."'");
		                    $qry="SELECT * FROM user_type WHERE UserName='$UserName' AND Password='".md5($_POST['Password'])."'";
		$result=mysql_query($qry);
		$fetch=mysql_fetch_array($result);
		$UserType=$fetch['UserType'];
		
	//Check whether the query was successful or not
	if($result) {
		if((mysql_num_rows($result)== 1)&& ($UserType =='condominium')) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['SESS_UNAME'] = $user['UserName'];
			$_SESSION['SESS_PASSWORD'] = $user['Password'];
			session_write_close();
			header("location:condominiumAdmin.php");
			exit();
		}
	else if($qry1) {
			session_start();
			$_SESSION['user_no'] = $fetch['user_no'];
			header("location:bankAdmin1.php");
			exit();
		}
		else if((mysql_num_rows($result) == 1)&& ($UserType =='bank')) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['SESS_UNAME'] = $user['UserName'];
			$_SESSION['SESS_PASSWORD'] = $user['Password'];
			session_write_close();
			header("location:bankAdmin.php");
			exit();
		}
		else if($qry1) {
			session_start();
			$_SESSION['user_no'] = $fetch['user_no'];
			header("location:bankAdmin1.php");
			exit();
		}
		else {
			//Login failed
		header("location:login.php");
			//echo"please enter your password and your user name and select user type to select database";
		exit();
		}
	}
	else {
		die("synatx error in the query");
}
?>