<?php include('../functions.php') ?>
<?php include('../header.php') ?>



<?php

	$id = $_GET['id'];

	$sql = $db->prepare("SELECT * FROM users WHERE id = '$id'");
	$sql->execute();
	$results = $sql->fetch();

	if(isset($_POST['update'])){ // if button name="update" is clicked

	  $username = $_POST['username']; // store input field name="task" into variable $task

		$sql = $db->prepare("UPDATE `users` SET `username` = '$username' WHERE id = '$id'"); // sql query to update variable $task value in task field of tasks database and store in $sql variable
		$results = $sql->execute();

	  
	  if($results){ // if $query == true then...
		//echo "<h1>Task Added Successfully</h1>";
		//echo 'query successful';
		header('location: manage_users.php'); // go to index.php page
	  }

	}

?>

<div class="container">
 	<div class="jumbotron">
		<h2>Step Challenge - Admin</h2>
	</div>
  
	<a href="manage_users.php">back</a><br><br>
  	
    <div class="row">

    	<div class="col-md-10 offset-1">

          <form method="post" action=""> <!-- ensure the form action is set to the correct page, in this case this page (could leave blank or delete the action="" altogether but don't put action="update.php")-->
            <div class="form-group">
              <label for="">User: </label> <?php echo $id ?>
              <input type="text" name="username" value="<?php echo $results['username']; ?>" class="form-control" required><br>
            </div>
            <button type="submit" name="update" value="" class="btn btn-primary">Update</button> <!-- needs to be a button not input -->
          </form>

    	</div>

  	</div>

</div>

<?php include('../footer.php') ?>
