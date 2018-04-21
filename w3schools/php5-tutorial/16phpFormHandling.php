<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 Form Handling</title>
</head>
<body>

<?php
//PHP 5 Form Handling

//The PHP superglobals $_GET and $_POST are used to collect form-data.

/*
PHP - A Simple HTML Form
The example below displays a simple HTML form with two input fields and a submit button:
*/
?>

<form action="16welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
/*
    When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

To display the submitted data you could simply echo all the variables. The "welcome.php" looks like this:

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
The output could be something like this:

Welcome John
Your email address is john.doe@example.com
The same result could also be achieved using the HTTP GET method:
*/
?>
<br>
<form action="16welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    
</body>
</html>