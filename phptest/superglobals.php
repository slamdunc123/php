<?php

//$_SERVER SUPERGLOBAL

//Create Server Array

$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT']
];
//Create Client Array

echo $server['Host Server Name']."<br>";
echo $server['Host Header']."<br>";
echo $server['Server Software']."<br>";
echo $server['Document Root']."<br>";

print_r($server);

?>
