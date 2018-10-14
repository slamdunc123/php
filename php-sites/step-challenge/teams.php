<!--team table-->
<table class="table table-hover">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">USER</th>
        <th scope="col">TEAM</th>
    </tr>
<?

    $team = $_SESSION['user']['team'];
    
    $sql = $db->prepare("SELECT id, username, team FROM users WHERE team = '$team' ORDER BY team ASC");
    $sql->execute();
    $results = $sql->fetchAll();
        if($results) {
            // output data of each row
            foreach($results as $result) {
                echo "<tr>";
                echo "<td><div class='card-text'> {$result["id"]} </div></td><td><div class='card-text'> {$result["username"]} </div></td><td><div class='card-text'> {$result["team"]} </div></td>";
                echo "</tr>";

            }
        } else {
            echo "0 results";
        }
?>
</table>
