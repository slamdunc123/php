<!-- mysql database connection settings -->

<?php 

//connection variables

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';

//create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br><br>";

?>

 