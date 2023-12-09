
			<?php
			include("connection.php");
			?>
			
									<?php 	
					$_SESSION['site']=array();
					$SiteId = $_POST['SiteId'];
					$SiteName = $_POST['SiteName'];
					$City = $_POST['City'];
					$Wereda = $_POST['Wereda'];
					$Kebele = $_POST['Kebele'];
					if(empty($_POST['SiteId'])|| empty($_POST['SiteName']) || empty($_POST['City']) || empty($_POST['Wereda']) || empty($_POST['Kebele']) )
					{
					header("location:site.php");
					exit();
					}
				
					//$p="select * from site";
					//$ros=mysql_query($p);
					$cmd = "insert into site(SiteId, SiteName, City, Wereda, Kebele) values('$SiteId','$SiteName','$City','$Wereda','$Kebele')";
					//print ($SiteName);
					$query =mysql_query($cmd);
					if($query)
					{
					header("location: sitesuccess.php");
					}
					else{
					
					header("location: sitefail.php");
					}
				//mysql_close();
			 ?>
								
							