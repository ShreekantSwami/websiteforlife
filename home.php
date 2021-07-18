<?php
session_start();
error_reporting(0);
include("connection.php");
echo "WELCOME ".$_SESSION['user_name'];

$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}
else{
	header('location:login.php');
}
$query = "SELECT * FROM student where username='$userprofile'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

echo $result['mobno'];
?>
<a href="logout.php">Logout</a>