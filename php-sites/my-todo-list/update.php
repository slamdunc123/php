<!DOCTYPE html>
<?php include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id = '$id'";
$rows = $db->query($sql);

$row = $rows->fetch_assoc();

if(isset($_POST['update'])){ // if button name="update" is clicked

  $task = $_POST['task']; // store input field name="task" into variable $task

  $sql = "UPDATE tasks SET task = '$task' WHERE id = '$id'"; // sql query to update variable $task value in task field of tasks database and store in $sql variable

  $query = $db->query($sql);
  if($query){ // if $query == true then...
    //echo "<h1>Task Added Successfully</h1>";
    header('location: index.php'); // go to index.php page
  }

}
//var_dump($row);

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My ToDo List</title>

<!-- styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

<div class="container">
  <h1 class="text-center">My ToDo List</h1>

  <div class="row">

    <div class="col-md-10 offset-1">



          <form method="post" action=""> <!-- ensure the form action is set to the correct page, in this case this page (could leave blank or delete the action="" altogether but don't put action="update.php")-->
            <div class="form-group">
              <label for="">Task Name</label>
              <input type="text" name="task" value="<?php echo $row['task']; ?>" class="form-control" required><br>
            </div>
            <button type"submit" name="update" value="" class="btn btn-primary">Update</button> <!-- needs to be a button not input -->
          </form>





    </div>

  </div>

</div>




<!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
