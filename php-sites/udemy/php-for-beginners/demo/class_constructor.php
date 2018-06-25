<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 10 - Lecture 69: How to instantiate a class-->

<?php

/*
//define a class
class Car {

    var $wheels = 4; //varibles within objects require the var keyword
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels(){
        //echo 'wheels move';
        $this->wheels = 10; //use this keyword when in the method of a class
    }

    function createDoors(){
        //echo 'wheels move';
        $this->doors = 6; //use this keyword when in the method of a class
    }

}


//instatiate the class ie an instance of the class or an object

$bmw = new Car();
$mercedes = new Car();

$bmw->moveWheels(); //the object $bmw can access the method moveWheels()
$mercedes->moveWheels();

echo $bmw->wheels; //when using the object variable the $ sign can be omitted
echo $mercedes->hood;

//called object variable values can be changed but won't affect the class variables 
$bmw->wheels = 8;
echo $bmw->wheels; //8
echo $mercedes->wheels; //4



//create another instance of Car class

$truck = new Car();
echo $truck->wheels = 12;
echo $truck->doors;//4
$truck->createDoors();//apply the new value from the method
echo $truck->doors;//6



//check to see if class already exists    
// if(class_exists('Car')){
//     echo 'The class exists';
// } else {
//     echo 'no the class does not exist';
// }

// echo '<br>';

//check to see if method within the class already exists    
// if(method_exists('Car', 'moveWheels')){
//     echo 'The method exists';
// } else {
//     echo 'no the method does not exist';
// }

*/

//Section 10 - Lecture 72: Constructors

class Car {
var $wheels = 4; //varibles within objects require the var keyword
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct(){
        //echo 'wheels move';
       echo  $this->wheels = 10; //use this keyword when in the method of a class
    }

}
//the construtor runs automatically everytime a new object is created
//this is useful for default values or to run before any other methods
$bmw = new Car();
$truck= new Car();
$semi = new Car();

?>

	
</body>
</html>



