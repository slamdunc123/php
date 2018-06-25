<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 4 - Lecture 24: Return Values From Functions-->

<?php


/*	
function addNumbers($number1, $number2){
	
	$sum = $number1 + $number2;
	echo $sum;
	
}
	
addNumbers(12, 24);
	
	
*/	



function addNumbers($number1, $number2){
	$sum = $number1 + $number2;
	
	return $sum; //output of the function
}	
	
$result = addNumbers(34, 64); //assign the output of the function to a variable
	
	echo $result;
	echo "<br>";
	
$result = addNumbers(100, $result);//this works because variables are assigned from right to left
	
echo $result; //display the variable
	echo "<br>";
	
$result = addNumbers(300, $result);
	
echo $result;
	

?>

	
</body>
</html>



