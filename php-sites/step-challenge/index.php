<?php include('functions.php') ?>
<?php include('header.php') ?>

		<div class="hero-image">
			<div class="hero-text">
				<h1>Step Challenge</h1>
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">

				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header text-white bg-primary">User Login</div>
						<div class="card-body text-primary bg-default">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<p class="card-text">Please provide your login credentials.</p>
								<form method="post" action="index.php">
									<fieldset>

										<div class="form-group">
											<label for="username">Username</label><br>
											<input type="text" id="username" name="username" placeholder="username">
										</div>
										
										<div class="form-group">
											<label for="password">Password</label><br>
											<input type="password" id="password" name="password" placeholder="password">
										</div>
										
										<div class="form-group">
											<button class="btn btn-primary" type="submit" class="btn" name="login_btn">Login</button>
										</div>
										
									</fieldset>
								</form>

						</div>
				</div>
				
				<div class="">
					<?php 
					echo display_error(); 
					?><br>
				</div>
			</div>

			<div class="col-md-4">

				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header text-white bg-primary">Team Leaderboard</div>
						<div class="card-body text-primary bg-default">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<?php include('team_leaderboard.php') ?>
						</div>
				</div>
			</div>

			<div class="col-md-4">

				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header text-white bg-primary">User Leaderboard</div>
						<div class="card-body text-primary bg-default">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<?php include('user_leaderboard.php') ?>
						</div>
				</div>
			</div>

		</div>
		
		<?php 
		// include 'contactForm.php' 
		?>
	</div>
	


<?php include('footer.php') ?>
