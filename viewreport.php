<!DOCTYPE html>
<html>
<head>
	<?php
		session_start();
		?>
	<meta charset="utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
	<link rel = "stylesheet"  type = "text/css" href = "food.css"></link>
<body>
		<div class="wrapper">
			<div class="header">
				<a href="adminhome.php"><img src="foodbanner.png" class="img-responsive img-wrapper" alt="Responsive"></a>
			</div>
		</div>
		<div class="container">
			<div id="nav">
				<ul class="nav  nav-pills">
					<li><a href="adminhome.php"><img src="home.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="adminrecipe.php"><img src="recipe.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="#"><img src="search.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px" ></div>
			<div class="row">
				<div class="col-lg-8"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<form action ="#" method="post">
						<p>
							<input type="text" name="Search" size="20" placeholder="find recipe " style="height:45px; font-size:16pt" >
							<input type="submit" name="submit" value="Search">
						</p>
					</form>
				</div>
			</div>
			<div class="jumbotron">
			<?php	
								
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "foodrsearch";
								$con = new mysqli($servername, $username, $password, $dbname);
								
								$sql = "SELECT * from report";
								$result = mysqli_query($con, $sql);
								
								if (mysqli_num_rows($result) > 0)
								{
									$count = 1;
									$aList=array();
									echo "<form method='post' action='modify.php'>";
									echo "<table class='table table-responsive'><h4>Report List</h4>";
									echo "<tr>";
									echo "<th>"."Report ID"."</th>";
									echo "<th>" . "Title" . "</th>";
									echo "<th>" . "Recipe Name" . "</th>";
									echo "<th>" . "Description" . "</th>";
									echo "<th>" . "Status" . "</th>";
									echo "<th>" . "Made By" . "</th>";
									echo "</tr>";
									while($row = mysqli_fetch_assoc($result))
									{
										array_push($aList,$row["reportID"]);
										echo "<tr>";
										echo "<td>" . $row["reportID"] . "</td>";
										echo "<td>" . $row["title"] . "</td>";
										echo "<td>" . $row["recipeName"] . "</td>";
										echo "<td>" . $row["description"] . "</td>";
										echo "<td>" . $row["madeBy"] . "</td>";
										if ($row["status"]=='pending'){
											echo "<td>";
											echo "<select name='select$count'>";
											echo "<option>pending</option>";
											echo "<option>investigating</option>";
											echo "<option>complete</option>";
											echo "</select>";
											echo "</td>";
										}
										else if ($row["status"]=='investigating'){
											echo "<td>";
											echo "<select name='select$count'>";
											echo "<option>investigating</option>";
											echo "<option>complete</option>";
											echo "</select>";
											echo "</td>";
										}	
										else {
											echo "<td>";
											echo "<select name='select$count'>";
											echo "<option>complete</option>";
											echo "</select>";
											echo "</td>";
										}
										echo "</tr>";
										$count++;
									}
									echo "</table>";
									echo "<input type='submit' name='submit' class='btn btn-success btn-lg' value='Modify' style='float:right;'>";
									echo "</form></br>";
									$_SESSION['reportID']=$aList;
								}
								else
								{
									echo "There are no any report made by user.";
								}
								
								mysqli_close($con);
							?>

				</div>
			</div>

</body>

</head>
</html>