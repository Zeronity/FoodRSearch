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
			<form name="myForm" action="register.php" onsubmit="return validate()"; method="post">
				Username:<br/>
				<input type="text" name="username" size = "40"><br><br>

				Password:<br/>
				<input type="password" name="pwd" size = "40"><br><br>

				Email:<br/>
				<input type="text" name="email" size = "40"><br><br>

				Telephone Number:<br/>
				<input type="text" name="hp" placeholder="000-0000000" size = "40"><br><br>

				Address:<br/>
				<input type="text" name="address" size = "40"><br><br>

				Full Name:<br/>
				<input type="text" name="fname" size = "40"><br><br>

				<input type="submit" name="create" value="create" style="height:30px;width:150px;font-size:14pt;"><br><br>
			</form>
			<script>
			function validate() {
				var username=document["myForm"]["username"].value;
				var pwd=document["myForm"]["pwd"].value;
				var email=document["myForm"]["email"].value;
				var hp=document["myForm"]["hp"].value;
				var address=document["myForm"]["address"].value;
				var fname=document["myForm"]["fname"].value;

    		if (username == null || username == "")
			{
        		alert("Username cannot be empty!");
        		return false;
    		}
			else if(pwd=="" && pwd.length<8)
			{
				alert("Password cannot be empty!");
				return false;
			}
			else if(pwd.length<8)
			{
				alert("Password must be at least 8 of length!");
				return false;
			}
			else if (/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/.test(email)==false)
			{
				alert("Invalid Email Format!");
				return false;
   			}

    		else if (/^\d{3}[-]\d{7}$/.test(hp)==false)
			{
				alert("Invalid Mobile Phone Format!");
				return false;
    		}
     		else if (address == null || address == "")
	 		{
				alert("Address cannot be empty!");
				return false;
			}
			else if (fname== null || fname== "")
			{
				alert("Name cannot be empty!");
				return false;
			}
			}
			</script>
			</div>

</body>

</head>
</html>
