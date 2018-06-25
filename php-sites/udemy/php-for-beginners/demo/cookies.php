<?php

$name = 'SomeName';
$value = 100;
$expiration = time() + (60*60*24*7); //sets the cookie to expire in one week
//echo time();
setcookie($name, $value, $expiration);//setcookie is predefined

//chrome >> settings >> advanced >> content settings >> cookies >> see all ccookies and site data >> search >> "localhost"

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 9 - Lecture 62: Setting Cookies with PHP-->

<?php
	
if(isset($_COOKIE['SomeName'])){ //if cookie has been set...
    $someOne = $_COOKIE['SomeName'];
    echo $someOne;

}	else {
    $someOne = '';
}

?>

	
</body>
</html>



