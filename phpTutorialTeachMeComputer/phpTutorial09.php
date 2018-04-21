<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>phpTutorial09</title>
</head>

    <body>
   
    <?php

    $name='Tom';
    $total=5+3;
    
    if ($name=='Chris')
    {
        echo "Hello " . $name . '<br>';
    }
    else 
        echo "You're not Chris. Hello " . $name . '<br>';
    
        
        
        if ($total==6)
            
        {
            echo "Number " . $total . '<br>';
        }
	    else 
	        echo "Number is not 6. Number is " . $total . '<br>';
        
        
        ?>
	
	
	
    </body>

</html>