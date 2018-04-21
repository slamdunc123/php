<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 Variables</title>
</head>
<body>

<?php

//PHP 5 Variables

/*
Variables are "containers" for storing information.

Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:
*/

$txt = "Hello World!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;

//Output Variables
//The PHP echo statement is often used to output data to the screen.

//The following example will show how to output text and a variable:

echo "<br>";
$txt2 = "W3Schools.com";
echo "I love $txt2!";

//The following example will produce the same output as the example above:

echo "<br>";
$txt3 = "W3Schools.com";
echo "I love " . $txt3 . "!";

//The following example will output the sum of two variables:
echo "<br>";

$x = 5;
$y = 4;
echo $x + $y;

/*
PHP Variables Scope
In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static

*/
/*
Global and Local Scope
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
*/

echo "<br>";

$x = 5; //global scope

function myTest(){
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

//A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
echo "<br>";

function myTest2(){
    $x2 = 5; // local scope
    echo "<p>Variable x inside function is: $x2</p>";
}

myTest2();

// using x outside the function will generate an error
echo "<br>";
echo "<p>Variable x2 outside function is: $x2</p>";

//You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.

/*
PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

*/

$x3 = 5;
$y3 = 10;

function myTest3(){
    global $x3, $y3;
    $y3 = $x3 + $y3;
}

myTest3();
echo $y3; // outputs 15

//PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

//The example above can be rewritten like this:

echo "<br>";
$x4 = 5;
$y4 = 10;

function myTest4(){

    $GLOBALS['y4'] = $GLOBALS['x4'] + $GLOBALS['y4'];

}

myTest4();
echo $y4; // outputs 15

/*
PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
*/
//To do this, use the static keyword when you first declare the variable:

echo "<br>";
function myTest5(){
    static $x5 = 0;
    echo $x5;
    $x5++;
}
myTest5();
myTest5();
myTest5();

/*
Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

Note: The variable is still local to the function.
*/


?>

    
</body>
</html>