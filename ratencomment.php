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
			$id=$_SESSION["RecipeID"][$i];
			$rating=$_POST["select$n"];
			$comment=$_POST["comment$n"];
			
			$checkcomment=$_SESSION["comment"][$i];
			$checkrating=$_SESSION["rating"][$i];
			if($rating!="0"||$comment!=""){
				if($comment==""){
				$comment="not comments";
				}
			if($checkcomment!="" && $checkrating!=""){
				$sql = "UPDATE recipe SET rating='$checkrating<br/>$rating star' ,comment='$checkcomment<br/>$comment'  WHERE RecipeID='$id'";
				mysqli_query($con, $sql);
			}else{
				$sql = "UPDATE recipe SET rating='$rating star' ,comment='$comment'  WHERE RecipeID='$id'";
				mysqli_query($con, $sql);
			}
			}
			}
			
			}

		

		echo '<script type="text/javascript">alert("You have rate and comment the recipe successfully!");';
		echo 'location.href="userrecipe.php";</script>';




	mysqli_close($con);

?>
