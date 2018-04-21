
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
$name = "wendy";
$email = "wendy@hotmail.com";
$message = "50";

// Attempt insert query execution
$sql1 = "INSERT INTO Contacts (name,email,message) VALUES ('$name','$email','$message')";

if($conn->query($sql1) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

$conn->close();



?>

