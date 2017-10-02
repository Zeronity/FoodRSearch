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
			<form name="myForm" action="upload.php" onsubmit="return validate()"; method="post">
				Recipe Name:<br/>
				<input type="text" name="rname" size = "40"><br><br>
	
				Recipe Type:<br/>
				<select name="rtype">
					<option value="none">Select a recipe type</option>
					<option value="Main Courses">Main Courses</option>
					<option value="Desserts">Desserts</option>
					<option value="Side Dishes">Side Dishes</option>
					<option value="Others">Others</option>
				</select>
				<br><br>
				Ingredient:<br/>
				<textarea rows="8" cols="60" name="ingredient">Write Ingredient of Recipe here!
				</textarea>
				<br/><br/>
	
				Description:<br/>
				<textarea rows="8" cols="60" name="desc">Write Description of Recipe here!
				</textarea>
				<br/><br/>
				Video URL:<br/>
				<input type="url" name="video" size = "40"><br><br>
	
				<input type="submit" name="create" value="create" style="height:30px;width:150px;font-size:14pt;"><br><br>
			</form>
			<script>
			function validate() {
				var recipename=document["myForm"]["rname"].value;
				var rtype=document["myForm"]["rtype"].value;
				var ingredient=document["myForm"]["ingredient"].value;
				var description=document["myForm"]["desc"].value;

    		if (recipename == null || recipename == "")
			{
        		alert("Name of Recipe cannot be empty!");
        		return false;
    		}
			else if(rtype=="none")
			{
				alert("Please select a type for recipe!");
				return false;
			}
			else if(ingredient == null || ingredient == "")
			{
				alert("Ingredient cannot be empty!");
				return false;
			}
			else if (description== null || description == "")
			{
				alert("Description cannot be empty!");
				return false;
			}
			}
			</script>
		

		

			</div>


</body>

</head>
</html>