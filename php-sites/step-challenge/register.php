<?php include('functions.php') ?>
<?php include('header.php') ?>
	<div class="container">
		<div class="jumbotron">
			<h2>Step Challenge</h2>
		</div>
		<div class="row">
			<div class="col-md-4">

				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">User Registration</div>
						<div class="card-body">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<p class="card-text">Please provide your login credentials.</p>
								<form method="post" action="register.php">
									<?php echo display_error(); ?>
									<div class="form-group">
										<label for="username">Username</label><br>
										<input type="text" name="username" value="<?php echo $username; ?>">
									</div>
									<div class="form-group">
										<label for="email">Email</label><br>
										<input type="email" name="email" value="<?php echo $email; ?>">
									</div>
									<div class="form-group">
										<label for="team">Team</label><br>
										<input type="team" name="team" value="<?php echo $team; ?>">
									</div>
									<div class="form-group">
										<label for="password">Password</label><br>
										<input type="password" name="password_1">
									</div>
									<div class="form-group">
										<label for="password">Confirm Password</label><br>
										<input type="password" name="password_2">
									</div>
									<div class="form-group">
										<button type="submit" class="btn" name="register_btn">Register</button>
									</div>
									<p>
										Already a member? <a href="login.php">Sign in</a>
									</p>
								</form>

						</div>
				</div>

				<div class="login-error" style="color:red;">
					<?php echo display_error(); ?><br>
				</div>
			</div>

			<div class="col-md-4">

				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Leaderboard</div>
						<div class="card-body">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<?php include('leaderboard.php') ?>
						</div>
				</div>
			</div>
				
		</div>
		
	</div>

    

<?php include('footer.php') ?>
