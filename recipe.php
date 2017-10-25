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
				<a href="homepage.php"><img src="foodbanner.png" class="img-responsive img-wrapper" alt="Responsive"></a>
			</div>
		</div>
		<div class="container">
			<div id="nav">
				<ul class="nav  nav-pills">
					<li><a href="homepage.php"><img src="home.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="recipe.php"><img src="recipe.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
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
			<h2> Recipe Type</h2>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="maincourses.php"><img src="mainrecipe.jpg" class="img-responsive img-wrapper" alt="Responsive"></a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-2"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="dessert.php"><img src="dessert.jpeg" class="img-responsive img-wrapper" alt="Responsive"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="maincourses.php"><h3> Main Courses </h3></a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-2"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="dessert.php"><h3> Dessert </h3></a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:150px"></div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="side.php"><img src="side.jpg" class="img-responsive img-wrapper" alt="Responsive"></a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-2"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="other.php"><img src="other.jpg" class="img-responsive img-wrapper" alt="Responsive"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="side.php"><h3> Side Dishes </h3></a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-2"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="other.php"><h3> Others </h3></a>
				</div>
			</div>


			</div>

</body>

</head>
</html>
