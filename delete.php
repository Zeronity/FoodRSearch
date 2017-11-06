<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "foodrsearch";
	$con = new mysqli($servername, $username, $password, $dbname);

$f = count($_SESSION['RecipeID']);
for ($i=0;$i<$f;$i++){
	$n=$i+1;
	if(isset($_POST['delete$n']))
	{
			$id=$_SESSION['RecipeID'][$i];
			$sql = "DELETE * FROM recipe WHERE RecipeID='$id'";
			mysqli_query($con, $sql);
			}

		}

		echo '<script type="text/javascript">alert("You have deleted the recipe successfully!");';
		echo 'location.href="ownrecipe.php";</script>';




	mysqli_close($con);

?>
