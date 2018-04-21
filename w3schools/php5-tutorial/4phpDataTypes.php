<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 Data Types</title>
</head>
<body>
    
    <?php

    //PHP 5 Data Types

    /*
    PHP Data Types
    Variables can store data of different types, and different data types can do different things.

    PHP supports the following data types:

    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource

    PHP String
    A string is a sequence of characters, like "Hello world!".

    A string can be any text inside quotes. You can use single or double quotes:
    */

    

    echo "<br>";
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;

    /*
    PHP Integer
    An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

    Rules for integers:

    An integer must have at least one digit
    An integer must not have a decimal point
    An integer can be either positive or negative
    Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
    In the following example $x is an integer. The PHP var_dump() function returns the data type and value:
    */
    echo "<br>";
    $x = 5985;
    var_dump($x);

    /*
    PHP Float
    A float (floating point number) is a number with a decimal point or a number in exponential form.

    In the following example $x is a float. The PHP var_dump() function returns the data type and value:
    */
    echo "<br>";
    $x = 10.365;
    var_dump($x);

    /*
    PHP Boolean
    A Boolean represents two possible states: TRUE or FALSE.

    $x = true;
    $y = false;
    Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorial.

    PHP Array
    An array stores multiple values in one single variable.

    In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
    */
    echo "<br>";
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);

    //You will learn a lot more about arrays in later chapters of this tutorial.

    /*
    PHP Object
    An object is a data type which stores data and information on how to process that data.

    In PHP, an object must be explicitly declared.

    First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:            
    */

    echo "<br>";

    class Car{
        function Car(){
            $this->model = "VW";

        }
    }
    //  create an object
    $herbie = new Car();

    // show object properties
    echo $herbie -> model;

    //You will learn more about objects in a later chapter of this tutorial.

    /*
    PHP NULL Value
    Null is a special data type which can have only one value: NULL.

    A variable of data type NULL is a variable that has no value assigned to it.

    Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

    Variables can also be emptied by setting the value to NULL:
    */    
    echo "<br>";

    $x = "Hello world!";
    $x = null;
    var_dump($x);

    /*
    PHP Resource
    The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

    A common example of using the resource data type is a database call.

    We will not talk about the resource type here, since it is an advanced topic.
    */



?>

</body>
</html>


