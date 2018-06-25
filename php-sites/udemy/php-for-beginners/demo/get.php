<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--Section 9 - Lecture 59: Using the GET Super Global-->

<?php

//$_GET can be used to redirect users to a different page
	
//$_GET;	available anywhere within our code

print_r($_GET); //print_r accepts arrays

?>

<!-- <a href="get.php?id=200">click here</a> can hard code GET parameters but it isn't usually done this way -->

<?php

$id = 10;
$button = "SUBMIT";

?>

<a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>

</body>
</html>



