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
					<div class="col-lg-4 col-md-4 col-xs-4"></div>
				<div class="col-lg-4 col-md-4 col-xs-4">
				</div>
			</div>

			<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-4"></div>
			<div class="col-lg-4 col-md-4 col-xs-4">
			</br>
			<div class="jumbotron">
			<form name="reportForm" action="makeReport.php" onsubmit="return validateReportForm()"; method="post">
				Title:<br/>
				<input type="text" name="title" class = "form-control"><br><br>

				Recipe Name:<br/>
				<input type="text" name="recipeName" class = "form-control"><br><br>

				Description:<br/>
				<textarea rows="8" cols="35" name="desc">

				</textarea>

				<input type="submit" name="Submit" value="Submit" style="height:30px;width:150px;font-size:14pt;"><br><br>
			</form>
		</div>
	</div>

	<script>
	function validateReportForm() {
		var title=document["reportForm"]["title"].value;
		var recipeName=document["reportForm"]["recipeName"].value;
		var description=document["reportForm"]["desc"].value;


		if (title == null || title == "")
	{
				alert("Title field cannot be empty!");
				return false;
		}
	else if(recipeName=="" || recipeName == null)
	{
		alert("Recipe Name field cannot be empty!");
		return false;
	}
	else if(description=="" || description==null)
	{
		alert("Description field cannot be empty!");
		return false;
	}
	}
	</script>

	</div>





</body>

</head>
</html>
