<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "foodrsearch";
	$con = new mysqli($servername, $username, $password, $dbname);
	

	if(isset($_POST['Update']))
	{
		
		$f = count($_SESSION['RecipeID']);
		for ($i=0;$i<$f;$i++){
			$n=$i+1;
			$recipeType=$_POST["select$n"];
			$name=$_POST["rname$n"];
			$ingd=$_POST["ingredient$n"];
			$desc=$_POST["description$n"];
			$video=$_POST["videoURL$n"];
			$id=$_SESSION["RecipeID"][$i];
			$sql = "UPDATE recipe SET RecipeType='$recipeType', RecipeName='$name', Ingredient='$ingd', Description='$desc', videoURL='$video' WHERE RecipeID='$id'";
			mysqli_query($con, $sql);
			}
			
		}
		
		echo '<script type="text/javascript">alert("You have update the recipe successfully!");';
		echo 'location.href="ownrecipe.php";</script>';

	
	
	
	mysqli_close($con);

?>