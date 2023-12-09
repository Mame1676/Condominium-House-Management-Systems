
<link rel="icon" href="images/icon.png" type="image" />
 <link href="header/css.css" rel="stylesheet" type="text/css" />
<?php
include("header/myheader.php");
if(isset($_POST["reset"])){

$email=$_POST['email'];
$newpass=$_POST["newpass"];
$repass=$_POST["repass"];

$pattern="/[\w\.]{6,}\@[a-zA_Z]{3,}\.[a-zA-Z\.]{2,}[^\.]$/";
if(empty($_POST["newpass"]) || empty($_POST["email"]) || empty($_POST["repass"])){
$error="please,Fill the required field ";
		   echo $error;
Header("location:/home/forget.php?fill=$error");
}
elseif(!preg_match($pattern,$email))
{
$error="Inavalid email address please try again";
   echo $error;
Header("location:/home/forget.php?email=$error");
}

 elseif(strlen($_POST['newpass'])<=6 && strlen($_POST['repass'])<=6)
    {
		$error="please,Enter long password";
		   echo $error;
Header("location:/home/forget.php?long=$error");
		}
		elseif(strcmp(($_POST['newpass']),($_POST['repass']))!=0)
    {
		$error="Password Not match";
        echo $error;
Header("C:\wamp\www\condominium43/forget.php?match=$error");		
}
else{


$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("unable to connect :".mysql_error());
}
mysql_select_db("shopping",$con) or die("unable to connect :".mysql_error());

$sql="select Usern from account where Email='$email'";
$res=mysql_query($sql) or die("error".mysql_error());
/*  */
if(mysql_num_rows($res)==0) 
{
$error="No such Email founds";
echo $error;
header("location:forget.php?msg=$error");
}
else{

$sqll="update account set Password='$newpass' where Email='$email'";
$res=mysql_query($sqll) or die("unable to change".mysql_error());
	$congra="Congradulation you have reset your Password successfuly";
    echo$congra;
	header("location:loginhome.php?reset=$congra");

}

}
}
else
{
?>
 <div id="stationery_container">
        <div id="stationery_content_right"> 
<form action='forget.php' method="POST">
<h1 align="center"> Enter your email address and your New password.</h1>
 <br>
 <table width="816" height="129" border="0">
 <tr><td width="145">Email  
 <td width="144"><input name="email" type ="text" ><td width="513"><?php if(isset($_GET['email']))echo $_GET['email'] ?>
<tr><td>New Password<td><input type="text" name="newpass"><td><?php if(isset($_GET['long']))echo $_GET['long'] ?>
<tr><td>Repeat Password<td><input type="text" name="repass"> <td><?php if(isset($_GET['match']))echo $_GET['match'] ?>
   <tr><td><input type="submit" value="Reset"name="reset"> <td><td><?php if(isset($_GET['fill']))echo $_GET['fill'] ?>
<tr><td><?php if(isset($_GET['msg']))echo $_GET['msg'] ?></td></tr>
</table>
</form></div></div></div>
<?PHP }
include("header/footer.php");
?>
