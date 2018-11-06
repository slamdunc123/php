
<!--leaderboard table chart-->
      
<?
    $sql = $db->prepare("SELECT team, 
    -- SUM(steps) AS steps, 
    -- SUM(ride) AS ride, 
    -- SUM(swim) AS swim,
    (SUM(steps) + SUM(ride) + SUM(swim)) AS total 
    FROM  users, posts WHERE users.id = userid GROUP BY team ORDER BY SUM(steps) DESC");
    $sql->execute();
    $results = $sql->fetchAll();
    // print_r($results);
?>            


<div id="curve_chart" style="width: 100%; min-height: 400px"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Team', 'Total'],

        <?php
        foreach($results as $row)
        {
            echo "['".$row["team"]."',".$row["total"]."],";
        }
            
        ?>
        ]);

        var options = {
          title: 'Team Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.BarChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
</script>
