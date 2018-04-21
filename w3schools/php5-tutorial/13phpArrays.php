<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 Arrays</title>
</head>
<body>
    <?php

//PHP 5 Arrays

//An array stores multiple values in one single variable:

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    
/*
What is an Array?
An array is a special variable, which can hold more than one value at a time.

If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";
However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values by referring to an index number.


*/
/*
Create an Array in PHP
In PHP, the array() function is used to create an array:

array();
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
*/
/*    

PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");
or the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
The following example creates an indexed array named $cars, assigns three elements to it, and then prints a text containing the array values:

*/
echo "<br>";    
$cars2 = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars2[0] . ", " . $cars2[1] . " and " . $cars2[2] . ".";
    
/*
Get The Length of an Array - The count() Function
The count() function is used to return the length (the number of elements) of an array:
*/
echo "<br>";
$cars3 = array("Volvo", "BMW", "Toyota");
echo count($cars3);
    
/*
Loop Through an Indexed Array
To loop through and print all the values of an indexed array, you could use a for loop, like this:
*/
echo "<br>";    
$cars4 = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars4);

for($x4 =0; $x4 < $arrlength; $x4++){
    echo $cars4[$x4];
    echo "<br>";
}
foreach($cars4 as $y4){ //cleaner way is to use foreach
    echo $y4;
    echo "<br>";
}

    
/*
PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
or:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
The named keys can then be used in a script:
*/
echo "<br>";
$age = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old.";
    
/*

Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, like this:
*/
echo "<br>";
$age2 = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach($age2 as $x2 => $x2_value){
    echo "Key=" . $x2 . ", Value=" .$x2_value;
    echo "<br>";
}
    
/*
Multidimensional Arrays
Multidimensional arrays will be explained in the PHP advanced section.

Complete PHP Array Reference
For a complete reference of all array functions, go to our complete PHP Array Reference.

The reference contains a brief description, and examples of use, for each function!

*/    




    ?>
</body>
</html>