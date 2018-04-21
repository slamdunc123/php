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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--html - start-->

<html lang="en">

    <!--head - start-->    

    <head>

        <!--title - start-->

        <!--<title>TODO supply a title</title>-->
        <title>HTML2 Template</title>

        <!--title - end-->

        <!--meta - start-->    

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--meta - end-->

        <!--links - start-->

        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="bootstrap-3.3.7/dist/css/bootstrap.theme.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--links - end--> 

    </head>

    <!--head - end-->

    <!--body - start-->

    <body>      
        <!--<div>TODO write content</div>-->
        <!--header - start-->

        <header>


        </header>

        <!--header - end-->

        <!--section one - start-->

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

        <!--section one - end-->

        <!--section two - start-->

        <section>

        </section>

        <!--section two - end-->

        <!--section three - start-->

        <section>

        </section>

        <!--section three - end-->

        <!--section four - start-->

        <section>

        </section>

        <!--section four - end-->

        <!--footer - start-->

        <footer>

        </footer>

        <!--footer - end-->

        <!--socket footer - start-->

        <footer>

        </footer>

        <!--socket footer - end-->

    </body>

    <!--body - end-->

</html>

<!--html - end-->

