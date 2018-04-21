<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 if...else...elseif Statements</title>
</head>
<body>
    <?php
//PHP 5 if...else...elseif Statements

//Conditional statements are used to perform different actions based on different conditions.

/*
PHP Conditional Statements
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif....else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed

*/
/*

PHP - The if Statement
The if statement executes some code if one condition is true.

Syntax
if (condition) {
    code to be executed if condition is true;
}
The example below will output "Have a good day!" if the current time (HOUR) is less than 20:

*/

$t = date("H");

if ($t < "20"){
    echo "Have a good day!";
}

/*

PHP - The if...else Statement
The if....else statement executes some code if a condition is true and another code if that condition is false.

Syntax
if (condition) {
    code to be executed if condition is true;
} else {
    code to be executed if condition is false;
}
The example below will output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:

*/
echo "<br>";
$t2 = date("H");

if ($t2 < "20"){
    echo "Have a good day!";
} 
else {
    echo "Have a good night!";
}

/*
PHP - The if...elseif....else Statement
The if....elseif...else statement executes different codes for more than two conditions.

Syntax
if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    code to be executed if this condition is true;
} else {
    code to be executed if all conditions are false;
}
The example below will output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":

*/

echo "<br>";
$t3 = date("H");

if ($t < "10"){
    echo "Hav a good morning!";
}
elseif ($t3 < "20"){
    echo "Have a good day!";
}
else {
    echo "Have a good night!";
}

/*
PHP - The switch Statement
The switch statement will be explained in the next chapter.

*/
    ?>

</body>
</html>