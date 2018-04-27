<?php

$db = new mysqli('localhost','root', '', 'my_todo_list'); // oo way
// $db = mysqli_connect('localhost', 'root', '', 'my_todo_list'); //procedural way

  if($db){
    echo "success"; //test for successful database connection
  }

 ?>
