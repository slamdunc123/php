<!--user leaderboard table-->
<table class="table table-hover">           
    <tr>
        <th scope="col"></th>
        <th scope="col">USER</th>
        <th scope="col">STEPS</th>
    </tr>          
<?php
    $sql = "SELECT username, SUM(steps) AS totalSteps FROM  users, posts WHERE users.id = userid GROUP BY username ORDER BY SUM(steps) DESC LIMIT 3";
    $result = $db->query($sql);
        if ($result->num_rows > 0) {
            $count = 1;
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($count==1){
                    $pos = '<div class="medal"><img src="images/gold.png" alt="gold" width="30px" height="30px"></div>';
                }elseif($count==2){
                    $pos = '<div class="medal"><img src="images/silver.png" alt="gold" width="30px" height="30px"></div>';
                }elseif($count==3){
                    $pos = '<div class="medal"><img src="images/bronze.png" alt="gold" width="30px" height="30px"></div>';
                }
                
                //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
                echo "<tr>";
                echo "<td>" . $pos ." </td><td>" . $row["username"] . "</td><td>" . $row["totalSteps"] . "</td>";
                echo "</tr>";
                $count++;
            }
        } else {
            echo "0 results";
        }
    //$db->close();
?>            
</table>
