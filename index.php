<?php

if ($_POST['submit']){
    
    if (!$_POST['name']) {
        $error = "Please enter your name";        
    }
    if (!$_POST['email']) {
        $error = "Please enter your email";        
    }
    if (!$_POST['message']) {
        $error = "Please enter your message";        
    }
    if (!$_POST['check']) {
        $error = "Please confirm you are human";        
    }
    if ($error){
        $result = "Whoops, there is an error";
    }
}

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1>Contact Form</h1>
                        <?php echo $result; ?>
                        <p>Send a message via the form below</p>
                            <form action="" method="post">
                               <div class="form-group">
                                   <input type="text" name="name" class="form-control" placeholder="your name">                               
                               </div>
                               <div class="form-group">
                                   <input type="text" name="email" class="form-control" placeholder="mail">                                
                               </div>
                               <div class="form-group">
                                   <textarea name="message" rows="5"class="form-control" placeholder="message..."></textarea>                               
                               </div>
                               <div class="checkbox">                                   
                                   <input type="checkbox" name="check"> i am human                               
                               </div> 
                               <div align="center">
                                   <input type="submit" name="submit" class="btn-default" value="send message">
                               </div>
                            </form>               
                    </div>    
               </div>     
            </div>    
        </section>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>