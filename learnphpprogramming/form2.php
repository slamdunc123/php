<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>FORM</title>
</head>
<body>


<div class="container">
<form method="post" action="process2.php">  
  <div class="form-row">
    <div class="col-md-2 mb-2">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" name="firstname" placeholder="First name" value="" required>
      <div class="valid-feedback">
        
      </div>
    </div>
    <div class="col-md-2 mb-2">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control is-valid" id="validationServer02" name="lastname" placeholder="Last name" value="" required>
      <div class="invalid-feedback">
        
      </div>
    </div>
  </div>

  <div class="form-row">  
    <div class="col-md-2 mb-2">
      <label for="validationServerUsername">Username</label>          
        <input type="text" class="form-control is-valid" id="validationServerUsername" name="username" placeholder="Username"  required>
        <div class="invalid-feedback">
         
        </div>
      
    </div>

    <div class="col-md-2 mb-2">
      <label for="validationServerUsername">Email</label>          
        <input type="text" class="form-control is-valid" id="validationServerUsername" name="email" placeholder="Email"  required>
        <div class="invalid-feedback">
         
        </div>
      
    </div>
  </div>

  <div class="form-row"> 
    <div class="col-md-2 mb-2">
      <label for="validationServerUsername">Password</label>
        <input type="password" class="form-control is-valid" id="validationServerPassword" name="password" placeholder="Password" required>
        <div class="invalid-feedback">
         
        </div>
      
    </div>

    <div class="col-md-2 mb-2">
      <label for="validationServerUsername">Confirm Password</label>
        <input type="password" class="form-control is-valid" id="validationServerPassword" name="confirmpassword" placeholder="Confirm Password" required>
        <div class="invalid-feedback">
         
        </div>
      
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-2 mb-2">
      <label for="validationServer03">City</label>
      <input type="text" class="form-control is-valid" id="validationServer03" name="city" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-2 mb-2">
      <label for="validationServer04">County</label>
      <input type="text" class="form-control is-valid" id="validationServer04" name="county" placeholder="County" required>
      <div class="invalid-feedback">
        Please provide a valid county.
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-2 mb-2">
      <label for="validationServer05">Postcode</label>
      <input type="text" class="form-control is-valid" id="validationServer05" name="postcode" placeholder="Postcode" required>
      <div class="invalid-feedback">
        Please provide a valid postcode.
      </div>
    </div>
    <div class="col-md-2 mb-2">
      <label for="validationServer05">Telephone</label>
      <input type="text" class="form-control is-valid" id="validationServer05" name="telephone" placeholder="Telephone Number" required>
      <div class="invalid-feedback">
        Please provide a valid telephone number.
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-valid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</body>
</html>