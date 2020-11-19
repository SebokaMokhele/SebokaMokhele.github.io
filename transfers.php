<!DOCTYPE html>

    <?php
		SESSION_START();
	?>

<html lang="en">
     <head>
	 
         <title>TSFBank</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="transStyle.css" />
		 <style> 
		 .header1{
					font-size: 30px;
					font-weight: bold;
					color: white;}
		 .header2{
					font-size: 25px;
					font-weight: bold;
					color: white;}
		 .header3{
					font-size: 20px;
					color: white;}
		 </style>

     </head>

	    <body>
	        
			<div class="wrapper">
			    <nav class="navbar">
				    
					<img class="logo" src="Icon.JPG">
					
				    <ul>
						<li><a href="http://localhost/tsf/index.php">Home</a></li>
						<li><a href="http://localhost/tsf/Customers.php">Customers</a></li>
						<li><a href="http://localhost/tsf/contact.php">Contact</a></li>	
						<li><a href="http://localhost/tsf/about.php">About</a></li>
					</ul>
					 
				</nav>
		 
				<div class="header1" id = "Discript1">
				  <p>
					  Basic Banking Website.
				  </p>
				</div>
				<div class="header2" id = "Discript2">
				  <p>
						<?php echo $_POST["Sname"]; echo " transfer $"; echo $_POST["money"]; echo " to "; echo $_POST["Rname"];?>
				  </p>
				</div>
				
				
				<div class="header3" id = "Discript3">
					<p>
						<?php 
									include_once('dbcon.php'); 
								
									$Query = "SELECT Balance FROM Customer WHERE Name='".$_POST["Rname"]."'";
									$Query1 = "SELECT Balance FROM Customer WHERE Name='".$_POST["Sname"]."'";
									$Query2 = "INSERT INTO Transfe (Name, Transaction, Time) VALUES (' ".$_POST["Sname"]." ', ' paid ".$_POST["Rname"]." ".$_POST["money"]." ', NULL)";
									
									$result = $link->query($Query);
									$result1 = $link->query($Query1);
									
									//update Recepient's table
									if($result->num_rows > 0)
									{
										while($row = $result->fetch_row())
										{
											$RNewBal = $row[0] + $_POST["money"];
											$AddUpdateQuery = "UPDATE Customer SET Balance = $RNewBal WHERE Name='".$_POST["Rname"]."'";
										
											echo nl2br ($_POST["Rname"]." had $". $row[0] ." and a transfer of $". $_POST["money"] ." to ".$_POST["Rname"]." has been made. \nThe balance of ".$_POST["Rname"]." is ");
											
											
											if($link->query($AddUpdateQuery))
											{
											
											}
											echo $RNewBal;
											break;
										}
									}
									
									//update the sender's table
									if($result1->num_rows > 0)
									{
										while($row = $result1->fetch_row())
										{
											$SNewBal = $row[0] - $_POST["money"];
											$SubUpdateQuery = "UPDATE Customer SET Balance = $SNewBal WHERE Name='".$_POST["Sname"]."'";
											
											$link->query($SubUpdateQuery);
											
											//Update the transfer table
											if($link->query($Query2))
											{
													
													//Transfer table is updated.
											}
										}
									}
									
									
									Mysqli_close($link);
								?><br>
							
					</p>
				</div>
			
			</div>
    </body>
  
  
	 <footer>
		<p> 
			Developer: Seboka Mokhele<br>
			<a href="mailto:sebokamokhele@gmail.com"> 
				sebokamokhele@gmail.com
			</a>
		</p>
	  </footer>
	  
	  
</html>


