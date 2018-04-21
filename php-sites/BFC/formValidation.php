<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
            //check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed"; 
              }
        }

    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
        //check if e-mail address is weell-formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }

    if(empty($_POST["website"])){
        $website = "";
    }else{
        $website = test_input($_POST["website"]);
        //check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL"; 
          }
        }
    
    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
    
    
    if ($nameErr == '' and $emailErr == '' and $genderErr == '' and $websiteErr == '' ){ //if not errors then submit form
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
      if (mail($to, $subject, $comment, $headers)){
          $success = "Message sent, thank you for contacting us!";
          $name = $email = $phone = $comment = $url = '';
      }
  }
}

//Function to format data to prevent security risks

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
?>

