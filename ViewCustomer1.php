<!DOCTYPE html>

    <?php
		SESSION_START();
	?>

<html lang="en">
     <head>
	 
         <title>TSFBank</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="VCuststyle.css" />
		 <style> 
		 input{font-size: 110%}
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
						<?php echo $_SESSION["cust1"];?>'s details
				  </p>
				</div>
				
				<div class="header3" id = "Discript3">
					<p>
						<?php 
									include_once('dbcon.php'); 
									
									$Query = "SELECT Name,Gender,Balance,Email FROM Customer WHERE Name='Agay'";
									
									$result = $link->query($Query);
									
									echo "<table>";
									echo "<tr class=\"tablehead\">";
									echo "<td>Name</td>";
									echo "<td>Gender</td>";
									echo "<td>Balance</td>";
									echo "<td>Email</td>";
									echo "</tr>";
									
									if($result->num_rows > 0)
									{
										while($row = $result->fetch_row())
										{
										 echo "<tr>";
										 echo "<td>". $row[0]. "</td>";
										 echo "<td>". $row[1]. "</td>";
										 echo "<td>". $row[2]. "</td>";
										 echo "<td>". $row[3]. "</td>";
										 echo "</tr>";
										 
										 break;
										}
									}
									echo "</table>";
									Mysqli_close($link);
								?>
						<form action="transfers.php" method="post">
						 
							Amount to tranfer: <input type="text" name="money"><br>
							Recepient's name : <input type="text" name="Rname"><br>
							Sender's name :::::	<input type="text" name="Sname"><br>
						
							<button type="submit" class="button">Transfer</button>
						</form>
						
					</p>
				</div>
					
			</div>
			
		</body>
		
	<footer style="background-color:#eeeeee">
		<p> 
			© Copyright 2020, TSFBank.™ Web Design by Seboka Mokhele<br>
			<a href="mailto:sebokamokhele@gmail.com"> 
				sebokamokhele@gmail.com
			</a>
		</p>
    </footer>
</html>	