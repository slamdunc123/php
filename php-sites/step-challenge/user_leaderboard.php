<!--user leaderboard table-->
<table class="table table-hover">           
    <tr>
        <th scope="col"></th>
        <th scope="col">USER</th>
        <th scope="col">TOTAL</th>
    </tr>          
<?
    $sql = $db->prepare("SELECT username, 
    SUM(steps) AS steps, 
    SUM(ride) AS ride, 
    SUM(swim) AS swim,
    (SUM(steps) + SUM(ride) + SUM(swim)) AS total 
    FROM  users, posts WHERE users.id = userid GROUP BY username ORDER BY SUM(steps) DESC LIMIT 3");
    $sql->execute();
    $results = $sql->fetchAll();
    // print_r($results);
    $count = 0;
       foreach($results as $result){
           $count++;
                if($count===1){
                    $pos = '<div class="medal"><img src="images/gold.png" alt="gold" width="30px" height="30px"></div>';
                }elseif($count===2){
                    $pos = '<div class="medal"><img src="images/silver.png" alt="gold" width="30px" height="30px"></div>';
                }elseif($count===3){
                    $pos = '<div class="medal"><img src="images/bronze.png" alt="gold" width="30px" height="30px"></div>';
                }
                echo "<tr>";
                echo "<td>" . $pos ." </td><td><div class='card-text'>" . $result["username"] . "</div></td><td><div class='card-text'>" . $result["total"] . "</div></td>";
                echo "</tr>";
        }
?>            
</table>
