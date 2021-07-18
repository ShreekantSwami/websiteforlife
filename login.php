<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Here</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<style type="text/css">
	.container{
		margin-top: 20%;
	}
</style>
<body> 
<form action="" method="post">
<div class="container" >
	<h1>Sign-in</h1>
<input  class="input-class" type="text" name="username" placeholder="Username" value=""/><br><br>	
<input placeholder="Password" class="input-class" type="password" name="password" value=""/>	<br><br>
<input class="input-login" type="submit" name="submit" value="Login">


</div>

</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pwd = $_POST['password']; 
	$query = "SELECT * FROM student where username='$user' && password='$pwd'";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	if($total==1){
		$_SESSION['user_name'] = $user;
		header('location:home.php');
	}
	else{
		echo "Failed";
	}
}
?>