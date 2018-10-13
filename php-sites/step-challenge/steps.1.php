<!--steps table-->
<table class="table table-hover">   
    <tr>
		<th scope="col"></th>
        <th scope="col">DATE</th>
        <th scope="col">STEPS</th>
    </tr>          
    
<?
	
	$sess = $_SESSION['user']['id'];
	$sql = $db->prepare("SELECT date, steps FROM posts WHERE userid = $sess ORDER BY date DESC");
	$sql->execute();
	$sqlt = $db->prepare("SELECT SUM(steps) AS totalSteps FROM posts WHERE userid = $sess");
	$sqlt->execute();
	

	$results = $sql->fetchAll();
	$resultst = $sqlt->fetch();
	$sumt = $resultst['totalSteps'];

//  highest and lowest number of steps

	$sqlHSteps = $db->prepare("SELECT MAX(steps) FROM posts WHERE userid = $sess");
	$sqlHSteps->execute();
	$sqlLSteps = $db->prepare("SELECT MIN(steps) FROM posts WHERE userid = $sess");
	$sqlLSteps->execute();

	$hSteps = $sqlHSteps->fetch();
	$lSteps = $sqlLSteps->fetch();



	echo "Total = " . $sumt . "<br><br>";

	if ($results) {
		// output data of each row
		foreach($results as $result) {
			echo "<tr>";
			if (($result["steps"] != $hSteps[0]) && ($result["steps"] != $lSteps[0])){
				echo "<td> </td><td>" . date('d-M-Y', strtotime($result['date'])) . "</td><td>" . $result["steps"] . "</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}elseif($result["steps"] == $hSteps[0]){
				echo "<td><img src='images/thumb_up.png' alt='highest' width='30px' height='30px'></td><td>" . date('d-M-Y', strtotime($result['date'])) . "</td><td>" . $result["steps"] . "</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}elseif($result["steps"] == $lSteps[0]){
				echo "<td><img src='images/thumb_down.png' alt='lowest' width='30px' height='30px'></td><td>" . date('d-M-Y', strtotime($result['date'])) . "</td><td>" . $result["steps"] . "</td>"; //converts date from Y-c-d format as stored in posts table to d-m-Y 
			}
			echo "</tr>";
		}

	} else {
		echo "0 results";
	}
?>
</table>


