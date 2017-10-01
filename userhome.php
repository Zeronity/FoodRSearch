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
				<a href="homepage.html"><img src="foodbanner.png" class="img-responsive img-wrapper" alt="Responsive"></a>
			</div>
		</div>
		<div class="container">
			<div id="nav">
				<ul class="nav  nav-pills">
					<li><a href="homepage.html"><img src="home.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="#"><img src="recipe.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="#"><img src="search.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px" ></div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-1">
					<a href="#"><p><button type="button" class="btn btn-primary " style="height:45px ; width:90px"><span class="glyphicon glyphicon-tasks"></span>Recipes</button></p></a>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1">
					<a href="#"><p><button type="button" class="btn btn-primary " style="height:45px ; width:90px"><span class="glyphicon glyphicon-list-alt"></span>Report</button></p></a>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<a href="logout.php"><p><button type="button" class="btn btn-primary " style="height:45px ; width:180px"><span class="glyphicon glyphicon-user"></span><?php     
					session_start();
					$name=$_SESSION['username'];     
					echo'Logout ('. $name.')';
					?></button></p></a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-2"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<form action ="#" method="post">
						<p>
							<input type="text" name="Search" size="20" placeholder="find recipe " style="height:45px; font-size:16pt" >
							<input type="submit" name="submit" value="Search">
						</p>
					</form>
				</div>
			</div>
			<div class="fotorama" >
  					<img src="fotorama1.jpg">
  					<img src="fotorama2.png">
  					<img src="fotorama3.png">
				</div>
			<img src="aboutus.jpg">
			<hr/>
			<p style="color:black;font-weight: bold;font-size: 15pt">FoodRSearch is a website which allows the user to upload food recipes, videos and share to the member on the website.The user can create an account on the website with filling up six sections of particulars. Moreover, this website also allow the user to rate and comment a food recipe after using the specific food recipes. Furthermore, the user can modify their uploaded food recipe by amend new information about the food or remove the old food recipes and videos. Besides that, this website also consist of searching functions, the members can search specific food recipe by entering the keywords and the related food recipes or videos will be displayed. Other than that, for those food recipes which consist of false information, the users can report it to the customer support and an investigation will be conducted based on the report made by the user.
			</p>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:80px" ></div>
			<div class="row">
				<img src="popularfood.png" class="img-responsive" alt="Responsive" >
				<div class="col-lg-4 col-md-4 col-xs-4"> 
					<img src="ramen.jpg" class="img-responsive" alt="Responsive" >
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px" ></div>
					<a href="#" class="btn btn-primary btn-md pull-right" role="button">Read More</a>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-4"> 
					<img src="friedrice.jpg" class="img-responsive" alt="Responsive"  >
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px" ></div>
					<a href="#" class="btn btn-primary btn-md pull-right" role="button">Read More</a>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-4"> 
					<img src="chickenchop.jpg" class="img-responsive" alt="Responsive">
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px" ></div>
					<a href="#" class="btn btn-primary btn-md pull-right" role="button">Read More</a>
				</div>
			</div>
			</div>

</body>

</head>
</html>