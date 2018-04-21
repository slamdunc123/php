<?php
            
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $message = $_POST['message'];
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
    echo '<br>';
    echo 'Thanks. You submitted the following successfully: <br>';
    echo 'Name:'.$name.'<br />';    
    echo 'Email:'.$email.'<br />';
    echo 'Age:'.$age.'<br />';
    echo 'Message:'.$message.'<br />';

//connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// create connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql query to create table
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

//field name variables if hard coding - the previous matching var references would need to be deleted
//$name = "wendy";
//$email = "wendy@hotmail.com";
//$age = "50";

// sql query to insert inot table
$sql1 = "INSERT INTO Contacts (name,email,age,message) VALUES ('$name','$email','$age','$message')";

if($conn->query($sql1) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

//close connection to database
$conn->close();
                  
}
            
?>