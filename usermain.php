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
									$count=1;
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
										$rating=$row["rating"];
										$comment=$row["comment"];
										$video=$row["videoURL"];
										echo "<tr>";
										echo "<td>" . $row["RecipeID"] . "</td>";
										echo "<td>" . $row["RecipeName"] . "</td>";
										echo "<td>" . $row["Ingredient"] . "</td>";
										echo "<td>" . $row["Description"] . "</td>";
										if($video!=""){
										echo "<td>" . "<iframe width=\"300\" height=\"235\" src=\" $video \" allowfullscreen></iframe>" . "</td>";
										}
										else
										{
											echo "<td>" . "none of video"  . "</td>";
										}


										echo "<form name='myForm' action='ratencomment.php' onsubmit='return validate()'; method='post'>";
											if($row["rating"]==''){
											echo "<td>";
											echo "<select rating='select$count'>";
											echo "<option></option>";
											echo "<option>1 star</option>";
											echo "<option>2 stars</option>";
											echo "<option>3 stars</option>";
											echo "<option>4 stars</option>";
											echo "<option>5 stars</option>";
											echo "</select>";
											echo "</td>";
										}
										else if($row["rating"]=='1 star'){
										echo "<td>";
										echo "<select rating='select$count'>";
										echo "<option></option>";
										echo "<option>1 star</option>";
										echo "<option>2 stars</option>";
										echo "<option>3 stars</option>";
										echo "<option>4 stars</option>";
										echo "<option>5 stars</option>";
										echo "</select>";
										echo "</td>";
										}
										else if($row["rating"]=='2 stars'){
										echo "<td>";
										echo "<select rating='select$count'>";
										echo "<option></option>";
										echo "<option>1 star</option>";
										echo "<option>2 stars</option>";
										echo "<option>3 stars</option>";
										echo "<option>4 stars</option>";
										echo "<option>5 stars</option>";
										echo "</select>";
										echo "</td>";
										}
										else if($row["rating"]=='3 stars'){
										echo "<td>";
										echo "<select rating='select$count'>";
										echo "<option></option>";
										echo "<option>1 star</option>";
										echo "<option>2 stars</option>";
										echo "<option>3 stars</option>";
										echo "<option>4 stars</option>";
										echo "<option>5 stars</option>";
										echo "</select>";
										echo "</td>";
										}
										else if($row["rating"]=='4 stars'){
										echo "<td>";
										echo "<select rating='select$count'>";
										echo "<option></option>";
										echo "<option>1 star</option>";
										echo "<option>2 stars</option>";
										echo "<option>3 stars</option>";
										echo "<option>4 stars</option>";
										echo "<option>5 stars</option>";
										echo "</select>";
										echo "</td>";
										}
										else if($row["rating"]=='5 Stars'){
										echo "<td>";
										echo "<select rating='select$count'>";
										echo "<option></option>";
										echo "<option>1 star</option>";
										echo "<option>2 stars</option>";
										echo "<option>3 stars</option>";
										echo "<option>4 stars</option>";
										echo "<option>5 stars</option>";
										echo "</select>";
										echo "</td>";
										}
										else {
											echo "<td>";
											echo "<select rating='select$count'>";
											echo "<option></option>";
											echo "<option>1 star</option>";
											echo "<option>2 stars</option>";
											echo "<option>3 stars</option>";
											echo "<option>4 stars</option>";
											echo "<option>5 stars</option>";
											echo "</select>";
											echo "</td>";

										}


										echo "<td>" . "<textarea rows='5' cols='35' name='comment$count' value='$comment'>$comment</textarea>" . "</td>";

										echo "</tr>";
										$count++;
									}
									echo "</table>";
									echo "<input type='submit' name='RateNComment' value='Rate & Comment' style='height:30px;width:170px;font-size:14pt;'>";
									echo "</form></br>";
									$_SESSION['RecipeID']=$aList;
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
