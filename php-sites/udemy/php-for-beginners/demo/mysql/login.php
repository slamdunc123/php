<?php

if(isset($_POST["submit"])){
	
	//echo "yes we got it";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$conn = mysqli_connect("localhost", "root", "", "loginapp"); //create database connection
	
	if($conn){ //check database connection
		echo "We are connected";
	} else {
		die("Database connection failed");
	}
	
//	if($username && $password){
//		echo "username = " . $username;
//		echo "<br>";
//		echo "password = " . $password;
//		
//	} else {
//		echo "these fields cannot be blank";
//	}
	
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>

<!--Section 7 - Lecture 41: Markup for Login Page-->

<div class="container">
	
	<div class="col-sm-6">
	<form action="login.php" method="post">
		<div class="form-group">
		<label for="username">Username</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group">
		<label for="password">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	</form>
		
	</div>
</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>