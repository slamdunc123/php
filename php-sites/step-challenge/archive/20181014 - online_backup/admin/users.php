<!--users table-->
<table class="table table-hover">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">USER</th>
                <th scope="col">TEAM</th>
            </tr>
<?php
    $sql = "SELECT team, username, id FROM  users ORDER BY team ASC";
    $result = $db->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
                echo "<tr>";
                echo "<td> {$row["id"]} </td><td> {$row["username"]} </td><td> {$row["team"]} </td><td><a href='update_user.php?id={$row['id']}' class='btn btn-light'>Update</a></td><td><a href='delete_user.php?id={$row['id']}' class='btn btn-light'>Delete</a></td>";
                echo "</tr>";

            }
        } else {
            echo "0 results";
        }
    //$db->close();
?>
</table>
