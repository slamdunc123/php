
<!--leaderboard table-->
    <table class="table table-hover">           
            <tr>
                <th scope="col">TEAM</th>
                <th scope="col">STEPS</th>
            </tr>          
<?php
    $sql = "SELECT team, SUM(steps) AS totalSteps FROM  users, posts WHERE users.id = userid GROUP BY team ORDER BY SUM(steps) DESC";
    $result = $db->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
                echo "<tr>";
                echo "<td>" . $row["team"] . "</td><td>" . $row["totalSteps"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
    //$db->close();
?>            
</table>
