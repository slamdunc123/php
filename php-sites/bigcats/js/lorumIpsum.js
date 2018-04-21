 //function to pull data from lorum-ipsum.json via AJAX when button is clicked
 
 lorumIpsum();
 
 function lorumIpsum(){
 
    var i = 0;
    var liBtn = document.getElementById("liBtn");
    var liInfo = document.getElementById("liInfo");
    
    liBtn.addEventListener("click", function(){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "js/lorumIpsum.json");
        xhttp.onload = function() {
            
            var ourData = JSON.parse(xhttp.responseText);
          if (this.readyState == 4 && this.status == 200) {
          
            
              liInfo.innerHTML = ourData.lorumipsum[i].text;
             //console.log(ourData.lorumipsum[i].text);
             //console.log(i);
           i++;
           };
           if (i>4){
                liBtn.style.display="none";
           };   
        };
        
        xhttp.send();
        
        
    });

 }
