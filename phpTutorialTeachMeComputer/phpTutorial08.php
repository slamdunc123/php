<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>phpTutorial08</title>
</head>

    <body>
    <?php
    $num1=10;
    $num2=15;
    
    $result=$num1+$num2;
    
    //Addition
    echo $num1+$num2 . '<br>'; //25
    echo $result . '<br>'; //25
    
    //Subtraction;
    echo $num1-$num2 . '<br>'; //-5
    
    //Mutiplication
    echo $num1*$num2 . '<br>'; //150

    //Division
    echo $num1/$num2 . '<br>'; //0.66666666666667
    
    
    
    $num1++;
    $num1++;
    
    echo $num1 . '<br>'; //12
    
    $num1--;
    $num1--;
    
    echo $num1; //10

    
    
	?>
    </body>

</html>