<!--users table-->
<table class="table table-hover">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">USER</th>
        <th scope="col">FIRST NAME</th>
        <th scope="col">SURNAME</th>
        <th scope="col">TEAM</th>
    </tr>
<?
    $sql = $db->prepare("SELECT id, username, firstname, surname, team FROM  users ORDER BY date DESC");
    $sql->execute();
    $results = $sql->fetchAll();
        if($results) {
            // output data of each row
            foreach($results as $result) {
                echo "<tr>";
                echo "<td><div class='card-text'> {$result["id"]} </div></td>
                <td><div class='card-text'> {$result["username"]} </div></td>
                <td><div class='card-text'> {$result["firstname"]} </div></td>
                <td><div class='card-text'> {$result["surname"]} </div></td>
                <td><div class='card-text'> {$result["team"]} </div></td>
                <td><a href='update_user.php?id={$result['id']}' class='btn btn-warning form-control'>Update</a></td>
                <td><a href='delete_user.php?id={$result['id']}' class='btn btn-danger form-control'>Delete</a></td>";
                echo "</tr>";

            }
        } else {
            echo "0 results";
        }
?>
</table>
