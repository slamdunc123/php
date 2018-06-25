<?php

//echo "hello this is a php page";

// database connection and connectivity check

$db = mysqli_connect('localhost', 'root', '', 'test');
echo '<pre>';
print_r($db);
echo '</pre>';

if(!$db){
    echo die("Database connection failed with the following error: <br>" . mysqli_connect_error());
}


//read rows

$query = 'SELECT * FROM contacts';

$res = mysqli_query($db, $query);

if(!$res){
    echo die("Query failed witht the following error: <br>" . mysqli_error($db));

}

while($row = mysqli_fetch_assoc($res)){
    // echo '<pre>';
    // print_r($res);
    // echo '</pre>';
    echo '<table><tr>';
    echo '<td>id: ' . $row['id'] . '</td><td> name: ' . $row['name'] . '</td><td> email: ' . $row['email'] . '</td><td> age: ' . $row['age'] .'</td><br>';
    echo '<table><tr>';
}

?>