<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Google Maps API</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
        
        <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 350px;
        width: 350px;
        margin-bottom: 50px;
      }
      
    </style>
       
    </head>
    <body>
        <?php
        // put your code here
               
        ?>
        
        <h3>Google Maps API</h3>
        <div id="map"></div>
         <div id="wind-chill"></div>
        <script>
            var map;
            function initMap(){
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 53.237011, lng: -1.4471542999999656},
                    zoom: 16
                });
                console.log(map);
            }
            
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqFtL1QFk8TFZ0yi7hIcD34O1wld2b9gY&callback=initMap" async defer></script>
        
    </body>
</html>
