<?php include 'header.php' ?>
<br><br>

<?php include 'email.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sending email with php</title>
</head>
<body>
<div class="container">
  <!-- <form method="post" action="send_script.php">
    Name: <input type="text" name="name" > <br />
    email: <input type="email" name="email" > <br />
    Subject: <input type="text" name="subject" > <br />
    Message: <textarea name="msg"></textarea>
    <button type="submit" name="send_message_btn">Send</button>
  </form> -->


<div class="row">
  			<div class="col-md-6">

  				<div class="card text-white bg-primary mb-3" style="max-width: 26rem;">
  					<div class="card-header">Contact Form</div>
  						<div class="card-body">
  							<!--<h4 class="card-title">Primary card title</h4>-->
  							<p class="card-text">Please fill in the details below.</p>
                  <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


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



                  <button type="submit" name="submit" class="btn btn-default">Send</button>
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

</div>

</body>
</html>
