<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>PHP 5 Forms - Required Fields</title>
</head>
<body>


<?php
//PHP 5 Forms - Required Fields

//This chapter shows how to make input fields required and create error messages if needed.

/*

PHP - Required Fields
From the validation rules table on the previous page, we see that the "Name", "E-mail", and "Gender" fields are required. These fields cannot be empty and must be filled out in the HTML form.

Field	 Validation Rules
Name	 Required. + Must only contain letters and whitespace
E-mail	 Required. + Must contain a valid email address (with @ and .)
Website	 Optional. If present, it must contain a valid URL
Comment	 Optional. Multi-line input field (textarea)
Gender	 Required. Must select one

In the previous chapter, all input fields were optional.

In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr. These error variables will hold error messages for the required fields. We have also added an if else statement for each $_POST variable. This checks if the $_POST variable is empty (with the PHP empty() function). If it is empty, an error message is stored in the different error variables, and if it is not empty, it sends the user input data through the test_input() function:

*/

//define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";//variables for catching errors
$name = $email = $gender = $comment = $website = "";//form variables


//check method is post and fields have entries
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
    }
    if(empty($_POST["website"])){
        $websiteErr = "";
    }else{
        $website = test_input($_POST["website"]);
    }
    if(empty($_POST["comment"])){
        $commentErr = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }
    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
}

//Function to format data to prevent security risks

function test_input($data){ 
    $data = trim($data); //Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
    $data = stripslashes($data); //Remove backslashes (\) from the user input data (with the PHP stripslashes() function)
    $data = htmlspecialchars($data); //The htmlspecialchars() function converts special characters to HTML entities.
    return $data;
}


?>



<!--Navigation-->

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

<!--
    PHP - Display The Error Messages
Then in the HTML form, we add a little script after each required field, which generates the correct error message if needed (that is if the user tries to submit the form without filling out the required fields):
-->

<!--Input Form - with Bootstrap-->
<div class="container">
<h2>PHP Form Validation Example2</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <br><input type="text" name="name">
<span class="error">*<?php echo $nameErr; ?></span>
<br><br>
E-mail: <br><input type="text" name="email">
<span class="error">*<?php echo $emailErr; ?></span>
<br><br>
Website: <br><input type="text" name="website">
<span class="error"><?php echo $websiteErr; ?></span>
<br><br>
Comment: <br><textarea name"comment" rows="5" cols="40"></textarea>
<br><br>
Gender: <br>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">*<?php echo $genderErr; ?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
<br><br>
</form>

<?php
//Output from form entry values 

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";

?>
<!--

The next step is to validate the input data, that is "Does the Name field contain only letters and whitespace?", and "Does the E-mail field contain a valid e-mail address syntax?", and if filled out, "Does the Website field contain a valid URL?".

-->

</div>

</body>
</html>