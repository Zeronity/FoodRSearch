<?php
{
$servername="localhost";
$username="root";
$password="";
$dbname="foodrsearch";
$con= new mysqli($servername, $username, $password, $dbname);

session_start();
$name=$_SESSION['username'];

$recipeType=$_POST["RecipeType"];
$video=$_POST["videoURL"];
$name=$_POST["RecipeName"];
$ingd=$_POST["Ingredient"];
$desc=$_POST["Description"];
$recipeID=$row['RecipeID'];





$sql = "UPDATE recipe SET RecipeType='$recipeType', RecipeName='$name', Ingredient='$ingd', Description='$desc', videoURL='$video' WHERE RecipeID='$recipeID'  ;
		mysqli_query($con, $sql);
		echo "<script type='text/javascript'>alert('You have update the recipe successfully!');";
		echo "location.href='userhome.php';</script>";
		mysqli_close($con);
	}


?>
