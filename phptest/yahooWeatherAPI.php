<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>Yahoo Weather API</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
        
        <style>      
            .results {
              border: solid 2px #000000;
              margin-bottom: 50px;
            } 
            span{
                color: blue;
            }
        </style>
       
    </head>
   
    <body> 
        
        
        <h3>Yahoo Weather API</h3> 
        
        <div class="results text-left">
            <h5>Current: </h5>
            <div id="item-title"></div>
            <div id="item-lat"></div>
            <div id="item-long"></div>
            <div id="condition-temp"></div>
            <div id="condition-text"></div>
            <h5>Forecast:</h5>
            <div id="forecast-date"></div>
            <div id="forecast-day"></div>
            <div id="forecast-high"></div>
            <div id="forecast-low"></div>
            <div id="forecast-text"></div>
        </div>
        
        <script>
            var callbackFunction = function(data) {
                var item = data.query.results.channel.item;
                var itemTitle = document.getElementById("item-title");
                var itemLat = document.getElementById("item-lat");
                var itemLong = document.getElementById("item-long");
                
                var condition = data.query.results.channel.item.condition;
                var conditionTemp = document.getElementById("condition-temp");
                var conditionText = document.getElementById("condition-text");
                
                var forecast = data.query.results.channel.item.forecast;
                var forecastID = document.getElementById("forecast-id");
                var forecastDate = document.getElementById("forecast-date");
                var forecastDay = document.getElementById("forecast-day");
                var forecastHigh = document.getElementById("forecast-high");
                var forecastLow = document.getElementById("forecast-low");
                var forecastText = document.getElementById("forecast-text");            
               
                itemTitle.innerHTML = "Title: " + item.title;
                itemLat.innerHTML= "Latitude: " + item.lat;
                itemLong.innerHTML = "Longitude: " + item.long;
                conditionTemp.innerHTML = "Temperature: " + condition.temp;
                conditionText.innerHTML = "Text: " + condition.text;
                
                for (i = 0; i < 5; i++){                
                forecastDate.innerHTML += "<span>Date: </span>" + forecast[i].date + ". ";
                forecastDay.innerHTML += "<span>Day: </span>" + forecast[i].day + ". ";
                forecastHigh.innerHTML += "<span>High: </span>" + forecast[i].high + ". ";
                forecastLow.innerHTML += "<span>Low: </span>" + forecast[i].low + ". ";
                forecastText.innerHTML += "<span>Text: </span>" + forecast[i].text + ". ";              
                }
            }
        </script>

        <script src="https://query.yahooapis.com/v1/public/yql?q=select item from weather.forecast where woeid in (select woeid from geo.places(1) where text='s40 1dj')&format=json&callback=callbackFunction"></script>
                
    </body>

</html>


