<?php include '../functions.php';

$id = $_GET['id'];

//echo $id;

$sql = "DELETE FROM users WHERE id = '$id'";

$query = $db->query($sql);

if($query){
  header('location: manage_users.php');
}



 ?>
