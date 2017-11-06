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
					<li><a href="#"><img src="search.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:40px" ></div>
			<div class="jumbotron">
				<?php

								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "foodrsearch";
								$con = new mysqli($servername, $username, $password, $dbname);

								session_start();
								$name=$_SESSION['username'];

								$sql = "SELECT * from recipe where uploadedBy='$name'";
								$result = mysqli_query($con, $sql);

								if (mysqli_num_rows($result) > 0)
								{
									$aList=array();
									$count=1;
									echo "<form method='post' action='delete.php'>";
									echo "<table class='table table-responsive'><h4>Your Recipes</h4>";
									echo "<tr>";
									echo "<th>No.</th>";
									echo "<th>" . "Recipe Name" . "</th>";
									echo "<th>" . "Recipe Type" . "</th>";
									echo "<th>" . "Ingredient" . "</th>";
									echo "<th>" . "Description" . "</th>";
									echo "<th>" . "Video" . "</th>";
									echo "<th>" . "Delete" . "</th>";
									echo "</tr>";
									while($row = mysqli_fetch_assoc($result))
									{
										array_push($aList,$row["RecipeID"]);
										$video=$row["videoURL"];
										echo "<tr>";
										echo "<td>" . $row["RecipeID"] . "</td>";
										echo "<td>" . $row["RecipeName"] . "</td>";
										echo "<td>" . $row["RecipeType"] . "</td>";
										echo "<td>" . $row["Ingredient"] . "</td>";
										echo "<td>" . $row["Description"] . "</td>";
										echo "<td>" . $row["videoURL"] . "</td>";
										echo "<td>" ."<input type='submit' name='delete$count' class='btn btn-success btn-lg' value='Delete' >". "</td>";
										echo "</tr>";
									}
									echo "</table>";
									echo "<a href=\"editrecipe.php\"><p><button type=\"button\" class=\"btn btn-primary \" style=\"height:45px ; width:90px\" >Edit</button></p></a>";
									echo "</form></br>";
									$count ++;
									$_SESSION['RecipeID']=$aList;
								}
								else
								{
									echo "You haven't upload any recipe.";
								}

								mysqli_close($con);
							?>
			</div>

		</div>

</body>

</head>
</html>
