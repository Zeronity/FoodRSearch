<?php
session_start();
if(isset($_POST['Login']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="foodrsearch";
$con= new mysqli($servername, $username, $password, $dbname);

$name=$_POST['username'];
$pwd=$_POST['pwd'];

if($name !=''&& $pwd !='')
{
	$sql = "select * from user WHERE username='$name' and password='$pwd'";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['username']=$name;
		echo '<script type="text/javascript">alert("You have login successfully!");';
		echo 'location.href="userhome.php";</script>';

	}

	else
	{
		echo '<script type="text/javascript">alert("Your username/password is incorrect!");';
		echo 'location.href="loginform.php";</script>';
	}
}




}
mysqli_close($con);
?>
