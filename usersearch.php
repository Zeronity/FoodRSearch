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
					<li><a href="usersearch.php"><img src="search.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
				</ul>
			</div>
				<div class="row">
				</br>
					<div class="col-lg-4 col-md-4 col-xs-4"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<form action ="#" method="post">
						<p>
							<input type="text" name="Search" size="20" placeholder="search recipe " style="height:45px; font-size:16pt" >
							<input type="submit" name="submit" value="Search">
						</p>
					</form>
				</div>
			</div>


		<div class="jumbotron">
			<?php
					session_start();
					if(isset($_POST['submit']))
					{
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "foodrsearch";
							$con = new mysqli($servername, $username, $password, $dbname);

							$search=$_POST['Search'];
							$sql = "SELECT * from search where keyword='$search'";
							$result = mysqli_query($con, $sql);

							if (mysqli_num_rows($result) > 0)
							{
								$count=1;
								echo "<table class='table table-responsive'><h4>Search</h4>";
								echo "<tr>";
								echo "<th>No.</th>";
								echo "<th>" . "Result" . "</th>";
								echo "<th>" . "Url" . "</th>";
								echo "</tr>";
								while($row = mysqli_fetch_assoc($result))
								{
									$url=$row["url"];
									echo "<tr>";
									echo "<td>" . $count ."</td>";
									echo "<td>" . $row["keyword"] . "</td>";
									echo "<td>" ."<a href =''$url'>".$row["url"] ."</a>" ."</td>";



									echo "<td>" ."<a href ='$url'>".$row["url"] ."</a>" ."</td>";
									echo "</tr>";
									$count++;
								}
								echo "</table>";
							}
							else
							{
								echo "There are no any result for these keyowrds.";
							}

							mysqli_close($con);
					}
						?>
		</div>
	</div>





</body>

</head>
</html>
