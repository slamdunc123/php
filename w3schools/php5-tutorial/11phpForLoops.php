<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 for Loops</title>
</head>
<body>
    <?php
//PHP 5 for Loops

//PHP for loops execute a block of code a specified number of times.

/*
The PHP for Loop
The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
    code to be executed;
}
Parameters:

init counter: Initialize the loop counter value
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
increment counter: Increases the loop counter value
The example below displays the numbers from 0 to 10:

*/

for ($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}

/*

The PHP foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
    code to be executed;
}
For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

The following example demonstrates a loop that will output the values of the given array ($colors):

*/

echo "<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color){
    echo "$color <br>";
}

    ?>
</body>
</html>