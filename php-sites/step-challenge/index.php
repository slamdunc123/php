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

				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">User Login</div>
						<div class="card-body">
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
											<button type="submit" class="btn" name="login_btn">Login</button>
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

				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Team Leaderboard</div>
						<div class="card-body">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<?php include('leaderboard.php') ?>
						</div>
				</div>
			</div>

			<div class="col-md-4">

				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">User Leaderboard</div>
						<div class="card-body">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<?php include('user_leaderboard.php') ?>
						</div>
				</div>
			</div>

		</div>
		
		<?php include 'contactForm.php' ?>
	</div>
	


<?php include('footer.php') ?>
