<!--steps table-->
<table class="table table-hover">   
    <tr>
		<th scope="col"></th>
        <th scope="col">DATE</th>
        <th scope="col">STEPS</th>
        <th scope="col">RIDE</th>
        <th scope="col">SWIM</th>
        <th scope="col">TOTAL</th>
    </tr>          
    
<?
	
	$sess = $_SESSION['user']['id'];

// entries by date for steps, ride, swim and total of the 3
	$sql = $db->prepare("SELECT date, steps, ride, swim, (steps + ride + swim) AS total FROM posts WHERE userid = $sess ORDER BY date DESC");
	$sql->execute();
	$results = $sql->fetchAll();
	// print_r($results);
	// $sqlSteps = $db->prepare("SELECT date, steps FROM posts WHERE userid = $sess ORDER BY date DESC");
	// $sqlSteps->execute();
	// $sqlRide = $db->prepare("SELECT date, ride FROM posts WHERE userid = $sess ORDER BY date DESC");
	// $sqlRide->execute();
	// $sqlSwim = $db->prepare("SELECT date, swim FROM posts WHERE userid = $sess ORDER BY date DESC");
	// $sqlSwim->execute();

// total steps + ride + swim
	$sqlTotal = $db->prepare("SELECT 
	SUM(steps) AS steps, 
    SUM(ride) AS ride, 
    SUM(swim) AS swim,
    (SUM(steps) + SUM(ride) + SUM(swim)) AS total 
	FROM posts WHERE userid = $sess");
	$sqlTotal->execute();
	$resultsTotal = $sqlTotal->fetch();
	
	
	// $resultsSteps = $sqlSteps->fetchAll();
	// print_r($resultsSteps);
	// $resultsRide = $sqlRide->fetchAll();
	// print_r($resultsRide);
	// $resultsSwim = $sqlSwim->fetchAll();
	// print_r($resultsSwim);
	
	// print_r($resultsTotal);
	// $resultsTotal['total'];

//  highest and lowest number of steps

	// $sqlHSteps = $db->prepare("SELECT MAX(steps) FROM posts WHERE userid = $sess");
	// $sqlHSteps->execute();
	// $sqlLSteps = $db->prepare("SELECT MIN(steps) FROM posts WHERE userid = $sess");
	// $sqlLSteps->execute();

	// $hSteps = $sqlHSteps->fetch();
	// $lSteps = $sqlLSteps->fetch();

	//  highest and lowest number of ride

	// $sqlHRide = $db->prepare("SELECT MAX(ride) FROM posts WHERE userid = $sess");
	// $sqlHRide->execute();
	// $sqlLRide = $db->prepare("SELECT MIN(ride) FROM posts WHERE userid = $sess");
	// $sqlLRide->execute();

	// $hRide = $sqlHRide->fetch();
	// $lRide = $sqlLRide->fetch();

	//  highest and lowest number of swim

	// $sqlHSwim = $db->prepare("SELECT MAX(swim) FROM posts WHERE userid = $sess");
	// $sqlHSwim->execute();
	// $sqlLSwim = $db->prepare("SELECT MIN(swim) FROM posts WHERE userid = $sess");
	// $sqlLSwim->execute();

	// $hSwim = $sqlHSwim->fetch();
	// $lSwim = $sqlLSwim->fetch();

	//  highest and lowest number of total (steps + ride + swim)

	$sqlHTotal = $db->prepare("SELECT MAX(steps + ride + swim) FROM posts WHERE userid = $sess");
	$sqlHTotal->execute();
	$sqlLTotal = $db->prepare("SELECT MIN(steps + ride + swim) FROM posts WHERE userid = $sess");
	$sqlLTotal->execute();

	$hTotal = $sqlHTotal->fetch();
	// print_r($hTotal);
	$lTotal = $sqlLTotal->fetch();
	// print_r($lTotal);


	echo "Total = " . $resultsTotal['total'] . "<br><br>";

	if ($results) {
		// output data of each row
		foreach($results as $result) {
			echo "<tr>";
			if (($result["total"] != $hTotal[0]) && ($result["total"] != $lTotal[0])){
				echo "<td> </td><td><div class='card-text'>" . date('d-M-Y', strtotime($result['date'])) . "</div></td><td><div class='card-text'>" . $result["steps"] . "</div></td><td><div class='card-text'>" . $result["ride"] . "</div></td><td><div class='card-text'>" . $result["swim"] . "</div</td><td><div class='card-text'>" . $result["total"] . "</div</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}elseif($result["total"] === $hTotal[0]){
				echo "<td><img src='images/thumb_up.png' alt='highest' width='30px' height='30px'></td><td><div class='card-text'>" . date('d-M-Y', strtotime($result['date'])) . "</div></td><td><div class='card-text'>" . $result["steps"] . "</div></td><td><div class='card-text'>" . $result["ride"] . "</div></td><td><div class='card-text'>" . $result["swim"] . "</div</td><td><div class='card-text'>" . $result["total"] . "</div</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}elseif($result["total"] === $lTotal[0]){
				echo "<td><img src='images/thumb_down.png' alt='lowest' width='30px' height='30px'></td><td><div class='card-text'>" . date('d-M-Y', strtotime($result['date'])) . "</div></td><td><div class='card-text'>" . $result["steps"] . "</div></td><td><div class='card-text'>" . $result["ride"] . "</div></td><td><div class='card-text'>" . $result["swim"] . "</div</td><td><div class='card-text'>" . $result["total"] . "</div</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}
			echo "</tr>";
		}

	} else {
		echo "0 results";
	}
?>
</table>


