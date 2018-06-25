<?php

//===== SESSION START

// start the session - there can't be anything before the <?php tag else the header will fail
session_start();

//=====


//===== DATABASE CONNECTION AND CHECK

// connect to database and store in global variable
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// check database connection
if(mysqli_connect_errno()){
	printf("Database Connection Failed: %s\n", mysqli_connect_error());
	exit();
}

// php global variable declarations
$username = "";
$email    = "";
$team = "";
$date = "";
$steps = "";
$errors   = array();

//=====


//===== LOGIN

// call the login() function if login_btn on index.php is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// login function
function login(){
	global $db, $errors;

	// grab form values and store in php variables
	$username = $_POST['username'];
	$password = $_POST['password'];

	// form validation
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password); //md5() function encrypts the variable

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user and assign user to session
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') { //check if login is admin

				$_SESSION['user'] = $logged_in_user; //assign user (all array values: id, userid, steps, date, created) to session
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/admin.php');
			}else{
				$_SESSION['user'] = $logged_in_user; //assign user (all array values: id, userid, steps, date, created) to session
				$_SESSION['success']  = "You are now logged in";

				header('location: user.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}


//admin check function
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

//=====


//===== CREATE USER

// call the create_user() function if create_user_btn on manage_users.php is clicked
if (isset($_POST['create_user_btn'])) {
	create_user();
}

// create user function
function create_user(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// grab form values and store in php variables
	$username    =  $_POST['username'];
	$email       =  $_POST['email'];
	$team		 =  $_POST['team'];
	$password_1  =  $_POST['password_1'];
	$password_2  =  $_POST['password_2'];

	// form validation
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($team)) {
		array_push($errors, "Team is required");
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// create user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = $_POST['user_type'];
			$query = "INSERT INTO users (username, email, user_type, password, team)
					  VALUES('$username', '$email', '$user_type', '$password', '$team')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			echo $_SESSION['success'];
			header('location: manage_users.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password, team)
					  VALUES('$username', '$email', 'user', '$password', '$team')";
			mysqli_query($db, $query);
/*
			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: user.php');
*/
		}
	}
}
/*
// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}
*/
/*
// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}
*/


//===== FORM ERRORS

// display form errors
function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

//=====


//=====

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}



// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
}



//===== INPUT STEPS

// call the input() function if input_btn in user.php is clicked
if (isset($_POST['input_btn'])) {
	input();
}

// input steps function
function input(){
	global $db, $date, $steps, $errors;

	// grab form values
	$date = $_POST['date'];
	$steps = $_POST['steps'];

	// form validation
	if (empty($date)) {
		array_push($errors, "Date is required");
	}
	if (empty($steps)) {
		array_push($errors, "Steps are required");
	}

	// attempt insert if no errors on form
	if (count($errors) == 0) {
		$query = "INSERT INTO posts (id, userid, steps, date, created) VALUES (NULL, {$_SESSION['user']['id']}, $steps, str_to_date('".$date."', '%Y-%c-%d'), CURRENT_TIMESTAMP)";
		mysqli_query($db, $query);
		}
}
