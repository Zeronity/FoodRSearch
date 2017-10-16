<?php
{
$servername="localhost";
$username="root";
$password="";
$dbname="foodrsearch";
$con= new mysqli($servername, $username, $password, $dbname);

session_start();
$name=$_SESSION['username'];

$title=$_POST['title'];
$recipeName=$_POST['recipeName'];
$description=$_POST['description'];



$sql="INSERT INTO report(title, recipeName, description, status, madeBy) VALUES ('$title', '$recipeName', '$description', 'pending', '$name')";
		mysqli_query($con, $sql);
		echo '<script type="text/javascript">alert("You have made a report successfully, we will get back to you later!");';
		echo 'location.href="userhome.php";</script>';
		mysqli_close($con);
	}

}
?>
