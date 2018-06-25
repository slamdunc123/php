<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 2 - Lecture 13: Associative Arrays-->

<?php
	
$number = [10,20,49]; //normal array - uses indices to return values
	
	echo $number[2] . "<br>";
	print_r($number);
	echo "<br>";
	
$name = ["first_name" => "Edwin", "last_name" => "Diaz"]; //associative array - uses label and/or to return values
	
	print_r($name);
	echo "<br>";
	print_r($name["first_name"]);
	echo "<br>";
	
	echo $name["first_name"] . " " . $name["last_name"];
	
/*
the above produces:
49
Array ( [0] => 10 [1] => 20 [2] => 49 ) 
Array ( [first_name] => Edwin [last_name] => Diaz ) 
Edwin
Edwin Diaz
*/
?>
	
</body>
</html>



