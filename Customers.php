<!DOCTYPE html>

    <?php
		session_start();
	
    ?>

<html lang="en">
     <head>
	 
         <title>TSFBank</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="customerstyle.css" />
		 

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
				
				<table>
					<thead>
						<tr>
							<th>Select</th>
							<th>Name</th>
							<th>Gender</th>
							<th>Email</th>
							<th>Balance</th>
						</tr>
					</thead>
					
					<tbody>
					
						<form>
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" id="customer1" name="customers" value="customer1"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer1">
											<?php 
												include_once('dbcon.php'); 
												$i=1;
												$Query = "SELECT * FROM Customer";
												
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													while($row = $result->fetch_row())
													{
														 if($i==1)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
														     $_SESSION["cust1"] = $row[0];
															 break;
														}
														 $i++;
													}
												}
												
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" id="customer2" name="customers" value="customer2"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer2">
											<?php 
												$i=1;
												$Query = "SELECT * FROM Customer";
												
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													
													
													while($row = $result->fetch_row())
													{
														 
														if($i==2)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															  $_SESSION["cust2"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer3" name="customers" value="customer3"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer3">
											<?php 
												$Query = "SELECT * FROM Customer";
												$i=1;
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													
													
													while($row = $result->fetch_row())
													{
														
														if($i==3)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															 $_SESSION["cust3"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer4" name="customers" value="customer4"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer4">
											<?php 
												$Query = "SELECT * FROM Customer";
												$i=1;
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													
													
													while($row = $result->fetch_row())
													{
													  
														 if($i==4)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															   $_SESSION["cust4"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer5" name="customers" value="customer5"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer5">
											<?php 
												$Query = "SELECT * FROM Customer";
												$i=1;
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													
													
													while($row = $result->fetch_row())
													{
													  
														 if($i==5)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															   $_SESSION["cust5"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer6" name="customers" value="customer6"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer6">
											<?php 
												$Query = "SELECT * FROM Customer";
												$i=1;
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													
													while($row = $result->fetch_row())
													{
														
														 if($i==6)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															    $_SESSION["cust6"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer7" name="customers" value="customer7"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer7">
											<?php 
												$Query = "SELECT * FROM Customer";
												$i=1;
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													while($row = $result->fetch_row())
													{
														 if($i==7)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															 $_SESSION["cust7"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer8" name="customers" value="customer8"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer8">
											<?php 
												$Query = "SELECT * FROM Customer";
												$i=1;
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													while($row = $result->fetch_row())
													{
														 if($i==8)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															  $_SESSION["cust8"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer9" name="customers" value="customer9"></label>
									</div>
								</td>
								<td>
									<div class="radiotext">
									    <label for="customer9">
											<?php 
												
												$Query = "SELECT * FROM Customer";
												$i=1;
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													while($row = $result->fetch_row())
													{
														 if($i==9)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															 $_SESSION["cust9"] = $row[0];
														     break;
														}
														 $i++;
													}
												}
												
											?>
										</label>
									</div>
								</td>
							</tr>
							<tr>	
								<td>
									<div class="radio">
										<label><input type="radio" id="customer10" name="customers" value="customer10"></label>
									</div>
								</td>
								
								<td>
									<div class="radiotext">
									    <label for="customer10">
											<?php 
												 
												$i=0;
												$Query = "SELECT * FROM Customer";
												
												$result = $link->query($Query);
												
												if($result->num_rows > 0)
												{
													while($row = $result->fetch_row())
													{
													    $i++;
														if($i==10)
														 {
															 echo  $row[0];
															 echo "<td>". $row[1]. "</td>";
															 echo "<td>". $row[2]. "</td>";
															 echo "<td>". $row[3]. "</td>";
															 
															 $_SESSION["cust10"] = $row[0];
															 break;
														}
													}
												}
												Mysqli_close($link);
											?>
										</label>
									</div>
								</td>
							</tr>
							
						</form>
					</tbody>
				</table>
				
				<button class="button" onClick="ViewCUSTOMERFunc()">View Customer</button>
						
			</div>
			
			<script>
				function ViewCUSTOMERFunc()
				{
					if(document.getElementById("customer1").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer1.php")
					}
					if(document.getElementById("customer2").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer2.php")
					}
					if(document.getElementById("customer3").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer3.php")
					}
					if(document.getElementById("customer4").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer4.php")
					}
					if(document.getElementById("customer5").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer5.php")
					}
					if(document.getElementById("customer6").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer6.php")
					}
					if(document.getElementById("customer7").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer7.php")
					}
					if(document.getElementById("customer8").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer8.php")
					}
					if(document.getElementById("customer9").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer9.php")
					}
					if(document.getElementById("customer10").checked == true)
					{
						location.replace("http://localhost/tsf/ViewCustomer10.php")
					}
				}
		    </script>
			
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
