


						<?php 
								include("connection.php");
								$BlockType = $_POST['BlockType'];
								$SiteId = $_POST['SiteId'];
							if(empty($_POST['BlockType']) || empty($_POST['SiteId']) )
							{
								header("location:block.php");
								exit();
							}
							
								
									$p="select * from block";
									$ros=mysql_query($p);
								$q="INSERT into block(BlockType,SiteId)values('$BlockType','$SiteId')"; 
							$query=mysql_query($q);
							if(!$query)
							{
							echo"UNABLE TO INSERT".mysql_error();
							}else{
							header("location:blocksuccess.php");
							exit();
							//echo"inserted successfully";
							}
							mysql_close();
					 ?>

					
