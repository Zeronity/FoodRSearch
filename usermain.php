<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
	<link rel = "stylesheet"  type = "text/css" href = "food.css"></link>
<body>
		<div class="wrapper">
			<div class="header">
				<a href="userhome.php"><img src="foodbanner.png" class="img-responsive img-wrapper" alt="Responsive"></a>
			</div>
		</div>
		<div class="container">
			<div id="nav">
				<ul class="nav  nav-pills">
					<li><a href="userhome.php"><img src="home.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="userrecipe.php"><img src="recipe.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="search.php"><img src="search.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
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

								$sql = "SELECT * from recipe where RecipeType='Main Courses'";
								$result = mysqli_query($con, $sql);

								if (mysqli_num_rows($result) > 0)
								{
									$aList=array();
									echo "<table class='table table-responsive'><h4>Main Courses</h4>";
									echo "<tr>";
									echo "<th>No.</th>";
									echo "<th>" . "Recipe Name" . "</th>";
									echo "<th>" . "Ingredient" . "</th>";
									echo "<th>" . "Description" . "</th>";
									echo "<th>" . "Video" . "</th>";
									echo "<th>" . "Rating" . "</th>";
									echo "<th>" . "Comment" . "</th>";
									echo "</tr>";
									while($row = mysqli_fetch_assoc($result))
									{
										array_push($aList,$row["RecipeID"]);
										$video=$row["videoURL"];
										echo "<tr>";
										echo "<td>" . $row["RecipeID"] . "</td>";
										echo "<td>" . $row["RecipeName"] . "</td>";
										echo "<td>" . $row["Ingredient"] . "</td>";
										echo "<td>" . $row["Description"] . "</td>";
										echo "<td>" . "<iframe width=\"300\" height=\"235\" src=\" $video \" allowfullscreen></iframe>" . "</td>";
										echo "<td>" . $row["rating"] . "</td>";
										echo "<td>" . $row["comment"] . "</td>";
										echo "</tr>";
									}
									echo "</table>";
								}
								else
								{
									echo "There are no any Recipe for Main Courses.";
								}

								mysqli_close($con);
							?>
			</div>


			</div>

</body>

</head>
</html>
