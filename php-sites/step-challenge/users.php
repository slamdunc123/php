
<!--users table-->
<table class="table table-hover">           
            <tr>
                <th scope="col">USER</th>
                <th scope="col">TEAM</th>
            </tr>          
<?php
    $sql = "SELECT team, username FROM  users ORDER BY team ASC";
    $result = $db->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
                echo "<tr>";
                echo "<td>" . $row["username"] . "</td><td>" . $row["team"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
    //$db->close();
?>            
</table>
