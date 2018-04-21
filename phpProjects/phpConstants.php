<!-- 
Create a PHP Constant
To create a constant, use the define() function.

Syntax
define(name, value, case-insensitive)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
The example below creates a constant with a case-sensitive name:

Example
 -->

<?php

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;


?>

<!-- 
The example below creates a constant with a case-insensitive name:

Example
 -->
 <br>
 <?php 
 define("GREETING", "Welcome to W3Schools.com!", true);
 echo greeting;
 
 ?>
 
 <!-- 
Constants are Global
Constants are automatically global and can be used across the entire script.

The example below uses a constant inside a function, even if it is defined outside the function:

Example
  -->
  <br>
  <?php 
  define("GREETINGS", "Welcome to W3Schools.com!");
  
  function myTest()
  {
      echo GREETINGS;
  }
  
  myTest();
  ?>