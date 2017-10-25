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
					<li><a href="#"><img src="recipe.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
					<li><a href="#"><img src="search.png" class="img-responsive img-wrapper" alt="Responsive"></a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12" style="height:30px" ></div>
			<h1>User Login</h1>
			<form name="myForm" action="login.php" method="post" onsubmit="return validate()">
				Username:<br>
				<input type="text" name="username"><br><br>
	
				Password:<br>
				<input type="password" name="pwd"><br><br>
	
				<input type="submit" name="Login" value="Login"><br><br>
	
			</form>

			<h1>Admin Login</h1>
			<form name="myForm" action="loginAdmin.php" method="post" onsubmit="return validate()">
				Username:<br>
				<input type="text" name="username"><br><br>
	
				Password:<br>
				<input type="password" name="pwd"><br><br>
	
				<input type="submit" name="Login" value="Login"><br><br>
	
			</form>
			<script>
				function validate() {
				var username=document["myForm"]["username"].value;
				var pwd=document["myForm"]["pwd"].value;
	
   				if (username == null || username == "")
				{
        			alert("Username cannot be empty!");
        			return false;
   				}
				else if(pwd=="")
				{
					alert("Password cannot be empty!");
					return false;
				}
	
				}
			</script>
			</div>

</body>

</head>
</html>