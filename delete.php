<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "foodrsearch";
	$con = new mysqli($servername, $username, $password, $dbname);
	
	if(isset($_POST['delete'])){
		if(isset($_POST['name'])){
			$name=$_POST['name'];
			$sql = "DELETE FROM recipe WHERE RecipeName='$name'";
			mysqli_query($con, $sql);
			echo '<script type="text/javascript">alert("You have deleted the recipe successfully!");';
			echo 'location.href="ownrecipe.php";</script>';
		}
		else{
			echo '<script type="text/javascript">alert("You have not select any recipe to delete!");';
			echo 'location.href="ownrecipe.php";</script>';
		}
	}
	
	

	
	
	
	mysqli_close($con);

?>