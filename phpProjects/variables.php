<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php 

//-------------------------------------------------------------------variables

$name = "Duncan"; //variable $name assigned value "Duncan"
$age = 46; //variable $age assigned value 46
$x = 10;
$y = 20;
$a = $x + $y;
$b = $x - $y;

//-------------------------------------------------------------------function
echo "My name is $name and my age is $age <br>";  //echo function prints information with ""
echo 'My name is '. $name . ' and my age is $age<br>'; //if in single '' then need to contatinate with .
echo "Sum of x and y is $a<br>";
echo "Difference of x and y is $b<br>";
echo "End";

?>
</body>



</html>