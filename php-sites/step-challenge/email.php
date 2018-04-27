<?php

// create php variables from form INPUT_POST
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$success = "";

// check php variables
// echo $firstname . ', ' . $lastname;


//create php error variables and set them to empty
// can be written $firstnameErr = $lastnameErr = $emailErr = $subjectErr = $messageErr = "";
$firstnameErr = "";
$lastnameErr = "";
$emailErr = "";
$subjectErr = "";
$messageErr = "";

//form is submitted with POST method and validation is performed
if (filter_has_var(INPUT_POST, 'submit')) { //check to see if form submitted
  //echo 'Submitted<br>';
  //print_r($_POST);

  if (empty($_POST["firstname"])) {              //check to see if field is empty
    $firstnameErr = "First name is required";       //if field is empty assign text to $name_error variable
  } else {
    $firstname = test_input($_POST["firstname"]);     //else run test_input function on field value to strip unnecessary datat then assign to $name variable
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) { //use relevant function to validate the input in the field
      $firstnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lastname"])) {              //check to see if field is empty
    $lastnameErr = "Last name is required";       //if field is empty assign text to $name_error variable
  } else {
    $lastname = test_input($_POST["lastname"]);     //else run test_input function on field value to strip unnecessary datat then assign to $name variable
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) { //use relevant function to validate the input in the field
      $lastnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if ($firstnameErr == '' and $lastnameErr == '' and $emailErr == ''){ //if not errors then submit form
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n"; //find all the submitted form input values and put them as a string into the one $message_body variable
      }

      //to send the mail from local host need to amend the php.ini file in xampp and then restart Apache >> php folder
      /*

[mail function]
; For Win32 only.
; http://php.net/smtp
SMTP=localhost                          eg mail.slamdunc.co.uk
; http://php.net/smtp-port
smtp_port=25

; For Win32 only.
; http://php.net/sendmail-from
;sendmail_from = me@example.com         eg slamdunc@btinternet.com

      */

      $to = 'slamdunc@btinternet.com';
      $subject = 'Contact Form Submit';
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "From: " . $firstname ."<" . $email .">" . "\r\n";
      //$headers .= "To: " . $to . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      if (mail($to, $subject, $message, $headers)){
          $success = "Message sent, thank you for contacting us!";
          $firstname = $lastname = $email = $subject = $message = '';
      }
  }

}
//strips out unnessary data from the field input values
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
