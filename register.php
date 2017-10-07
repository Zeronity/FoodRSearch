<?php
{
$servername="localhost";
$username="root";
$password="";
$dbname="foodrsearch";
$con= new mysqli($servername, $username, $password, $dbname);

$name=$_POST['username'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$phone=$_POST['hp'];
$address=$_POST['address'];
$fname=$_POST['fname'];

$validate = "SELECT * from user where username='$name'";
$result = mysqli_query($con, $validate);
	if (mysqli_num_rows($result) > 0)
		{
			echo '<script type="text/javascript">alert("Username is existed");';
			echo 'location.href="registerform.php";</script>';
			mysqli_close($con);
		}
	else{
		$sql="INSERT INTO user(username, password, email, hp, address, fullname) VALUES ('$name', '$pwd', '$email', '$phone', '$address','$fname')";
		mysqli_query($con, $sql);
		echo '<script type="text/javascript">alert("You have registered successfully, you may now login!");';
		echo 'location.href="homepage.php";</script>';
		mysqli_close($con);
	}
	
}
?>

