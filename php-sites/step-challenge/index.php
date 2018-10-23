<?php include('functions.php') ?>
<?php include('header.php') ?>

	<!-- <div class="hero-image">
		<div class="hero-text">
			<h1>Step Challenge</h1>
		</div>
	</div> -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="d-block w-100" src="images/running-1200x400.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="images/cycling-1200x400.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="images/swimming-1200x400.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<hr>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">

				<div class="card border-primary mb-3" style="max-width: 30rem;">
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

			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">

				<div class="card border-primary mb-3" style="max-width: 30rem;">
					<div class="card-header text-white bg-primary">Team Leaderboard</div>
						<div class="card-body text-primary bg-default">
							<!--<h4 class="card-title">Primary card title</h4>-->
							<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
							<?php include('team_leaderboard.php') ?>
						</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">

				<div class="card border-primary mb-3" style="max-width: 30rem;">
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
