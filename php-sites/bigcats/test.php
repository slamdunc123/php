<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <!--links - start-->
        <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
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
    <body>
        
        <a href=""><i class="fa fa-camera fa-5x" aria-hidden="true"></i> Big Cats</a> <br><br>
        
        <?php
        
    $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF']
];
//Create Client Array

echo $server['Host Server Name']."<br>";
echo $server['Host Header']."<br>";
echo $server['Server Software']."<br>";
echo $server['Document Root']."<br>";
echo $server['Current Page'];

print_r($server);
        
        echo PHP_VERSION;
        
        ?>
        
    </body>
</html>
