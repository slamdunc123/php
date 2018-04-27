<?php include 'db.php';

$id = $_GET['id'];

//echo $id;

$sql = "DELETE FROM tasks WHERE id = '$id'";

$query = $db->query($sql);

if($query){
  header('location: index.php');
}



 ?>
