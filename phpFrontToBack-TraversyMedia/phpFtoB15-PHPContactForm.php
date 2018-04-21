<?php

  //message variables
  $msg = '';
  $msgClass = '';

  //check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    
    //get form data and assign to regular variables

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
  

  //checked required fields
  if(!empty($name) && !empty($email) && !empty($message)){
    //passed
    //echo 'Passed';
    //check email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      //failed
      $msg = 'Please provide a valid email address';
      $msgClass = 'alert-danger';
    } else {
      //passed
      //echo 'Passed';
      $msg = 'Hoorah!';
      $msgClass = 'alert-success';
    }

  } else {
    //failed
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

</head>
<body>

<!--navigation-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>-->
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

<!--contact form-->

<div class="container">

<?php if($msg !='') : ?>
  <div class="alert <?php echo $msgClass; ?>">
    <?php echo $msg; ?>
  </div>
<?php endif; ?>

<h1>Contact Us</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!--using superglobal rather than the name of this file-->
  <div class="form-row">
    <div class="col-md-4 mb-2">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '';?>">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['emai']) ? $email : '';?>">
    </div>
    <div class="form-group">
      <label for="">Message</label>
      <textarea name="message" class="form-control">
        <?php echo isset($_POST['message']) ? $message : '';?>
      </textarea>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
    
</body>
</html>