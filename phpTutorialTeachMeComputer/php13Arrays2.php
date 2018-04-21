<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>php13Arrays2</title>
</head>

    <body>
   
    <?php
   $ages = array('Chris'=>18 , 'Tom'=>20 , 'Bob'=>16); //associate array
   
  
   
   echo 'Chris is ' . $ages['Chris'] . ' years old.<br>';
   echo 'Tom is ' . $ages['Tom'] . ' years old.<br>';
   echo 'Bob is ' . $ages['Bob'] . ' years old.<br>';
   
   
   print_r($ages); //prints out the values in the array
    

	?>
    </body>
    
</html>