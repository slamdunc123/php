<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 5 - Lecture 29: String Functions-->

<?php
	
	//http://php.net/manual/en/ref.strings.php
	
	$string = "Hello student do you like the class?";
	
	echo strlen($string); //displays number of characters in the string
	
	echo "<br>";
	
	echo strtoupper($string);//makes all characters uppercase
	
	echo "<br>";
	
	echo strtolower($string);//makes all characters lowercase
	
	echo "<br>";
	
	echo ucwords($string);//makes all words in string start with uppercase letter

?>

	
</body>
</html>



