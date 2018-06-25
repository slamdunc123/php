<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 10 - Lecture 68: What are class methods and how to create them-->

<?php
//define a class
class Car {

    function moveWheels(){
        echo 'wheels move';
    }

}

//check to see if class already exists    
if(class_exists('Car')){
    echo 'The class exists';
} else {
    echo 'no the class does not exist';
}

echo '<br>';

//check to see if method within the class already exists    
if(method_exists('Car', 'moveWheels')){
    echo 'The method exists';
} else {
    echo 'no the method does not exist';
}

?>

	
</body>
</html>



