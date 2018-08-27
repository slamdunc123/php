<!--steps table-->
<table class="table table-hover">   
    <tr>
		<th scope="col"></th>
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

// SQL for highest and lowest number of steps

	$sql_highestSteps = "SELECT MAX(steps) FROM posts WHERE userid = $sess";
	$sql_lowestSteps = "SELECT MIN(steps) FROM posts WHERE userid = $sess";

	$highestSteps = $db->query($sql_highestSteps);
	$hSteps = mysqli_fetch_row($highestSteps);

	$lowestSteps = $db->query($sql_lowestSteps);
	$lSteps = mysqli_fetch_row($lowestSteps);



	echo "Total = " . $sumt . "<br><br>";

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {

			//echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
			echo "<tr>";
			if (($row["steps"] != $hSteps[0]) && ($row["steps"] != $lSteps[0])){
				echo "<td> </td><td>" . date('d-M-Y', strtotime($row['date'])) . "</td><td>" . $row["steps"] . "</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}elseif($row["steps"] == $hSteps[0]){
				echo "<td><img src='images/thumb_up.png' alt='highest' width='30px' height='30px'></td><td>" . date('d-M-Y', strtotime($row['date'])) . "</td><td>" . $row["steps"] . "</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}elseif($row["steps"] == $lSteps[0]){
				echo "<td><img src='images/thumb_down.png' alt='lowest' width='30px' height='30px'></td><td>" . date('d-M-Y', strtotime($row['date'])) . "</td><td>" . $row["steps"] . "</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}
			echo "</tr>";
		}

	} else {
		echo "0 results";
	}

//$db->close();
?>
</table>


