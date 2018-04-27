<?php include 'email.php' ?>





                  <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="post">


                  <form method="post" action="index.php">
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

  				  <div class="error">
              <?= $firstnameErr ."<br>" . $lastnameErr . "<br>" . $emailErr ?>
            </div>
            <div class="success">
              <?= $success ?>
            </div>
