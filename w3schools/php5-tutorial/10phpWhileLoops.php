<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 while Loops</title>
</head>
<body>
    <?php
//PHP 5 while Loops

//PHP while loops execute a block of code while the specified condition is true.

/*
PHP Loops
Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.

In PHP, we have the following looping statements:

while- loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for- loops through a block of code a specified number of times
foreach- loops through a block of code for each element in an array

*/

/*

The PHP while Loop
The while loop executes a block of code as long as the specified condition is true.

Syntax
while (condition is true) {
    code to be executed;
}
The example below first sets a variable $x to 1 ($x = 1). Then, the while loop will continue to run as long as $x is less than, or equal to 5 ($x <= 5). $x will increase by 1 each time the loop runs ($x++):

*/

$x = 1;

while ($x <= 5){
    echo "The number is: $x <br>";
    $x++;
}

/*
The PHP do...while Loop
The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

Syntax
do {
    code to be executed;
} while (condition is true);
The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:

*/

echo "<br>";
$x2 = 1;

do {
    echo "The number is: $x2 <br>";
    $x2++;
}
while ($x2 <= 5);

/*

Notice that in a do while loop the condition is tested AFTER executing the statements within the loop. This means that the do while loop would execute its statements at least once, even if the condition is false the first time.

The example below sets the $x variable to 6, then it runs the loop, and then the condition is checked:

*/

echo "<br>";

$x3 = 6;

do {
    echo "The number is: $x3 <br>";
    $x++;
}
while ($x <= 5);

//The for loop and the foreach loop will be explained in the next chapter.
    ?>

</body>
</html>