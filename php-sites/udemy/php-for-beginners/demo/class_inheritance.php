<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 10 - Lecture 69: How to instantiate a class-->

<?php
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



//


//Section 10 - Lecture 71: Class Inheritance

//add another class
echo '<br><br>';

//using the extends keyword will inherit all the properties and methods from the Car class
//Plane is a child class of the parent Car 
class Plane extends Car{

}

$jet = new Plane(); //create new object $jet from class Plane which inherits properties and methods from class Car
echo $jet->wheels; // 4 - run object $jet against the inherited $wheels property and echo out
$jet->moveWheels();//run objet $jet against the inherited moveWheels() method - $wheels becomes 10
echo $jet->wheels; // 10 - run object $jet against the inherited $wheels property and echo out

// if(class_exists('Plane')){
//     echo 'Class exists';
// }


?>

	
</body>
</html>



