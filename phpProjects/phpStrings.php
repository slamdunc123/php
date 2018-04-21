<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
</head>

<body>

<?php
echo strlen("Hello world!"); //outputs 12
?>

<br>

<?php 	
echo str_word_count("Hello world!"); //outputs 2
?>
	
<br>

<?php 
echo strrev("Hello world!"); // outputs !dlrow olleH
?>

<br>

<?php 
echo strpos("Hello world!", "world"); // outputs 6
?>

<br>

<?php 
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
</body>   
</html>