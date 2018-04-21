<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 echo and print Statements</title>
</head>
<body>

<?php

//PHP 5 echo and print Statements

/*
PHP 5 echo and print Statements
In PHP there are two basic ways to get output: echo and print.

In this tutorial we use echo (and print) in almost every example. So, this chapter contains a little more info about those two output statements.

PHP echo and print Statements
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

The PHP echo Statement
The echo statement can be used with or without parentheses: echo or echo().

*/

// Display Text
//The following example shows how to output text with the echo command (notice that the text can contain HTML markup):

echo "<h2>PHP is Fun!</h2>";
echo "Hello World!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

//Display Variables

//The following example shows how to output text and variables with the print statement:
echo "<br>";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;

?>
    
</body>
</html>