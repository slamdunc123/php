<table class="table table-hover">   
    <tr>
        <th scope="col">DATE</th>
        <th scope="col">STEPS</th>
    </tr>          
    
    <?php
$sess = $_SESSION['user']['id'];
$sql = "SELECT date, steps FROM posts WHERE userid = $sess ORDER BY date DESC";
$sqlt = "SELECT SUM(steps) AS totalSteps FROM posts WHERE userid = $sess";

$result = $db->query($sql);
$resultt = $db->query($sqlt);
$rowt = $resultt->fetch_assoc();
$sumt = $rowt['totalSteps'];

echo "Total = " . $sumt . "<br><br>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
        echo "<tr>";
        echo "<td>" . date('d-m-Y', strtotime($row['date'])) . "</td><td>" . $row["steps"] . "</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
        echo "</tr>";
    }
    
} else {
    echo "0 results";
}

//$db->close();
?>
    </table>


