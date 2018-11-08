<?php include('../functions.php');?>
<?php
$id = $_GET['id'];
$sql = $db->prepare("SELECT * FROM users WHERE id = '$id'");
	$sql->execute();
	$results = $sql->fetch();
	if(isset($_POST['update'])){ // if button name="update" is clicked
		$username = $_POST['username']; // store input field name="task" into variable $task
		$firstname = $_POST['firstname']; // store input field name="task" into variable $task
		$surname = $_POST['surname']; // store input field name="task" into variable $task
		$team = $_POST['team']; // store input field name="task" into variable $task
		$sql = $db->prepare("UPDATE `users` SET `username` = '$username', `firstname` = '$firstname', `surname` = '$surname', `team` = '$team' WHERE id = '$id'"); // sql query to update variable $task value in task field of tasks database and store in $sql variable
		$results = $sql->execute();
		if($results){ // if $query == true then...
		//echo "<h1>Task Added Successfully</h1>";
		//echo 'query successful';
		header('location: manage_users.php'); // go to manage_users.php page
		}
	}
?>
<?php include('../header.php');?>
<div class="container">
 	<div class="jumbotron">
		<h2>Step Challenge - Admin</h2>
	</div>
	<a href="manage_users.php">back</a><br><br>
 		<div class="row">
			 <div class="col-md-10 offset-1">
				 <form method="post" action=""> <!-- ensure the form action is set to the correct page, in this case this page (could leave blank or delete the action="" altogether but don't put action="update.php")-->
					<div class="form-group">
						<label for="">User: </label><?php echo $id ?><br>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" value="<?php echo $results['username']; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" name="firstname" value="<?php echo $results['firstname']; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="surname">Surname</label>
						<input type="text" name="surname" value="<?php echo $results['surname']; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="team">Team</label>
						<input type="text" name="team" value="<?php echo $results['team']; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" name="update" value="" class="btn btn-primary">Update</button> <!-- needs to be a button not input -->
					</div>
				</form>
			</div>
		</div>
</div>
<?php include('../footer.php')?>