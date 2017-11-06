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
									echo "<table class='table table-responsive'><h4>Main Courses</h4>";
									echo "<tr>";
									echo "<th>No.</th>";
									echo "<th>" . "Recipe Name" . "</th>";
									echo "<th>" . "Recipe Type" . "</th>";
									echo "<th>" . "Ingredient" . "</th>";
									echo "<th>" . "Description" . "</th>";
									echo "<th>" . "Video" . "</th>";
									echo "</tr>";
									while($row = mysqli_fetch_assoc($result))
									{
										array_push($aList,$row["RecipeID"]);
										$video=$row["videoURL"];
										$name=$row["RecipeName"];
										$ingd=$row["Ingredient"];
										$desc=$row["Description"];
										$recipeType=$row["RecipeType"];
										echo "<tr>";
										echo "<td>" . $row["RecipeID"] . "</td>";
										echo "<form name='myForm' action='updateRecipe.php' onsubmit='return validate()'; method='post'>";
										echo "<td>" . "<input type='text' name='rname' size = '15' value='$name'>" . "</td>";
										if ($row["RecipeType"]=='Main Courses'){
											echo "<td>";
											echo "<select name='rtype'>";
											echo "<option>Main Courses</option>";
											echo "<option>Desserts</option>";
											echo "<option>complete</option>";
											echo "<option>Others</option>";
											echo "</select>";
											echo "</td>";
										}
										else if ($row["RecipeType"]=='Desserts'){
											echo "<td>";
											echo "<select name='rtype'>";
											echo "<option>Desserts</option>";
											echo "<option>Main Courses</option>";
											echo "<option>Side Dishes</option>";
											echo "<option>Others</option>";
											echo "</select>";
											echo "</td>";
										}
										else if ($row["RecipeType"]=='Side Dishes'){
											echo "<td>";
											echo "<select name='rtype'>";
											echo "<option>Side Dishes</option>";
											echo "<option>Main Courses</option>";
											echo "<option>Desserts</option>";
											echo "<option>Others</option>";
											echo "</select>";
											echo "</td>";
										}
										else {
											echo "<td>";
											echo "<select name='rtype'>";
											echo "<option>Others</option>";
											echo "<option>Main Courses</option>";
											echo "<option>Desserts</option>";
											echo "<option>Side Dishes</option>";
											echo "</select>";
											echo "</td>";
										}
										echo "<td>" . "<textarea rows='5' cols='35' name='ingredient' value='$ingd'>$ingd</textarea>" . "</td>";
										echo "<td>" . "<textarea rows='5' cols='35' name='description' value='$desc'>$desc</textarea>" . "</td>";
										echo "<td>" . "<input type='text' name='videoURL' size = '18' value='$video'>" . "</td>";
										echo "</tr>";
									}
									echo "</table>";
									echo "<input type='submit' name='Update' value='Update' style='height:30px;width:150px;font-size:14pt;'>";
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
