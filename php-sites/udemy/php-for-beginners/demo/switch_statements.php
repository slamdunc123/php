<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 3 - Lecture 17: Switch Statements in PHP-->

<?php
	
	//switch statements used to avoid multiple if statements
	
$number = 4;
	
if($number < 10){
echo "this";
	
}
	
if($number < 20){
echo "this";
	
}
	
if($number < 30){
echo "this";
	
}
	
if($number < 40){
echo "this";
	
}
   

	//switch statement are useful when testing one condition against multiple values
	
$number = 10;
	
	switch($number){
			case 34:
			echo "is it 34";
			break;
			case 37:
			echo "is it 37";
			break;
			case 35:
			echo "is it 35";
			break;
			case 24:
			echo "is it 24";
			break;
			default:
			echo "it is none of these";
			break;
			
			
	}
	
	
?>

	
</body>
</html>



