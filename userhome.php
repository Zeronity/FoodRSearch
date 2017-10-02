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
					<li><a href="#"><img src="recipe.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="#"><img src="search.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px" ></div>
			<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-1">
					<a href="recipeform.php"><p><button type="button" class="btn btn-primary " style="height:45px ; width:90px"><span class="glyphicon glyphicon-upload"></span>Upload</button></p></a>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1">
					<a href="#"><p><button type="button" class="btn btn-primary " style="height:45px ; width:90px"><span class="glyphicon glyphicon-tasks"></span>Recipes</button></p></a>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1">
					<a href="#"><p><button type="button" class="btn btn-primary " style="height:45px ; width:90px"><span class="glyphicon glyphicon-list-alt"></span>Report</button></p></a>
				</div>
				<div class="col-lg-3 col-md-3 col-xs-3">
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
			<div class="jumbotron">
			<img src="aboutus.jpg">
			<hr/>
			<p style="color:black;font-weight: bold;font-size: 15pt">FoodRSearch is a website which allows the user to upload food recipes, videos and share to the member on the website.The user can create an account on the website with filling up six sections of particulars. Moreover, this website also allow the user to rate and comment a food recipe after using the specific food recipes. Furthermore, the user can modify their uploaded food recipe by amend new information about the food or remove the old food recipes and videos. Besides that, this website also consist of searching functions, the members can search specific food recipe by entering the keywords and the related food recipes or videos will be displayed. Other than that, for those food recipes which consist of false information, the users can report it to the customer support and an investigation will be conducted based on the report made by the user.
			</p>
			</div>

		<div class="row">
				<div class="col-lg-3 col-md-6 col-xs-12">
					<h2>Upload Recipe</h2>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:20px"></div>
					<a href="#"><img src="upload.png" class="img-responsive" alt="Responsive" ></a>
					
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:50px"></div>
					<p>The FoodRSearch has a function which allow the users to upload their food recipe to the website. Inside the food recipe, the users can list down the
						ingredients needed for that food recipe. Other than that, the users also can share the cooking techniques with the other peoples while using the specific
						food recipe.
					</p>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:140px"></div>
					
				</div>
				<div class="col-lg-3 col-md-6 col-xs-12">
					<h2>Make Report</h2>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:20px"></div>
					<a href="#"><img src="report.gif" class="img-responsive" alt="Responsive" ></a>
					
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:50px"></div>
				    <p>
				    	The FoodRSearch also provides function which allows the users to conduct a report based on the specific food recipe. This function will improved the quality of the food recipe sharing features. Any food recipes with wrong information will be removed after the investigation made by the customer support.

					</p>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:160px"></div>
					
				</div>
				<div class="col-lg-3 col-md-6 col-xs-12">
					<h2>Learn Recipe</h2>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:20px"></div>
					<a href="#"><img src="learnrcp.png" class="img-responsive" alt="Responsive" ></a>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:50px"></div>
				    <p>
				    	The FoodRSearch allows the user to learn or share their knowledge on cooking foods by sharing their recipe and experiences through this website.
				    	Other than that, the users can also conduct a discussion based on specific food recipes. The cooking techniques can be shared among the users.
					</p>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:140px"></div>
					
				</div>
				<div class="col-lg-3 col-md-6 col-xs-12">
					<h2>Search Recipe</h2>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:20px"></div>
					<a href="#"><img src="Search-icon.png" class="img-responsive" alt="Responsive" ></a>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:50px"></div>
		
					<p>
						The FoodRSearch also provides a search function which allows the users to search the specific food recipes. The website will filter the user's 
						options and produce a list of food recipes which matched the keywords entered by the user.
					</p>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:40px"></div>
					
				</div>
				<div class="col-lg-12 col-md-12 col-xs-12" style="height:60px"></div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:80px" ></div>

			</div>
<div class="footer">
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:40px"></div>
			<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xs-12">
					<h4>Popular Food</h4>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:20px"></div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-xs-3">
							<a href="#" class="thumbnail">
								<img src="ramen.jpg" alt="Generic placeholder thumbnail">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3">
							<a href="#" class="thumbnail">
								<img src="friedrice.jpg" alt="Generic placeholder thumbnail">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3">
							<a href="#" class="thumbnail">
								<img src="chickenchop.jpg" alt="Generic placeholder thumbnail">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-xs-3">
							<a href="#" class="thumbnail">
								<img src="chocolatecake.jpeg" alt="Generic placeholder thumbnail">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-2 col-md-6 col-xs-12">
					<h4>OUR SERVICES</h4>
					<br/>
					<ul>
						<li><a href="homepage.php">HOME</a></li>
						<li><a href="registerform.php">REGISTER</a></li>
						<li><a href="loginform.php">LOGIN</a></li>
						<li><a href="#">RECIPES</a></li>
						<li><a href="#">SEARCH</a></li>
					</ul>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-2 col-md-6 col-xs-12">
					<h4>FOLLOW US</h4>
					<br/>
					<p>Facebook: <br/>
						<a href="www.facebook.com/HELPUniDeptIT">www.facebook.com/FoodRSearch</a>
						<div class="col-lg-6 col-md-6 col-xs-6">
						<a href="www.facebook.com/HELPUniDeptIT" class="thumbnail">
								<img src="facebook.png" alt="Generic placeholder thumbnail">
							</a>
						</div>
					</p>
					
					
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px"></div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xs-12">
					<h4>WHAT PEOPLE SAY ABOUT US</h4>
					<div class="col-lg-12 col-md-12 col-xs-12" style="height:20px"></div>
						<div class="fotorama" data-autoplay="true" id="elm1">
							<p>Hanzo 
								<br/><br/>
								This website is quite good for me to find new recipe to learn.
							</p>
							<p>Winston Chen
								<br/><br/>
								I am happy that I can share my recipe at here to help others.
							</p>
							<p>Ali King
								<br/><br/>
								This webiste is quite user-friendly and simple to use.
							</p>
							<p>Chun Lee
								<br/><br/>
								This website is quite userful and I want to share it to my friends and relatives.
							</p>
						</div>
				</div>
				<div class="col-lg-4"></div>
				<div class="col-lg-2 col-md-12 col-xs-12">
					<h4>LOCATE US</h4>
					<br/>
					<a href="https://www.google.com/maps/place/Putra+World+Trade+Centre/@3.1567167,101.6582296,14z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x31cc483db511d29d:0xbdff5f808f6fa427!2sPutra+World+Trade+Centre,+41,+Jalan+Tun+Ismail,+Kuala+Lumpur,+50480+Kuala+Lumpur,+Wilayah+Persekutuan+Kuala+Lumpur,+Malaysia!2m2!1d101.691789!2d3.168094!3m4!1s0x0:0xbdff5f808f6fa427!8m2!3d3.1680956!4d101.691792">
					<p>FoodRSearch<br/>41, Jalan Tun Ismail, <br/>50480 Kuala Lumpur, Malaysia	
					</p>
					</a>
					<br/>
					<p>Tel: +6 03 43942222<br/>Fax: +6 03 31956780</p>
					
				</div>
		</div>
		</div>
		</div>
	</div>

</body>

</head>
</html>