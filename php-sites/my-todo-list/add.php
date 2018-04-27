<?php //echo'ok'; ?>

<?php include 'db.php';

if(isset($_POST['add'])){ // if button name="add" is clicked

  $task = $_POST['task']; // store input field name="task" into variable $task

  $sql = "INSERT into tasks (task) values ('$task')"; // sql query to insert variable $task value in task field of tasks database and store in $sql variable

  $query = $db->query($sql); // execute $sql query agaist $db database connection and store in $query variable

  if($query){ // if $query == true then...
    //echo "<h1>Task Added Successfully</h1>";
    header('location: index.php'); // go to index.php page
  }
}

 ?>
