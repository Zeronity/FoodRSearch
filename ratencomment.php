<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "foodrsearch";
	$con = new mysqli($servername, $username, $password, $dbname);


	if(isset($_POST['RateNComment']))
	{

		$f = count($_SESSION['RecipeID']);
		for ($i=0;$i<$f;$i++){
			$n=$i+1;

			$rating=$_POST["select$n"];
			$comment=$_POST["comment$n"];
			$id=$_SESSION["RecipeID"][$i];
			$sql = "UPDATE recipe SET rating='$rating',comment='$comment' WHERE RecipeID='$id'";
			mysqli_query($con, $sql);
			}

		}

		echo '<script type="text/javascript">alert("You have rate and comment the recipe successfully!");';
		echo 'location.href="userrecipe.php";</script>';




	mysqli_close($con);

?>
