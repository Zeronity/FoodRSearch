<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "foodrsearch";
	$con = new mysqli($servername, $username, $password, $dbname);
	
	if(isset($_POST['submit']))
	{
		
		$f = count($_SESSION['reportID']);
		for ($i=0;$i<$f;$i++){
			$n=$i+1;
			$status=$_POST["select$n"];
			if ($status != ""){
				$id=$_SESSION["reportID"][$i];
				$sql="UPDATE report SET status='$status' WHERE reportID=$id";
				mysqli_query($con, $sql);
			}
			
		}
		
		echo '<script type="text/javascript">alert("Status have updated successfully!");';
		echo 'location.href="viewreport.php";</script>';
	}
	
	
	
	mysqli_close($con);

?>
