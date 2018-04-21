<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 Constants</title>
</head>
<body>
    <?php

//PHP 5 Constants
//Constants are like variables except that once they are defined they cannot be changed or undefined.
/*
PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
To create a constant, use the define() function.

Syntax
define(name, value, case-insensitive)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
The example below creates a constant with a case-sensitive name:
*/

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//The example below creates a constant with a case-insensitive name:

echo "<br>";
define("GREETING2", "Welcome to W3Schools.com!", true);
echo greeting2;

/*
Constants are Global
Constants are automatically global and can be used across the entire script.

The example below uses a constant inside a function, even if it is defined outside the function:
*/

echo "<br>";

define("GREETING3", "Welcome to W3Schools.com!");

function myTest(){
    echo GREETING3;
}

myTest();

    ?>
</body>
</html>