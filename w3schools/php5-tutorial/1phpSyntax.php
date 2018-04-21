<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 Syntax</title>
</head>
<body>
    <?php

//PHP 5 Syntax

//A PHP script is executed on the server, and the plain HTML result is sent back to the browser.

/*
Basic PHP Syntax
A PHP script can be placed anywhere in the document.

A PHP script starts with <?php and ends with ?>:
*/

    echo "Hello World!<br>";

    // This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line

$x = 5 /* + 15 */ + 5;
echo $x . "<br>";

//keywords aren't case sensitive
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

//variable names are case sensitive

$color = "red";

echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

    ?>


</body>
</html>