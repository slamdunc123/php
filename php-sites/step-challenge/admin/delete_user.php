<?php include '../functions.php';

$id = $_GET['id'];

//echo $id;

$sql = $db->prepare("DELETE FROM users WHERE id = '$id'");

$result = $sql->execute();

if($result){
  header('location: manage_users.php');
}



 ?>
