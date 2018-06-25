<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 4 - Lecture 25: Global Variables and Scope-->

<?php
//local scope - available only inside a function
//global scope - available inside and outside of a function
	
$x = "outside"; //global scope
	
	function convert(){
		global $x; //use the keyword global to make variable available outside of the function
		$x = "inside"; //local scope
		//return $x; //can return the new value of the varible...
		
	}

echo $x;
echo "<br>";
	
//$x = convert();//...and assign the value to the variable outside
convert();	
echo $x;
	
	
	
	

?>

	
</body>
</html>



