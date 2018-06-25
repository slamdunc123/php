<?php

//Section 6 - Lecture 32: Checking for Form Submission
if(isset($_POST["submit"])){ //check to see if submit has been clicked
	
//Section 6 - Lecture 33: Extracting Information from Form
	$username = $_POST["username"]; //assign form input names to php variables
	$password = $_POST["password"];
	echo "Username: " . $username . "<br>"; 
	echo "Password: " . $password . "<br><br>"; 
	
//Section 6 - Lecture 34: Validating The Form Values
	$name = ["Edwin", "Peter", "Maria", "Janet", "Thomas"];
	$min = 5;
	$max = 10;
	if(strlen($username) < $min){ //uses strlen function to test against number of characters
		echo "Username has to be longer than five characters";
	} 
	
	if(strlen($username) > $max){
		echo "Username cannot be longer than ten characters";
	} 
	
	if(!in_array($username, $name)){ //use in_array function to check if $username is not in $name array
		echo "Sorry you are not allowed";
	} else {
		echo "Welcome " . $username;
	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 6 - Lecture 32: Checking for Form Submission-->


<form action="form.php" method="post"><!--sends the form data to the same or different page-->
	
	<input type="text" name="username" placeholder="Enter Username"><br><br>
	<input type="password" name="password" placeholder="Enter Password"><br><br>
	<input type="submit" name="submit"><br><br>
</form>

	
</body>
</html>



