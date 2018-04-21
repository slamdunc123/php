<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>phpTutorial10</title>
</head>

    <body>
  
    <?php

    $name = 'Barry';
    
    if ($name == 'Chris')
        
    {
        echo 'Welcome to the website Chris. <br>';
    }
    else if ($name == 'Tom')
    
    {
        echo 'Welcome to the website Tom. <br>';
        
    }
    else 
    {
        echo 'Who are you? ' . $name . '<br>';    
    }
    
    
    
	?>
    </body>
  
</html>