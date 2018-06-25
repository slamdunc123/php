<?php //User Session Details 
    include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: user.php');
    }
?>

<!--Insert Header-->   

<?php include('header.php') ?>

<!--Main Content-->
<div class="container">
		<div class="jumbotron">
			<h2>Step Challenge</h2>
		</div>
		
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		
        
        <!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user-75x75.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username'] . " - " . $_SESSION['user']['team']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div><br>


<!--Steps User Record-->   

	<div class="row">
		<div class="col-md-3">

			<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				<div class="card-header"><?php echo $_SESSION['user']['username'] . "'s Steps" ?></div>
					<div class="card-body">
						<!--<h4 class="card-title">Primary card title</h4>-->
						<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
						<?php include('steps.php') ?>
					</div>
			</div>
		</div>

<!--Steps Input Form-->   

		<div class="col-md-3">

			<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				<div class="card-header">Input Steps</div>
					<div class="card-body">
						<!--<h4 class="card-title">Primary card title</h4>-->
						<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
						
						<form method="post" action="user.php">
							<div class="form-group">
									<label>Date</label><br>
									<input type="date" name="date" value="<?php echo $date; ?>">
							</div>
							<div class="form-group">
									<label>Steps</label><br>
									<input type="text" name="steps" value="<?php echo $steps; ?>">
							</div>
							<div class="form-group">
									<button type="submit" class="btn" name="post_btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			<div class="login-error" style="color:red;">
					<?php echo display_error(); ?><br>
				</div>
		</div>	

		<div class="col-md-3">

			<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				<div class="card-header">Team Leaderboard</div>
					<div class="card-body">
						<!--<h4 class="card-title">Primary card title</h4>-->
						<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
						<?php include('leaderboard.php') ?>
					</div>
			</div>
			</div>

			<div class="col-md-3">

			<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
				<div class="card-header">User Leaderboard</div>
					<div class="card-body">
						<!--<h4 class="card-title">Primary card title</h4>-->
						<!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
						<?php include('user-leaderboard.php') ?>
					</div>
			</div>
		</div>
    	    	
    </div>
</div>

<!--Insert Footer-->   

<?php include('footer.php') ?>