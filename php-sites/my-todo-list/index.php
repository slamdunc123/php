<!DOCTYPE html>
<?php include 'db.php';

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "SELECT * FROM tasks limit ". $start . " , " . $perPage . " ";
$total = $db->query("SELECT * FROM tasks")->num_rows;
echo $pages = ceil($total / $perPage);


$rows = $db->query($sql);

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

      <table class="table">
        <button type="button" class="btn btn-primary" data-target="#myModal" data-toggle="modal" name="button">Add</button>
        <button type="button" class="btn btn-primary float-right" name="button">Print</button>
        <br><br>

<!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <form method="post" action="add.php" > <!-- ensure the form action is set to the correct page, in this case the add.php page-->
            <div class="form-group">
              <label for="">Task Name</label>
              <input type="text" name="task" class="form-control" required><br>
            </div>
            <button type"submit" name="add" value="" class="btn btn-primary">Add</button> <!-- needs to be a button not input -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

        <thead>
          <tr>
            <th scope="col">Id.</th>
            <th scope="col">Task</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php while($row = $rows->fetch_assoc()): ?>
            <?php //var_dump($row); ?>

            <th scope="row"><?php echo $row['id'] ?></th>
            <td class="col-md-10"><?php echo $row['task'] ?></td>
            <td>
              <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
            </td>
            <td>
              <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
            <?php endwhile; ?>
        </tbody>
      </table>
      <div class="row justify-content-center">
        <ul class="pagination">
          <?php for($i=1; $i <= $pages; $i++): ?>
          <li class="page-item">
            <a class="page-link" href="?page=<?php  echo $i; ?>&per-page=<?php echo $perPage; ?>"><?php echo $i ?></a> <!-- apends information to the url on pagination click -->
          </li>
        <?php endfor; ?>
        </ul>
      </div>
    </div>

  </div>

</div>




<!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
