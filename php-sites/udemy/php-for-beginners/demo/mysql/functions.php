<?php include "db.php"; ?>

<?php


function createRows(){
	global $conn;

if(isset($_POST["create"])){
	
	//echo "yes we got it";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//escapes special characters - Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
	
	//variables for the crypt() function - http://php.net/manual/en/function.crypt.php
	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	
	$hashF_and_salt = $hashFormat . $salt;
	$password = crypt($password, $hashF_and_salt);
	
	if (CRYPT_BLOWFISH == 1) {
    echo 'Blowfish:     ' . crypt($password, $hashF_and_salt) . "\n";
}
		
	$query = "INSERT INTO users(username, password)";
	$query .= "VALUES ('$username', '$password')"; // .= contatinates
	
	$result = mysqli_query($conn, $query); //run query against database
	
	if(!$result){ //check if query failed
		die("Query failed" . mysqli_error());
	} else {
		echo "Record Created";
	}
	
}

}



function showIds(){
	global $conn;
	
	$query = "SELECT * FROM users";	
	$result = mysqli_query($conn, $query); //run query against database

		if(!$result){ //check if query failed
			die("Query failed" . mysqli_error());
		}

	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];

		echo "<option value='$id'>$id</option>";

		}
}

function readRows(){
	global $conn;
	
	$query = "SELECT * FROM users";	
	$result = mysqli_query($conn, $query); //run query against database

		if(!$result){ //check if query failed
			die("Query failed" . mysqli_error());
		}

	while($row = mysqli_fetch_assoc($result)){		
		print_r($row);		
		}
	
}


function updateRows(){
	global $conn;
		if(isset($_POST['update'])){

			$username = $_POST['username'];
			$password = $_POST['password'];
			$id = $_POST['id'];

			$query = "UPDATE users Set ";
			$query .= "username = '$username', ";
			$query .= "password = '$password' ";
			$query .= "WHERE id = $id ";

			$result = mysqli_query($conn, $query);
			if(!$result){
				die("Query failed" . mysqli_error($conn));
			} else {
				echo "Record Updated";
			}
	
		}
}
	

function deleteRows(){
	global $conn;
		if(isset($_POST['submit'])){

			$username = $_POST['username'];
			$password = $_POST['password'];
			$id = $_POST['id'];

			$query = "DELETE FROM users ";
			$query .= "WHERE id = $id ";

			$result = mysqli_query($conn, $query);
			if(!$result){
				die("Query failed" . mysqli_error($conn));
			} else {
				echo "Record Deleted";
			}
		}
	
}


?>