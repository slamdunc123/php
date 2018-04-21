<?php 
if (isset($_POST['send_message_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    $to = 'slamdunc123@gmail.com';
    // Content-Type helps email client to parse file as HTML 
    // therefore retaining styles
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: " . $name ."<" . $email .">" . "\r\n";
    $headers .= "To: " . $to . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = "<html>
    <head>
        <title>New message from website contact form</title>
    </head>
    <body>
        <h1>Subject: " . $subject . "</h1>
        <p>Message: ".$msg."</p>
    </body>
    </html>";
    if (mail('slamdunc123@gmail.com', $subject, $message, $headers)) {
     echo "Email sent";
    }else{
     echo "Failed to send email. Please try again later";
    }
  }
?>




    <?php 

//needs to be run on a live server - not localhost