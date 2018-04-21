<?php 

print_r($_POST); //to show the value of the global variable $_POST 
//die; //die command prevent the code below from executing

// define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";

//form is submitted with POST method and validation is performed
if ($_SERVER["REQUEST_METHOD"] == "POST") { //check to see if form has been submitted
  if (empty($_POST["name"])) {              //check to see if field is empty
    $name_error = "Name is required";       //if field is empty assign text to $name_error variable 
  } else {
    $name = test_input($_POST["name"]);     //else run test_input function on field value to strip unnecessary datat then assign to $name variable
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) { //use relevant function to validate the input in the field
      $name_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["phone"])) {
    $phone_error = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid phone number"; 
    }
  }

  if (empty($_POST["url"])) {
    $url_error = "";
  } else {
    $url = test_input($_POST["url"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
      $url_error = "Invalid URL"; 
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '' ){ //if not errors then submit form
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
      
      $to = 'slamdunc123@gmail.com';
      $subject = 'Contact Form Submit';
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "From: " . $name ."<" . $email .">" . "\r\n";
      $headers .= "To: " . $to . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      if (mail($to, $subject, $message, $headers)){
          $success = "Message sent, thank you for contacting us!";
          $name = $email = $phone = $message = $url = '';
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