<?php include('../functions.php') ?>
<?php include('../header.php') ?>

<div class="container">
		<div class="jumbotron">
			<h2>Step Challenge - Admin</h2>
		</div>
		<a href="admin.php">back</a><br><br>
		<div class="row">
			<div class="col-md-4">

				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header text-white bg-primary">Create User</div>
						<div class="card-body text-primary bg-default">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<form method="post" action="manage_users.php">

								<div class="form-group">
									<label>Username</label><br>
									<input type="text" name="username" value="<?php echo $username; ?>">
								</div>
								<div class="form-group">
									<label>Email</label><br>
									<input type="email" name="email" value="<?php echo $email; ?>">
								</div>
								<div class="form-group">
									<label>Team</label><br>
									<input type="team" name="team" value="<?php echo $team; ?>">
								</div>
								<div class="form-group">
									<label>User type</label><br>
									<select name="user_type" id="user_type" >
										<option value=""></option>
										<option value="admin">Admin</option>
										<option value="user">User</option>
									</select>
								</div>
								<div class="form-group">
									<label>Password</label><br>
									<input type="password" name="password_1">
								</div>
								<div class="form-group">
									<label>Confirm password</label><br>
									<input type="password" name="password_2">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="create_user_btn">Create</button>
								</div>
							</form>

						</div>
				</div>
				<div class="">
					<?php echo display_error(); ?><br>
				</div>
			</div>

			<div class="col-md-6">

				<div class="card border-primary mb-3" style="max-width: 60rem;">
					<div class="card-header text-white bg-primary">Users</div>
						<div class="card-body text-primary bg-default">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<?php include('users.php') ?>
						</div>
				</div>
			</div>

		</div>

</div>
	
<?php include('../footer.php') ?>