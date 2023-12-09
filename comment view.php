		


<?php
session_start();
if( !$_SESSION['SESS_UTYPE'])
{
header('location: login.php');
}
?>
<?php
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--<meta charset="utf-8" />-->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
  <title>DEBREBERHAN CONDOMINUM HOUSE MANAGMNET SYSTEM</title>
  <link rel="shortcut icon" type="image/x-icon" href="css/images/7.jpg" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>-->
  
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
      
      
        <div class="cl"></div>
      </nav>
      <!-- end of navigation -->
      <!-- slider-holder -->
      <div class="slider-holder">
        
        

      <!-- main -->
      <div class="main">
        

        <!-- main -->
      <div class="main">

        <div class="featured">
          
          <a href="#" class=""></a>
        </div>
<nav id="navigation">

       <p><a href="condominiumAdmin.php">Back</a></p> <center><h3><b>view comment</b></h3></center>
      







    	<table height="200">
    <p><strong><u> email</u> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <u>comment</u></strong></p>    	
  <?php
			
			$reg=mysql_query("select * from comment");
			

$result = mysql_query("SELECT * FROM email");
$result = mysql_query("SELECT * FROM comment");




while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['email'];
   $ctrl = $row['comment'];
  print ("<tr>");
  print ("<td  >" . $row['email'] . "</td>");  
  print ("<td  >" . $row['comment'] . "</td>");
  
  

  print ("</tr>");
  }
print( "</table>");

?>
</td>
</tr>
</table>

</body>
</html>
