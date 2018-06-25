<?php

	$conn = mysqli_connect("localhost", "root", "", "loginapp"); //create database connection
	
	if(!$conn){ //check database connection
		echo die("Database connection failed");
	} 

?>