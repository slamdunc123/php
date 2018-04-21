<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Google Maps API</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">       
              
    </head>
    <body>
        <h3>Contact Form Section</h3>
                    <form id="form" method="post" action="contact.php#form" onsubmit="return validate();">
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="" class="form-control" placeholder="Name"/><br>                                                    
                        </div>
                        <div class="form-group">
                                <input type="text" name="email" id="email" value="" class="form-control" placeholder="Email"/><br>
                                </div>
                                <div class="form-group">
                                <textarea name="message" rows="5" class="form-control" placeholder="Message"></textarea><br>
                                </div>
                                <div class="form-group">
                                <input type="text" name="age" id="age" value="" class="form-control" placeholder="Age"/><br>
                                </div>
                                <div class="checkbox">
                                <input type="checkbox" name="check" /> i am human   
                                </div>
                        <input type="submit" name="submit" class="btn btn-default"/>
                    </form>
                    <div id="errors">
                        
                    </div>
                     <?php include './inc/contactFormConnection.php';?>   
                              
        <?php
        // put your code here
               
        ?>
        
        <h3>Google Maps API</h3>
        <div id="map"></div>
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
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqFtL1QFk8TFZ0yi7hIcD34O1wld2b9gY&callback=initMap" async defer>
        </script>
        
    </body>
</html>
