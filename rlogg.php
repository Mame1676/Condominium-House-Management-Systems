<?php
include('connection.php');

if(isset($_POST['submit']))
	
	{
		
		$uname=$_POST['UserName'];
		$Password=$_POST['Password'];
		$dag=mysql_query("select * from user_type where UserName='{$uname}' AND Password='{$Password}'");
		$row=mysql_fetch_array($dag);
		
		
		$usertype=$row['UserType'];
		if($usertype=='resident')
		{
		if(mysql_num_rows($dag)>0)
		{
			session_start();
			$_SESSION['UserType']=$usertype;
			header("location:aplayform.php");
		}
		
			
			
			
			
		}
		else
			echo"<script> alert('INSERT VALID INFORMATION')</script>";
			echo"<script> window.location='rlogin.php';</script>";
		
		
		
		
		
		
		
		
		
	}


?>