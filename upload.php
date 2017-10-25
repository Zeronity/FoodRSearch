
<?php
{
$servername="localhost";
$username="root";
$password="";
$dbname="foodrsearch";
$con= new mysqli($servername, $username, $password, $dbname);

session_start();
$name=$_SESSION['username'];  

$rname=$_POST['rname'];
$rtype=$_POST['rtype'];
$ingredient=$_POST['ingredient'];
$desc=$_POST['desc'];
$video=$_POST['video'];


$sql="INSERT INTO recipe(recipeName, recipeType, Ingredient, Description, videoURL,uploadedBy) VALUES ('$rname', '$rtype', '$ingredient', '$desc', '$video', '$name')";
mysqli_query($con, $sql);
		echo '<script type="text/javascript">alert("You have uploaded successfully!");';
		echo 'location.href="userhome.php";</script>';
		mysqli_close($con);
}
?>

