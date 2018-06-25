<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 4 - Lecture 23: Function Parameters-->

<?php
	
	/*	
function greeting($message){ //function accepts argument
	echo $message;
	
}	
	
	
greeting("Hello Student");//passing parameter with the function call
*/
	

	
function calculator($num1, $num2){
	$sum = $num1 + $num2;
	$sub = $num1 - $num2;
	$mul = $num1 * $num2;
	$div = $num1 / $num2;
	
	echo $sum . "<br>" . $sub . "<br>" . $mul . "<br>" . $div;
}
	
calculator(2000, 100);

?>

	
</body>
</html>



