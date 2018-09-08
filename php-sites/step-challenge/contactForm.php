<?php include 'email.php' ?>


<div class="row">
  			<div class="col-md-4">

  				<div class="card border-primary mb-3" style="max-width: 26rem;">
  					<div class="card-header text-white bg-primary">Contact Form</div>
  						<div class="card-body text-primary bg-white">
  							<!--<h4 class="card-title">Primary card title</h4>-->
  							<p class="card-text">Please fill in the details below.</p>
                  <form class="" id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact-form" method="post">


                  <!-- <form method="post" action="index.php"> -->
  								<fieldset>

  								<div class="form-group">
  									<label for="firstname">First Name</label><br>
  									<input type="text" id="firstname" class="form-control" name="firstname" value="<?= $firstname ?>" placeholder="firstname">
                  </div>

                  <div class="form-group">
                    <label for="lastname">Last Name</label><br>
                    <input type="text" id="lastname" class="form-control" name="lastname" value="<?= $lastname ?>" placeholder="lastname">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="text" id="email" class="form-control" name="email" value="<?= $email ?>" placeholder="email">
                  </div>

                  <div class="form-group">
                    <label for="subject">Subject</label><br>
                    <input type="text" id="subject" class="form-control" name="subject" value="<?= $subject ?>" placeholder="subject">
                  </div>

                  <div class="form-group">
                    <label for="subject">Message</label><br>
                    <textarea class="form-control" name="message" rows="8" cols="50"></textarea>
                  </div>



                  <button class="btn btn-primary" type="submit" name="submit" class="btn btn-default">Send</button>
  								</fieldset>
  								</form>

  						</div>
  				</div>
  				<!-- <div class="login-error" style="color:red;">
  					<?php //echo display_error(); ?><br>
  				</div> -->


            <div class="error">
              <?= $firstnameErr ."<br>" . $lastnameErr . "<br>" . $emailErr ?>
            </div>
            <div class="success">
              <?= $success ?>
            </div>
      </div>

</div>
