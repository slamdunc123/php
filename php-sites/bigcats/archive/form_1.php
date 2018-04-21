<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--html - start-->

<html lang="en">

    <!--head - start-->    

    <head>

        <!--title - start-->

        <!--<title>TODO supply a title</title>-->
        <title>HTML2 Template</title>

        <!--title - end-->

        <!--meta - start-->    

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--meta - end-->

        <!--links - start-->

        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="bootstrap-3.3.7/dist/css/bootstrap.theme.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--links - end--> 

    </head>

    <!--head - end-->

    <!--body - start-->

    <body>      
        <!--<div>TODO write content</div>-->
        <!--header - start-->

        <header>


        </header>

        <!--header - end-->

        <!--section one - start-->

        <section>
            
            <div class="container">
                <h1>Contact Us</h1>
                <form id="form" method="post" action="form_1.php" onsubmit="return validate();">
                    Name: <input type="text" name="name" id="name" value="" class="form-control" placeholder="Name"/><br> 
                    Email: <input type="text" name="email" id="email" value="" class="form-control" placeholder="Email"/><br>
                    Message: <textarea name="message" rows="5" class="form-control" placeholder="Message"></textarea><br> 
                    Age: <input type="text" name="age" id="age" value="" class="form-control" placeholder="Age"/><br>
                    <input type="submit" name="submit" class="btn btn-default" />
                    
                    
                </form>
                <div id="errors">
                    
                </div>
            </div>
            <script>
                function validate(){
                    var name = document.getElementById('name').value;
                    var email = document.getElementById('email').value;
                    var age = document.getElementById('age').value;
                    
                    if(!name.length == 0 && name.length >=5){
                        name2 = document.getElementById('name');
                        name2.style.backgroundColor = "white";
                    }
                    
                    if(!age.length == 0 && !isNan(age)){
                        age2 = document.getElementById('age');
                        age2.style.backgroundColor = "white";
                    }
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        
                    if(!email.length == 0 && re.test(email)){
                        email2 = document.getElementById('email');
                        email2.style.backgroundColor = "white";
                    }
                    
                    if(name.length == 0){
                        var errors = document.getElementById('errors');
                        errors.style.color = "red";
                        errors.innerHTML = "You must enter a name!";
                        name2 = document.getElementById('name');
                        name2.value = "you must enter a name";
                        name2.style.backgroundColor="red";
                        return false;
                    }
                    else {
                        if(name.length < 5){
                            var errors = document.getElementById('errors');
                            errors.style.color = "red";
                            errors.innerHTML = "You must enter a name greater than or equal to 5 characters!";
                            name2 = document.getElementById('name');
                            name2.value = "you must enter a name greater than or equal to 5 characters";
                            name2.style.backgroundColor="red";
                            return false;
                    }
                    }
                    
                    if(email.length == 0){
                        var errors = document.getElementById('errors');
                        errors.style.color = "red";
                        errors.innerHTML = "You must enter a valid email!";
                        email2 = document.getElementById('email');
                        email2.value = "you must enter a valid email";
                        email2.style.backgroundColor="red";
                        return false;
                    }
                    else {
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        if(!re.test(email)){
                            var errors = document.getElementById('errors');
                            errors.style.color = "red";
                            errors.innerHTML = "You must enter a valid email!";
                            email2 = document.getElementById('email');
                            email2.value = "you must enter a valid email!";
                            email2.style.backgroundColor="red";
                            return false;
                    }
                    }
                    if(age.length == 0){
                        var errors = document.getElementById('errors');
                        errors.style.color = "red";
                        errors.innerHTML = "You must enter an age!";
                        age2 = document.getElementById('age');
                        age2.value = "you must enter an age";
                        age2.style.backgroundColor="red";
                        return false;
                    }
                    else {
                        if(isNaN(age)){
                            var errors = document.getElementById('errors');
                            errors.style.color = "red";
                            errors.innerHTML = "You must enter an age!";
                            age2 = document.getElementById('age');
                            age2.value = "you must enter an age";
                            age2.style.backgroundColor="red";
                            return false;
                    }
                    }
                }
            </script>
            
            <?php
            
                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $nameLength = strlen($name);
                    
                    if(empty($name)){
                        echo "You must enter a name";
                        exit;
                    }
                    else{
                        if($nameLength < 5){
                            echo "The name must be greater than or equal to 5 characters";
                            exit;
                        }
                    }
                    if(empty($email)){
                        echo "You must enter as email";
                        exit;
                    }
                    else{
                        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                            echo "This is not a valid email";
                            exit;
                        }
                    }
                    if(empty($age)){
                        echo "You must enter an age";
                        exit;
                    }
                    else{
                        if(!is_numeric($age)){
                            echo "The age you enter must be a number!";
                            exit;
                        }
                    }
                    echo 'Name:'.$name.'<br />';
                    echo 'Name:'.$age.'<br />';
                    echo 'Name:'.$email.'<br />';
                    
                    //connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Contacts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
message VARCHAR (100)

)";



if ($conn->query($sql) === TRUE) {
    echo "Table Contacts created successfully"."<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

//field name variables
//$name = "wendy";
//$email = "wendy@hotmail.com";
//$age = "50";

// Attempt insert query execution
$sql1 = "INSERT INTO Contacts (name,email,message) VALUES ('$name','$email','$age')";

if($conn->query($sql1) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

$conn->close();

                    
                }
            
            ?>
            

        </section>

        <!--section one - end-->

        <!--section two - start-->

        <section>

        </section>

        <!--section two - end-->

        <!--section three - start-->

        <section>

        </section>

        <!--section three - end-->

        <!--section four - start-->

        <section>

        </section>

        <!--section four - end-->

        <!--footer - start-->

        <footer>

        </footer>

        <!--footer - end-->

        <!--socket footer - start-->

        <footer>

        </footer>

        <!--socket footer - end-->

    </body>

    <!--body - end-->

</html>

<!--html - end-->
