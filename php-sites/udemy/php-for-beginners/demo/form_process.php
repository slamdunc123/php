<?php

//Section 6 - Lecture 35: External Page Submission

if(isset($_POST["submit"])){ //check to see if submit has been clicked
	

	$username = $_POST["username"]; //assign form input names to php variables
	$password = $_POST["password"];
	echo "Username: " . $username . "<br>"; 
	echo "Password: " . $password . "<br><br>"; 
	

	$name = ["Edwin", "Peter", "Maria", "Janet", "Thomas"];
	$min = 5;
	$max = 10;
	if(strlen($username) < $min){ //uses strlen function to test against number of characters
		echo "<br>Username has to be longer than five characters";
	} 
	
	if(strlen($username) > $max){
		echo "<br>Username cannot be longer than ten characters";
	} 
	
	if(!in_array($username, $name)){ //use in_array function to check if $username is not in $name array
		echo "<br>Sorry you are not allowed";
	} else {
		echo "<br>Welcome " .$username;
	}
}


?>


