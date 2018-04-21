<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 Sorting Arrays</title>
</head>
<body>
   <?php

//PHP 5 Sorting Arrays

//The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

/*
PHP - Sort Functions For Arrays
In this chapter, we will go through the following PHP array sort functions:

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/
/*
Sort Array in Ascending Order - sort()
The following example sorts the elements of the $cars array in ascending alphabetical order:
*/

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

echo "<br>";
$cars2=array("Volvo","BMW","Toyota"); 
sort($cars2);
foreach($cars2 as $car2){ //cleaner to write using foreach
    echo $car2;
    echo "<br>";
}

// The following example sorts the elements of the $numbers array in ascending numerical order:
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

echo "<br>";
$numbers2=array(4,6,2,22,11);
sort($numbers2);

foreach($numbers2 as $number2){ //cleaner to write using foreach
echo $number2;
echo "<br>";
}

/*
Sort Array in Descending Order - rsort()
The following example sorts the elements of the $cars array in descending alphabetical order:
*/

echo "<br>";
$cars3 = array("Volvo", "BMW", "Toyota");
rsort($cars3);
$clength = count($cars3);
for($x3 = 0; $x3 < $clength; $x3++) {
    echo $cars3[$x3];
    echo "<br>";
}

echo "<br>";
$cars4 = array("Volvo", "BMW", "Toyota");
rsort($cars4);

foreach($cars4 as $car4){ //cleaner to write using foreach
    echo $car4;
    echo "<br>";
}

//The following example sorts the elements of the $numbers array in descending numerical order:

echo "<br>";
$numbers5 = array(4, 6, 2, 22, 11);
sort($numbers5);

$arrlength = count($numbers5);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers5[$x];
    echo "<br>";
}

echo "<br>";
$numbers6 = array(4, 6, 2, 22, 11);
sort($numbers6);

foreach($numbers6 as $number6){ //cleaner to write using foreach
    echo $number6;
    echo "<br>";
}

/*
Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:
*/

echo "<br>";
$age = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);

foreach($age as $a => $a_value) {
    echo "Key=" . $a . ", Value=" . $a_value;
    echo "<br>";
} 

/*
Sort Array (Ascending Order), According to Key - ksort()
The following example sorts an associative array in ascending order, according to the key:
*/

echo "<br>";
$age2 = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age2);

foreach($age2 as $a2 => $a2_value) {
    echo "Key=" . $a2 . ", Value=" . $a2_value;
    echo "<br>";
} 

/*
Sort Array (Descending Order), According to Value - arsort()
The following example sorts an associative array in descending order, according to the value:
*/

echo "<br>";
$age3 = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age3);

foreach($age3 as $a3 => $a3_value) {
    echo "Key=" . $a3 . ", Value=" . $a3_value;
    echo "<br>";
} 

/*
Sort Array (Descending Order), According to Key - krsort()
The following example sorts an associative array in descending order, according to the key:
*/

echo "<br>";
$age4 = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
krsort($age4);

foreach($age4 as $a4 => $a4_value) {
    echo "Key=" . $a4 . ", Value=" . $a4_value;
    echo "<br>";
} 

/*
Complete PHP Array Reference
For a complete reference of all array functions, go to our complete PHP Array Reference.

The reference contains a brief description, and examples of use, for each function!
*/








   ?> 
</body>
</html>