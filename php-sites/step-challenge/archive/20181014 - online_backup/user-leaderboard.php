
<!--user leaderboard table-->
<table class="table table-hover">           
            <tr>
                <th scope="col">USER</th>
                <th scope="col">STEPS</th>
            </tr>          
<?php
    $sql = "SELECT username, SUM(steps) AS totalSteps FROM  users, posts WHERE users.id = userid GROUP BY username ORDER BY SUM(steps) DESC";
    $result = $db->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
                echo "<tr>";
                echo "<td>" . $row["username"] . "</td><td>" . $row["totalSteps"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
    //$db->close();
?>            
</table>
